<?php

namespace App\Http\Controllers;

use App\Models\Enquire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Add this line to import Carbon
use Illuminate\Support\Facades\Response;

class EnquireController extends Controller
{

    public function deleteMultiple(Request $request)
    {
        $enquiryIds = $request->input('enquiry_ids');

        if (!empty($enquiryIds)) {
            Enquire::whereIn('id', $enquiryIds)->delete();
        }

        return redirect()->route('enquireslist')->with('success', 'Selected enquiries have been deleted.');
    }


    public function store(Request $request)
    {        

    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'city' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    if ($this->isOnline()) {

        $recipients = [
            $request->email => [
                'template' => 'email-body.email-enquiry2',
                'subject' => 'Dolptec | Thank you for Contacting us.',
            ],
            'shweta.khunte@saletify.com ' => [
                'template' => 'email-body.email-enquiry',
                'subject' => 'Lead Received || From Dolptec Landing Page.!',
            ],
        ];

        $fromEmail = 'shweta.khunte@saletify.com'; // Set your custom from email address here
        $fromName = 'Shweta khunte'; // Set your custom from name here
        
        foreach ($recipients as $recipient => $data) {
            $template = $data['template'];
            $subject = $data['subject'];

            $mailData = [
                'recipient' => $recipient,
                'fromEmail' => $request->email,
                'fromName' => $request->fName,
                'name' => $request->input('name'), // Include the name here              
                'phone' => $request->phone,
                'city' => $request->city,
                'aboutProject' => $request->aboutProject,
                
            ];


            Mail::send($template, $mailData, function ($message) use ($mailData, $recipient, $subject) {
                $message->to($recipient)
                    ->from($mailData['fromEmail'], $mailData['fromName'])
                    ->subject($subject);
            });
        }
        
        
        $enquire = new Enquire;
        $enquire->name = $request->input('name');
        //$enquire->lName = $request->input('lName');
        $enquire->email = $request->input('email');
        $enquire->phone = $request->input('phone');
        //$enquire->designation = $request->input('designation');
        //$enquire->companyType = $request->input('companyType');
        //$enquire->companyName = $request->input('companyName');
        //$enquire->companyWebsite = $request->input('companyWebsite');
        //$enquire->country = $request->input('country');
        $enquire->city = $request->input('city');
        $enquire->aboutProject = $request->input('aboutProject');


        $enquire->save();

            return redirect()->route('thankyou');
            //return redirect()->back()->with("success","Form Submited Successfully");
        } else {
            return redirect()->back()->withInput()->with('error', 'Check your internet connection.');
        }

    return redirect()->route('thankyou');
    }

    public function isOnline($site = "https://youtube.com/")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
    
    public function enquireslist(Request $request)
    {
		if ($request->post()) {
			$from_date = $request->from_date;
			$to_date = $request->to_date;
			$enquires = DB::table('enquires')
				->where('status', 1)
				->where('created_at', '>=', $from_date)
				->where('created_at', '<=', $to_date)->latest()
				->get();
		} else {
			$from_date = empty($request->from_date) ? date('Y-m-d', strtotime('-30 day')) : $request->from_date;
			$to_date = empty($request->to_date) ? date('Y-m-d') : $request->to_date;
			$enquires = DB::table('enquires')
				->where('status', 1)
				->whereDate('created_at', '>=', $from_date)
				->whereDate('created_at', '<=', $to_date)->latest()
				->get();
		} 
        return view('admin.enquires-views.enquires', compact('enquires','from_date','to_date'));
    }
    
    public function resolved_enquire($id)
    {
        $enquires = Enquire::find($id);
        $enquires->status = 2;
        $enquires->save();
        return redirect()->back()->with('success', 'Enquire Resolved Successfully');
    }


    public function enquiresfiltrelist(Request $request)
    {
        $query = Enquire::query();

        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = Carbon::parse($request->input('start_date'));
            $endDate = Carbon::parse($request->input('end_date'));

            // If end date is before start date, swap them
            if ($endDate->lt($startDate)) {
                $tempDate = $startDate;
                $startDate = $endDate;
                $endDate = $tempDate;
            }

            // Add the date range condition to the query
            $query->whereBetween('created_at', [$startDate->startOfDay(), $endDate->endOfDay()]);
        } elseif ($request->has('date')) {
            $selectedDate = $request->input('date');
            $query->whereDate('created_at', $selectedDate);
        }

        $enquires = $query->where('status', 1)->get();
        return view('admin.enquires-views.enquires', compact('enquires'));
    }

    public function destroy(Request $request)
    {
        $enquiry = Enquire::findOrFail(base64_decode($request->enquiry_id));
        $enquiry->status = 0;
        $enquiry->save();
        return redirect()->back()->with("success","Enquiry Deleted Successfully");
    }
    
    public function removeMulti(Request $request)
    {
        $ids = $request->ids;
        Enquire::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'message'=>"Enquire successfully removed."]);
         
    }

    public function enquiresview(Request $request, $id)
    {
        $enquire = Enquire::FindOrFail($id);

        return view('admin.enquires-views.enquiresview', compact('enquire'));
    }

    
}