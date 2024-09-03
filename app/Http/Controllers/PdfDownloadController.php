<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PdfDownload;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class PdfDownloadController extends Controller
{
    public function showMain()
    {
        return view('home-page.index');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'pdf_file' => 'required|string',
        ]);

        // Check if the form submission already exists within a certain timeframe (e.g., 1 minute)
        $existingSubmission = PdfDownload::where('email', $request->email)
                                         ->where('created_at', '>=', now()->subMinutes(1))
                                         ->first();

        if ($existingSubmission) {
            return response()->json(['error' => 'Duplicate submission detected. Please wait before submitting again.'], 400);
        }

        // Store data in the database within a database transaction
        try {
            \DB::beginTransaction();
            PdfDownload::create($request->only(['name', 'email', 'phone', 'pdf_file']));
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            return response()->json(['error' => 'Failed to save form data. Please try again.'], 500);
        }

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
        $filePath = public_path('pdf/' . $pdfFile);

        // Check if the file exists
        if (file_exists($filePath)) {
            return response()->json(['pdf_url' => url('pdf/' . $pdfFile)]);
        } else {
            return response()->json(['error' => 'The requested PDF file does not exist.'], 404);
        }
    }

    public function showDownloads()
    {
        $downloads = PdfDownload::orderBy('created_at', 'desc')->get();
        $from_date = null;
        $to_date = null;
        return view('admin.download-brochure.index', compact('downloads', 'from_date', 'to_date'));
    }

    public function showThankYou()
    {
        return view('thankyou');
    }

    public function deleteMultiples(Request $request)
{
    // Validate the request
    $request->validate([
        'lead_ids' => 'required|array',
        'lead_ids.*' => 'exists:pdf_downloads,id',
    ]);

    // Delete the selected leads
    PdfDownload::whereIn('id', $request->lead_ids)->delete();

    return redirect()->back()->with('success', 'Selected leads have been deleted successfully.');
}


public function filterLeads(Request $request)
{
    // Validate the request
    $request->validate([
        'from_date' => 'required|date',
        'to_date' => 'required|date|after_or_equal:from_date',
    ]);

    // Retrieve inputs from the request
    $from_date = $request->input('from_date');
    $to_date = $request->input('to_date');

    // Query PdfDownload records based on date range
    $downloads = PdfDownload::whereBetween('created_at', [$from_date, $to_date])->get();

    // Pass the filtered records and dates to the view
    return view('admin.download-brochure.index', compact('downloads', 'from_date', 'to_date'));
}




    public function viewLead($id)
{
    $lead = PdfDownload::findOrFail($id);
    return view('admin.download-brochure.view', compact('lead'));
}

    public function deletes($id)
    {
        // Find the PdfDownload record by ID or throw a 404 error if not found
        $pdfDownload = PdfDownload::findOrFail($id);

        // Delete the record
        $pdfDownload->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'PdfDownload record deleted successfully.');
    }


}
