<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;

class MainController extends Controller
{
    public function sendMail(){
        // if(isset($_POST['send'])){

        //     $mail_data = [
        //         'recipient'=>'theclassical001@gmail.com',
        //         'fromEmail'=>'abrahampeter236@gmail.com',
        //         'fromName'=>'test',
        //         'subject'=>'Testing',
        //         'body'=>'just testing'
        //     ];

        //    $mail =  \Mail::send('email-template', $mail_data, function($message) use ($mail_data){
        //         $message->to($mail_data['recipient'])
        //                 ->from($mail_data['fromEmail'],$mail_data['fromName'])
        //                 ->subject($mail_data['subject']);
        //     });
        //     if($mail){
        //         return back()->with('success', 'email sent');
                
        //     }else{
        //         return back()->with('error', 'kindly recheck');
        //     }

        // }

        Mail::to('fake@gmail.com')->send(new SignUp());
        return view('test');
    }
}
