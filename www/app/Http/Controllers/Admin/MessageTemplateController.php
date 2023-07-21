<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailTemplateRequest;
use App\Http\Requests\SMSTemplateRequest;
use App\Http\Requests\WhatsAppTemplateRequest;
use App\Mail\SampleNotification;
use App\Mail\TempleteCreateNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\MailTemplates\Models\MailTemplate;

class MessageTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function emailIndex(Request $request)
    {
        try {
            if (isset($request->id)) {
                $emailtemplate = MailTemplate::find($request->id);
            } else {
                $emailtemplate = MailTemplate::where('template_type', 'EMAIL')->first();
            }
            $emailtemplates = MailTemplate::where('template_type', 'EMAIL')->get();
            
            $params = [];
            $params['email']= 'rabi@mailinator.com';
            // $params['cc']= ['rabi@mailinator.com','rajesh@mailinator.com','mohit@gmail.com'];
            Mail::send(new TempleteCreateNotification($params));

            return view('admin.templates.email_templates', compact('emailtemplates', 'emailtemplate'));
        } catch (\Exception $e) {
            toastr()->error(app('common-helper')->generateErrorMessage($e));
            return redirect()->back();
        }
    }

    public function SMSIndex(Request $request)
    {
        try {
            if (isset($request->id)) {
                $SMStemplate = MailTemplate::find($request->id);
            } else {
                $SMStemplate = MailTemplate::where('template_type', 'SMS')->first();
            }
            $SMStemplates = MailTemplate::where('template_type', 'SMS')->get();
            return view('admin.templates.sms_templates', compact('SMStemplates', 'SMStemplate'));
        } catch (\Exception $e) {
            toastr()->error(app('common-helper')->generateErrorMessage($e));
            return redirect()->back();
        }
    }

    public function WhatsAppIndex(Request $request)
    {
        try {
            if (isset($request->id)) {
                $WhatsAppTemplate = MailTemplate::find($request->id);
            } else {
                $WhatsAppTemplate = MailTemplate::where('template_type', 'WHATS_APP')->first();
            }
            $WhatsAppTemplates = MailTemplate::where('template_type', 'WHATS_APP')->get();
            return view('admin.templates.whatsapp_templates', compact('WhatsAppTemplates', 'WhatsAppTemplate'));
        } catch (\Exception $e) {
            toastr()->error(app('common-helper')->generateErrorMessage($e));
            return redirect()->back();
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function emailStore(EmailTemplateRequest $request)
    {
        try {
            if (empty($request->id)) {
                $emailtemplet = MailTemplate::create([
                    'template_name' => $request->template_name,
                    'template_code' => $request->template_code,
                    'mailable' => $request->mailable,
                    'subject' => $request->subject,
                    'template_type' => $request->template_type,
                    'html_template' => $request->email_template_content,
                ]);
            } else {
                $emailtemplet = MailTemplate::find($request->id)->update([
                    'template_name' => $request->template_name,
                    'template_code' => $request->template_code,
                    'mailable' => $request->mailable,
                    'subject' => $request->subject,
                    'template_type' => $request->template_type,
                    'html_template' => $request->email_template_content,
                ]);
            }

            if ($emailtemplet) {
                toastr()->success('Email template updated successfully..!');
            } else {
                toastr()->error('Something went wrong..!');
            }
            return redirect()->back();
        } catch (\Exception $e) {
           toastr()->error(app('common-helper')->generateErrorMessage($e));
            return redirect()->back();
        }
    }

    public function SMSStore(SMSTemplateRequest $request)
    {
        try {
            if (empty($request->id)) {
                $smstemplet = MailTemplate::create([
                    'template_name' => $request->template_name,
                    'template_type' => 'SMS',
                    'mailable' => '',
                    'html_template' => $request->sms_template_content,
                ]);
            } else {
                $smstemplet = MailTemplate::find($request->id)->update([
                    'template_name' => $request->template_name,
                    'mailable' => '',
                    'template_type' => $request->template_type,
                    'html_template' => $request->sms_template_content,
                ]);
            }
            if ($smstemplet) {
                toastr()->success('SMS template updated successfully..!');
            } else {
                toastr()->error('Something went wrong..!');
            }
            return redirect()->back();
        } catch (\Exception $e) {
           toastr()->error(app('common-helper')->generateErrorMessage($e));
            return redirect()->back();
        }
    }

    public function WhatsAppStore(WhatsAppTemplateRequest $request)
    {
        try {
            if (empty($request->id)) {
                $whatsapptemplet = MailTemplate::create([
                    'template_name' => $request->template_name,
                    'template_type' => 'WHATS_APP',
                    'mailable' => '',
                    'html_template' => $request->whatsapp_template_content,
                ]);
            } else {
                $whatsapptemplet = MailTemplate::find($request->id)->update([
                    'template_name' => $request->template_name,
                    'mailable' => '',
                    'template_type' => $request->template_type,
                    'html_template' => $request->whatsapp_template_content,
                ]);
            }
            if ($whatsapptemplet) {
                toastr()->success('WhatsApp template updated successfully..!');
            } else {
                toastr()->error('Something went wrong..!');
            }
            return redirect()->back();
        } catch (\Exception $e) {
           toastr()->error(app('common-helper')->generateErrorMessage($e));
            return redirect()->back();
        }
    }

}
