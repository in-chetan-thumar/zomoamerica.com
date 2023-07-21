@extends('admin.layouts.master')
@section('title') Form custom field  @endsection
@section('content')
    @component('components.breadcrumb',["lists"=>['Form custom field' =>'']])
        @slot('title')  Form custom field  @endslot
    @endcomponent

    <div class="row">
        <div class="mb-3">
            {{ Form::bsDate('Date picker',null,'','',['class'=>''],[],false) }}
        </div>
       <div class="mb-3">
           {{ Form::bsText('Text box',null,'','',['class'=>''],[],false) }}
       </div>
        <div class="mb-3">
            {{ Form::bsEmail('Email text box',null,'','',['class'=>''],[],false) }}
        </div>
        <div class="mb-3">
            {{ Form::bsText('Numeric text box','','','',['class'=>' only-number-allow','maxlength' => 10],[],false) }}
        </div>
        <div class="mb-3">
            {{ Form::bsFile('File',null,'','',['class'=>''],[],false) }}
        </div>
        <div class="mb-3">
            {{ Form::bsTextArea('Text area','','','',['class'=>'','rows' => 2],[],false) }}
        </div>
        <div class="mb-3">
            {{ Form::bsCheckBox('Check Box','',1,'',['class'=>''],["1"=>'One',"2"=>'Two',"3"=>'Three'],false) }}
        </div>
        <div class="mb-3">
            {{ Form::bsRadio('Radio button','radio',1,'',['class'=>''],["1"=>'One',"2"=>'Two',"3"=>'Three'],false) }}
        </div>
        <div class="mb-3">
            {{ Form::bsSelect('Select','select',1,'',['class'=>'','placeholder'=>'Select'],["1"=>'One',"2"=>'Two',"3"=>'Three'],false) }}
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
