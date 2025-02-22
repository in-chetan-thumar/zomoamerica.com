@extends('admin.layouts.master')

@section('title')
    Email template
@endsection

@section('content')

    @component('components.breadcrumb', ['lists' => ['Dashboard' => route('root')]])
        @slot('title')
            Email template
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-3">
            <!-- Left sidebar -->
            <div class="card">
                @if (!empty($emailtemplates->first()))
                    <div class="mail-list card-body mt-2">
                        @foreach ($emailtemplates as $row)
                            <a href="{{ route('email.templates') }}?id={{ $row->id }}"
                                class="{{ $emailtemplate->template_name == $row->template_name ? 'active' : '' }}"><i
                                    class="mdi mdi-email-outline"></i>&nbsp;{{ $row->template_name }}</a>
                        @endforeach
                    </div>
                @endif
            </div>
            <!-- End Left sidebar -->
        </div>
        <div class="col-md-9">
            <!-- Right Sidebar -->
            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end">
                            <a href="#" class="btn btn-primary btn-create"><i
                                    class="mdi mdi-account-plus"></i>&nbsp;Add email template</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- @can('emailtemplates.create') --}}
                            {{ html()->form('POST', route('email.templates.store'))
                                ->id('email-template-form')
                                ->class('col-md-12')
                                ->attribute('enctype', 'multipart/form-data')
                                ->open() 
                            }}
                      
                            <input type="hidden" name="id"
                                value="{{ !empty($emailtemplates) ? $emailtemplate->id : '' }}" id="email_template_id">
                            <input type="hidden" name="template_type"
                                value="{{ !empty($emailtemplates) ? $emailtemplate->template_type : '' }}">
                            {{-- @endcan --}}
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        {{html()->label('Template name', 'Template Name')->class('form-label') }}
                                        {{html()->text('template_name', $emailtemplate->template_name ?? '')
                                                ->class('form-control')
                                                ->placeholder('Template name')
                                                ->id('template_name') 
                                            }}
                                       
                                        @error('template_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        {{html()->label('Template code', 'Template Name')->class('form-label') }}
                                        {{html()->text('template_code', $emailtemplate->template_code ?? '')
                                                ->class('form-control')
                                                ->placeholder('Template code')
                                                ->id('template_code') 
                                        }}
                                     
                                        @error('template_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        {{html()->label('Mailable class', 'Mailable class')->class('form-label
                                        ') }}
                                        {{html()->text('mailable', $emailtemplate->mailable ?? '')
                                                ->class('form-control')
                                                ->placeholder('Mailable class')
                                                ->id('mailable') 
                                            }}
                                       
                                        @error('mailable')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        {{html()->label('Subject', 'subject')->class('form-label
                                       ') }}
                                        {{html()->text('subject', $emailtemplate->subject ?? '')
                                                ->class('form-control')
                                                ->placeholder('Subject')
                                                ->id('subject') 
                                        }}
                                        @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        {{html()->label('Content', 'content')->class('form-label
                                        ') }}
                                        {{html()->textarea('email_template_content', $emailtemplate->html_template ?? '')
                                                ->class('form-control')
                                                ->placeholder('Content')
                                                ->id('email_template_content') 
                                            }}
                                        @error('email_template_content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- @can('emailtemplates.create') --}}
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                {{html()->button('Save')
                                ->type('submit')
                                ->class('btn btn-primary btnSubmit waves-effect waves-light') 
                            }}
                            </div>
                            {{-- @endcan --}}
                            {{ html()->form()->close() }}
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>
    <!-- End row -->
@endsection

@section('script')
    {{-- CKEditor CDN --}}
    <script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>
    <script>
        //CK Editor
        CKEDITOR.replace('email_template_content', {
            extraPlugins: 'colorbutton,colordialog,font'
        });
    </script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\EmailTemplateRequest', '#email-template-form') !!}
    <script type="text/javascript">
        $(".btnSubmit").on('click', function(e) {
            $("#email-template-form").submit();
            if ($("#email-template-form").valid()) {
                $('#status').show();
                $('#preloader').show();
                $(".btnSubmit").prop('disabled', true);
            }
        });

        $(".btn-create").on('click', function(e) {
            $('#email_template_id, #subject, #mailable, #template_code, #template_name').val('')
            CKEDITOR.instances.email_template_content.setData('');
        });
    </script>
@endsection
