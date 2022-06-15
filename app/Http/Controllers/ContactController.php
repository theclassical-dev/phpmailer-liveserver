<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class ContactController extends Controller
{
    
    // sending mail on the live server
    function sendMail(Request $request){
        if(isset($_POST['send'])){
            $name = 'testing';
            $email = 'domain email';
            $subject = 'Testing';
            // $message = $request->message;
            $data = ['content'=>'Anything'];
            $message = view('email.temp', $data)->render();

            
            require 'PHPMailer/vendor/autoload.php';
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0;                                      
            $mail->isSMTP();                                          
            $mail->Host       = env('EMAIL_HOST');                        
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = env('EMAIL_USERNAME');                  
            $mail->Password   = env('EMAIL_PASSWORD');                              
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port       = 587;
            $mail->setFrom($email, $name); 
            $mail->addAddress('theclassical001@gmail.com');
            $mail->isHTML(true);  
            $mail->Subject =  $subject;
            $mail->Body = $message;
            $dt = $mail->send();
            if($dt){
                echo 'Email has been sent successfully';
            } else{
                echo 'Something went wrong';
            }
     
    }
        return view('test');


    }
}
