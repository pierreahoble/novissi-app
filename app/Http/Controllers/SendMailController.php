<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\Fonctions;
use App\Jobs\MailOfInviteCollecteJob;
use Mail;

class SendMailController extends Controller
{
    public function index(Request $request)
    {
        $newPassword = Fonctions::getRamdomText(4);

        $data = [
          'subject' => 'Subjet',
          'name'    => 'Simon',
          'email'   => 'anayoulrich@gmail.com',
          'content' => $newPassword
        ];

        Mail::send('mails.newPassword', $data, function($message) use ($data) {
          $message->to($data['email']);
          $message->subject($data['subject']);
        });

    }

    public function collecteMail(){
        $data = [
          'subject' => 'Subjet',
          'name'    => 'Simon',
          'email'   => 'anayoulrich@gmail.com',
        ];

        $this->dispatch(new MailOfInviteCollecteJob('anayoulrich@gmail.com', $data));

        dd('terminer');
    }
}