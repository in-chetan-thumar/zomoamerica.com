@extends('admin.layouts.master')

@section('title')
    SMS template
@endsection
@section('content')

    @component('components.breadcrumb', ['lists' => ['Dashboard' => route('root')]])
        @slot('title')
            SMS template
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-3">
            <!-- Left sidebar -->
            <div class="card">
                @if (!empty($SMStemplates->first()))
                    <div class="mail-list card-body mt-2">
                        @foreach ($SMStemplates as $row)
                            <a href="{{ route('sms.templates') }}?id={{ $row->id }}"
                                class="{{ $SMStemplate->template_name == $row->template_name ? 'active' : '' }}"><i
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
                                    class="mdi mdi-account-plus"></i>&nbsp;Add sms template</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- @can('SMStemplates.create') --}}
                            {!! Form::open([
                                'url' => route('sms.templates.store'),
                                'method' => 'POST',
                                'id' => 'sms-template-form',
                                'class' => 'col-md-12',
                                'enctype' => 'multipart/form-data',
                            ]) !!}
                            <input type="hidden" name="id" value="{{ !empty($SMStemplate) ? $SMStemplate->id : '' }}"
                                id="sms_template_id">
                            <input type="hidden" name="template_type"
                                value="{{ !empty($SMStemplate) ? $SMStemplate->template_type : '' }}">
                            {{-- @endcan --}}
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        {{ Form::label('Template name') }}<span class="required">*</span>
                                        {!! Form::text('template_name', !empty($SMStemplate) ? $SMStemplate->template_name : '', [
                                            'class' => 'form-control',
                                            'placeholder' => 'Template name',
                                            'id' => 'template_name',
                                        ]) !!}
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
                                        {{ Form::label('Content') }}<span class="required">*</span>
                                        {!! Form::textarea('sms_template_content', !empty($SMStemplate) ? $SMStemplate->html_template : '', [
                                            'class' => 'form-control',
                                            'placeholder' => 'Content',
                                            'id' => 'sms_template_content',
                                        ]) !!}
                                        @error('sms_template_content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- @can('SMStemplates.create') --}}
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                {{ Form::button('Save', ['class' => 'btn btn-primary btnSubmit waves-effect waves-light']) }}
                            </div>
                            {{-- @endcan --}}
                            {!! Form::close() !!}
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
    {!! JsValidator::formRequest('App\Http\Requests\SMStemplateRequest', '#sms-template-form') !!}
    <script type="text/javascript">
        $(".btnSubmit").on('click', function(e) {
            $("#sms-template-form").submit();
            if ($("#sms-template-form").valid()) {
                $('#status').show();
                $('#preloader').show();
                $(".btnSubmit").prop('disabled', true);
            }
        });

        $(".btn-create").on('click', function(e) {
            $('#sms_template_content, #template_name, #sms_template_id').val('')

        });
    </script>
@endsection
