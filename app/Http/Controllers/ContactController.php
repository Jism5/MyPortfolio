<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'msg' => 'required'
        ]);

        if($this->isonline()){
            $mail_data = [
                'recipient' => 'ivanmendiola72@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'subject' => $request->subject,
                'msg' => $request->msg
            ];

        \Mail::send('emailtemp', $mail_data, function($message) use ($mail_data){
               $message->to($mail_data['recipient']) 
                       ->from($mail_data['fromEmail'], $mail_data['fromName'])
                       ->subject($mail_data['subject']);
            });

            return redirect()->back()->with('success', 'Email sent successfully');

        }else{
            return redirect()->back()->withInput()->with('error', 'Check your Internet connection');
        }
    }

    public function isonline($site = "http://youtube.com/"){
        if(@fopen($site, 'r')){
            return true;
        }else{
            return false;
        }
    }
}
