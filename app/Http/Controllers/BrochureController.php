<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadBrochure;

class BrochureController extends Controller
{
    public function downloadBrochure(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'pdf_file' => 'required|string'
        ]);

        // Store form data in the database
        $formSubmission = new DownloadBrochure();
        $formSubmission->name = $request->name;
        $formSubmission->email = $request->email;
        $formSubmission->phone = $request->phone;
        $formSubmission->pdf_file = $request->pdf_file;
        $formSubmission->save();

        // Get the PDF file path
        $pdfFile = $request->pdf_file;
        $filePath = public_path('pdf/' . $pdfFile); // Assuming PDFs are stored in storage/app/public



        if (file_exists($filePath)) {
            // Send the PDF file to the user
            return Response::download($filePath)->deleteFileAfterSend(true);

        } else {
            return response()->json(['error' => 'The requested PDF file does not exist.'], 404);
        }
    }
}
