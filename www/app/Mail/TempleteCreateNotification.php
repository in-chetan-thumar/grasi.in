<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;

class TempleteCreateNotification extends TemplateMailable
{
    use Queueable, SerializesModels;

    public  $PRACTICE_NAME, $USER, $EVENT, $DASHBOARD, $CC, $TO;

    /**
     * Create a new message instance.
     */
    public function __construct($params)
    {
        $this->PRACTICE_NAME = config('constants.APP_NAME');
        $this->USER = $params['email'];
    }

    public function getHtmlLayout(): string
    {
        return view('email.email_layout')->render();
        // return view('email.email_layout')->with([
        //     'TO' => implode(', ', $to),
        //     'CC' => implode(', ', $cc),
        // ])->render();
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {


        $to = $cc = $bcc =[];

        $to = ['rabi1234@mailinator.com'];
        $cc = ['rabi1235@mailinator.com'];
        $bcc = ['rabi1236@mailinator.com'];

        //Override to & cc variables for staging and local environment.
        if (strtoupper(env('APP_ENV')) !== 'PRODUCTION') {
            $to = config('constants.EMAIL')[env('APP_ENV')]['TO'];
            $cc = config('constants.EMAIL')[env('APP_ENV')]['CC'];
        }

        $email = $this->to($to)->cc($cc)->from(config('mail.from.address'));
        return $email;
    }
}
