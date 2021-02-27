<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class MailOfInviteCollecteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $receveur;
    private $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($receveur, $data=null)
    {
        $this->receveur = $receveur;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->data;
        Mail::send('mails.mailOfInviteCollecte', $data, function($message) use ($data) {
          $message->to($this->receveur);
          $message->subject('Vous avez été sollicité pour participer à une collecte de fond.');
        });
    }
}
