<?php
namespace App\Jobs;

use App\Mail\ClientContactMail;
use App\Mail\ClientAdminEnquiryMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactFormMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function handle()
    {
        info('Sending email with the following data: ', $this->data);

        // Send email to the user
        Mail::to($this->data['email'])->send(new ClientContactMail($this->data));

        // Send email to the admin
        $adminEmail = 'mwendafredrick31@gmail.com'; // Replace with the admin's email address
        Mail::to($adminEmail)->send(new ClientAdminEnquiryMail($this->data));
    }
}

