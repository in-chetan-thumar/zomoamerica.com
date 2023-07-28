<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;

class wholesaleDetailMail extends TemplateMailable
// class TempleteCreateNotification extends TemplateMailable 
{
    use Queueable, SerializesModels;

    public  $PRACTICE_NAME, $EVENT, $CC, $TO, $params,$NAME,$FIRST_NAME,$LAST_NAME,$BUISNESS_NAME,$ADRESS,$CITY,$STATE,$ZIPCODE,$WEBSITE,$EMAIL_ADRESS,$NUMBER;

    /**
     * Create a new message instance.
     */
    public function __construct($params)
    {
        $this->params = $params;
        // $this->NAME = $params[0]->first_name;
        $this->FIRST_NAME = $params[0]->first_name;
        $this->LAST_NAME = $params[0]->last_name;
        $this->BUISNESS_NAME = $params[0]->buisness_name;
        $this->ADRESS = $params[0]->first_name;
        $this->CITY = $params[0]->city;
        $this->STATE = $params[0]->state;
        $this->ZIPCODE = $params[0]->zipcode;
        $this->WEBSITE = $params[0]->website;
        $this->EMAIL_ADRESS = $params[0]->email;
        $this->NUMBER = $params[0]->telephone;


        $this->PRACTICE_NAME = config('constants.APP_NAME');
    }

    public function getHtmlLayout(): string
    {
        return view('email.email_layout')->with([
            'TO' => $this->params['email'],
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
        $to = $this->params['to'] ?? [];
        $cc = $this->params['cc'] ?? [];
        $bcc = ['rabi1236@mailinator.com'];
        //Override to & cc variables for staging and local environment.
        if (strtoupper(env('APP_ENV')) !== 'PRODUCTION') {
            $to = config('constants.EMAIL')[strtoupper(env('APP_ENV'))]['TO'];
            $cc = config('constants.EMAIL')[strtoupper(env('APP_ENV'))]['CC'];
        }
        $email = $this->to($to)->cc($cc)->from(config('mail.from.address'));

        return $email;
    }
}
