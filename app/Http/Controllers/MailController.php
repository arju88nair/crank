<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Mail;
use App\User;

class MailController extends Controller
{
    /**
     *  Mail method for sending mail to all users on creation of a new challenge
     */

    public function sendToAll()
    {



        dispatch(new App\Jobs\SendEmailJob($details));


        $data = array("blah"=>"sda");
        Mail::send('emails/sendtoAll',$data, function ($message) {
            $message->to('arju88nair@gmail.com', 'John Smith')->subject('Welcome!');
            $message->from('arju88nair@gmail.com', 'Nair');

        });


    }
}
