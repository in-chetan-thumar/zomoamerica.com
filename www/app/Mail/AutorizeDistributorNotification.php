<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;

class AutorizeDistributorNotification extends TemplateMailable
// class TempleteCreateNotification extends TemplateMailable
{
    use Queueable, SerializesModels;

    public  $PRACTICE_NAME, $EVENT, $CC, $TO, $params,$FIRST_NAME,$LAST_NAME,$CITY,$STATE,$EMAIL_ADRESS,$NUMBER;

    /**
     * Create a new message instance.
     */
    public function __construct($params)
    {
        $this->params = $params;
        // $this->NAME = $params[0]->first_name;
        $this->FIRST_NAME = $params['first_name'];
        $this->LAST_NAME = $params['last_name'];
        $this->CITY = $params['city'];
        $this->STATE = $params['state'];
        $this->EMAIL_ADRESS = $params['email'] ;
        $this->NUMBER = $params['telephone'];


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
