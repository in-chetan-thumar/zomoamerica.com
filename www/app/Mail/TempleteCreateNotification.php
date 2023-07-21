<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;

class TempleteCreateNotification extends TemplateMailable implements ShouldQueue
// class TempleteCreateNotification extends TemplateMailable 
{
    use Queueable, SerializesModels;

    public  $PRACTICE_NAME, $USER, $EVENT, $DASHBOARD, $CC, $TO, $params ;

    /**
     * Create a new message instance.
     */
    public function __construct($params)
    {
        $this->params = $params ;
        $this->PRACTICE_NAME = config('constants.APP_NAME');
        $this->USER = $params['email'];
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
            $to = config('constants.EMAIL')[env('APP_ENV')]['TO'];
            $cc = config('constants.EMAIL')[env('APP_ENV')]['CC'];
        }

        $email = $this->to($to)->cc($cc)->from(config('mail.from.address'));

        return $email;
    }
}
