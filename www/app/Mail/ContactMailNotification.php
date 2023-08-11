<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;

class ContactMailNotification extends TemplateMailable
{
    use Queueable, SerializesModels;
    public $PRACTICE_NAME,$CONTACT_DETAILS ,$NAME,$TO,$USER;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {

        $this->params = $params ;
        $this->PRACTICE_NAME = config('constants.APP_NAME');
    }
    public function getHtmlLayout(): string
    {
        return view('email.email_layout')->with([
            'TO' => 'kajal.baldha@tiez.nl',
            'CC' => implode(', ', $this->params['cc'] ?? ['']),
        ])->render();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $to = $cc = $bcc =[];

        $to = $this->params['to'] ?? ['kajal.baldha@tiez.nl'];
        $cc = $this->params['cc'] ?? [];

        //Override to & cc variables for staging and local environment.
        if (strtoupper(env('APP_ENV')) !== 'PRODUCTION') {
            $to = config('constants.EMAIL')[strtoupper(env('APP_ENV'))]['TO'];
            $cc = config('constants.EMAIL')[strtoupper(env('APP_ENV'))]['CC'];
        }

        $email = $this->to($to)->cc($cc)->from(config('mail.from.address'));

        return $email;
    }
}
