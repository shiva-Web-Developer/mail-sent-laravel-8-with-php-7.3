<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{

public function sendEmail()
{
    $to_name = 'Receiver Name';
    $to_email = 'shiva7393verma@example.com';
    $data = array('name'=>"Sender Name", "body" => "Test mail");

    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('Laravel Test Mail');
        $message->from('sender@example.com','Sender Name');
    });

    return 'Email was sent successfully';
}

}
