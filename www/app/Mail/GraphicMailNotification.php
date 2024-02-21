<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;

class GraphicMailNotification extends TemplateMailable
{
    use Queueable, SerializesModels;
    public $PRACTICE_NAME ,$NAME,$CONTACT_FIRST_NAME,$CONTACT_LAST_NAME,$CONTACT_EMAIL,$CONTACT_SUBJECT,$CONTACT_NUMBER;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        $this->NAME = 'Gras-i';
        $this->CONTACT_FIRST_NAME = $params['first_name'];
        $this->CONTACT_LAST_NAME = $params['last_name'];
        $this->CONTACT_EMAIL = $params['email'];
        $this->CONTACT_NUMBER = $params['number'];
        $this->CONTACT_SUBJECT = $params['subject'];
        $this->PRACTICE_NAME = config('constants.APP_NAME');
    }
    public function getHtmlLayout(): string
    {
        return view('email.email_layout')->with([
            'TO' => 'enquiry@grasi.in',
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

        $to = $this->params['to'] ?? ['enquiry@grasi.in'];
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
