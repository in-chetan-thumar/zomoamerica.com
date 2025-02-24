<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;

class ContactDetailNotification extends TemplateMailable implements ShouldQueue
// class TempleteCreateNotification extends TemplateMailable
{
    use Queueable, SerializesModels;

    public  $PRACTICE_NAME, $USER, $CC, $TO, $params,$EMAIL,$SUBJECT,$MESSAGE;

    /**
     * Create a new message instance.
     */

    public function __construct($params)
    {
        $this->params = $params ;
        $this->PRACTICE_NAME = ('constants.APP_NAME');
        $this->EMAIL = $params['email'];
        $this->SUBJECT = $params['subject'];
        $this->MESSAGE = $params['message'];
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
        if (strtoupper(env('APP_ENV')) == 'LOCAL') {
            $to = config('constants.EMAIL')[strtoupper(env('APP_ENV'))]['TO'];
            $cc = config('constants.EMAIL')[strtoupper(env('APP_ENV'))]['CC'];
        }

        $email = $this->to($to)->cc($cc)->from(config('mail.from.address'));

        return $email;
    }
}
