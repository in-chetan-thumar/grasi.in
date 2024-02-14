<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;

class EnquiryMailNotification extends TemplateMailable
{
    use Queueable, SerializesModels;
    public $PRACTICE_NAME ,$NAME,$TO,$USER,$ENQUIRY_FULL_NAME,$ENQUIRY_BRAND,$ENQUIRY_STATE,$ENQUIRY_CITY,$ENQUIRY_PINCODE,$ENQUIRY_MOBILE,$ENQUIRY_EMAIL;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {



        $this->NAME = 'Gras-i';
        $this->ENQUIRY_FULL_NAME = $params['full_name'];
        $this->ENQUIRY_BRAND = $params['brand'];
        $this->ENQUIRY_STATE = $params['state'];
        $this->ENQUIRY_CITY = $params['city'] ;
        $this->ENQUIRY_PINCODE = $params['pincode'] ;
        $this->ENQUIRY_MOBILE = $params['mobile'] ;
        $this->ENQUIRY_EMAIL = $params['email'] ;
        $this->PRACTICE_NAME = config('constants.APP_NAME');
    }
    public function getHtmlLayout(): string
    {
        return view('email.email_layout')->with([
            'TO' => 'enquiry@gras.in',
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
