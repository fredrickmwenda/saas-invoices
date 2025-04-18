<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactFormMail;
use App\Models\ClientContact;
use App\Models\Notification;
use App\Models\User;
use App\Notifications\ClientContactNotification;
use Illuminate\Http\Request;

class ClientContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // info($request->all());

        try{
            // Validate request data
            $validatedData = $request->validate([
                'service_id' => 'nullable|string',
                'name' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'message' => 'required|string',
            ]);
    
            // Save data to the database
            info($validatedData);
            $contact = new ClientContact($validatedData);
            $contact->type = 'inquiry';
            $contact->save();
            
            //dispatch job to send the mail
            SendContactFormMail::dispatch($validatedData);
    
            // Send email to user
           // Mail::to($request->email)->send(new ContactFormMail($validatedData));
    
            // Send notification to admin
            // $admin = User::where('role', 'admin')->first(); // replace with your admin retrieval logic
            // Notification::send($admin, new  ClientContactNotification($validatedData));
    
            return response()->json([
                'success' => true,
                'message' => 'Your message has been received and is being processed.',
            ]);
    
        }catch (\Exception $e) {
            info('Failed');
            // Handle exceptions here 
            return response()->json([
                'success' => false,
                'message' => 'Submission failed: ' . $e->getMessage(),
            ]);
        }
            
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientContact $clientContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientContact $clientContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientContact $clientContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientContact $clientContact)
    {
        //
    }
}
