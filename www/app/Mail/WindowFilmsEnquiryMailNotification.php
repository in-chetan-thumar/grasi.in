<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;

class WindowFilmsEnquiryMailNotification extends TemplateMailable
{
    use Queueable, SerializesModels;
    public $PRACTICE_NAME, $NAME, $TO, $USER, $FULL_NAME, $PROJECT_TYPE, $TYPE_OF_FILM, $COMPANY_NAME, $MOBILE, $WHATSAPP_MOBILE, $STATE, $EMAIL,$TYPE_OF_PROPERTY,$CITY,$PINCODE;
    /**
     * Create a new message instance.
     */
    public function __construct($params)
    {
        $this->NAME = 'Gras-i';
        $this->FULL_NAME = $params['first_name'] . ' ' . $params['last_name'];
        $this->PROJECT_TYPE = config('constants.LLUMAR_WINDOW_FILMS.PROJECT_TYPE.' . $params['project_type']);
        $this->TYPE_OF_FILM = config('constants.LLUMAR_WINDOW_FILMS.TYPE_OF_FILM.' . $params['type_of_film']);
        $this->TYPE_OF_PROPERTY = config('constants.LLUMAR_WINDOW_FILMS.TYPE_OF_PROPERTY.' . $params['type_of_property']);
        $this->COMPANY_NAME = $params['company_name'];
        $this->WHATSAPP_MOBILE = $params['whatsapp_number'];
        $this->MOBILE = $params['mobile'];
        $this->STATE = config('constants.LLUMAR_WINDOW_FILMS.STATES.' . $params['state']);
        $this->CITY = $params['city'];
        $this->EMAIL = $params['email'];
        $this->PINCODE = $params['pincode'];
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
        $to = $cc = $bcc = [];
        $to = $this->params['to'] ?? [];
        $cc = $this->params['cc'] ?? [];
        //Override to & cc variables for staging and local environment.
        $to = config('constants.EMAIL')[strtoupper(env('APP_ENV'))]['TO'];
        $cc = config('constants.EMAIL')[strtoupper(env('APP_ENV'))]['CC'];
        $email = $this->to($to)->cc($cc)->from(config('mail.from.address'));
        return $email;
    }
}
