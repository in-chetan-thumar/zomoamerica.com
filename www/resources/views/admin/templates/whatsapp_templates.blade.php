@extends('admin.layouts.master')

@section('title')
    WhatsApp template
@endsection
@section('content')

    @component('components.breadcrumb', ['lists' => ['Dashboard' => route('root')]])
        @slot('title')
            WhatsApp template
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-3">

            <!-- Left sidebar -->
            <div class="card">

                @if (!empty($WhatsAppTemplates->first()))
                    <div class="mail-list card-body mt-2">
                        @foreach ($WhatsAppTemplates as $row)
                            <a href="{{ route('sms.templates') }}?id={{ $row->id }}"
                                class="{{ $WhatsAppTemplate->template_name == $row->template_name ? 'active' : '' }}"><i
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
                                    class="mdi mdi-account-plus"></i>&nbsp;Add whatsapp template</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- @can('WhatsAppTemplates.create') --}}
                            {{ html()->form('POST', route('whatsapp.templates.store'))
                                ->id('whats-app-template-form')
                                ->class('col-md-12')
                                ->attribute('enctype', 'multipart/form-data')
                                ->open() 
                            }}
                          
                            <input type="hidden" name="id"
                                value="{{ !empty($WhatsAppTemplate) ? $WhatsAppTemplate->id : '' }}"
                                id="whatsapp_template_id">
                            <input type="hidden" name="template_type"
                                value="{{ !empty($WhatsAppTemplate) ? $WhatsAppTemplate->template_type : '' }}">
                            {{-- @endcan --}}
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        {{html()->label('Template Name','template_name', )->class('form-label') }}
                                            {{html()->text('template_name', $WhatsAppTemplate->template_name ?? '')
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
                                        {{ html()->label( 'Content','whatsapp_template_content',)->class('form-label') }}
                                        {{ html()->textarea('whatsapp_template_content', $WhatsAppTemplate->html_template ?? '')
                                            ->class('form-control')
                                            ->placeholder('Content')
                                            ->id('whatsapp_template_content') 
                                        }}
                                        
                                        @error('whatsapp_template_content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- @can('WhatsAppTemplates.create') --}}
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                {{html()->button('Save')
                                 ->class('btn btn-primary btnSubmit waves-effect waves-light') }}
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
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\WhatsAppTemplateRequest', '#whats-app-template-form') !!}
    <script type="text/javascript">
        $(".btnSubmit").on('click', function(e) {
            $("#whats-app-template-form").submit();
            if ($("#whats-app-template-form").valid()) {
                $('#status').show();
                $('#preloader').show();
                $(".btnSubmit").prop('disabled', true);
            }
        });

        $(".btn-create").on('click', function(e) {
            $('#whatsapp_template_content, #template_name, #whatsapp_template_id').val('')

        });
    </script>
@endsection
