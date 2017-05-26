<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;


class ContactController extends Controller
{
    public function sendMAil($locale, Request $request)
    {

        App::setLocale($locale);

        $name = $request->input('name');
        $email = $request->input('email');
        $text = $request->input('message');

        $sendable = TRUE;

        if ( strlen($name) && strlen($email) && strlen($text) )
        {

            // kinda fiddly way to check if the email is valid

            $atPos = strpos($email , "@"); //False si not exist

            // exploded email: array[0]==adress name ; array[1]==host
            $cropedMail = explode("@" , $email);

            // size of the host
            $hebSize = strlen($cropedMail[1]);

            // nuber of @ in the whole adress
            $atCount = count($cropedMail) -1; 

            //count the amount of . in the right hand part
            $explodedHeb = explode("." , $cropedMail[1]);
            $dotCount = count($explodedHeb) -1; 


            // packed test using all of the above
            if (!(($atPos>3) && ($hebSize>=4) && ($dotCount==1) && ($atCount==1) && $atPos)){

                $mailreport = trans('contact.email');
                $sendable = FALSE;

            }
        }
        else
        {
            $sendable = False;
            $mailreport = trans('contact.fill');
        }

        if ($sendable)
        {
            Mail::to('ivan.armagnat@gmail.com')->send(new Contact($name, $email, $text));
            $mailreport = trans('contact.success');
        }
        

        return view('contact', ['active' => 'contact', 'mailreport' => $mailreport]);


    }
}
