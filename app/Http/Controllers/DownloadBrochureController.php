<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadBrochure;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class DownloadBrochureController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'pdf_file' => 'required|string',
        ]);

        // Store data in the database
        DownloadBrochure::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        // Send email (configure mail settings in .env and mail.php config)
        $mailData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ];

        Mail::send('email-body.email-enquiry-brochure-download2', $mailData, function ($message) use ($mailData) {
            $message->to('shweta.khunte@saletify.com')
                ->subject('Brochure Download Request');
            $message->from($mailData['email'], $mailData['name']);
        });

        // Get the PDF file name from the request
        $pdfFile = $request->input('pdf_file');
        $filePath = public_path('public/pdf/' . $pdfFile);

        // Check if the file exists
        if (file_exists($filePath)) {
            // Send the PDF file to the user
            return Response::download($filePath, $pdfFile)->deleteFileAfterSend(true);
        } else {
            return redirect()->back()->with('error', 'The requested PDF file does not exist.');
        }
    }
}
