@extends('frontend.layouts.master')
@section('title')
    <<<<<<< HEAD=======>>>>>>> 32d1d1c416987fa87c1d80f30d06f57b96bcda9b
    @endsection


    @section('main')
        <div class="btcm">
            <div class="container">
                <div class="breadcrumbs d-flex align-items-center">
                    <a href="/">Home</a>
                    <span> » </span>
                    <span class="breadcrumb_last" aria-current="page">Wholesalers</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="wholesale-form-section">
                <div class="wholesale-form-left">
                    <p>Please fill out the wholesale account form below to register your business. Please note that all
                        fields are mandatory.</p>
                    {!! Form::open([
                        'url' => route('frontend.storeWholesale'),
                        'method' => 'POST',
                        'id' => 'wholesale-form',
                        'class' => 'inquery-form',
                    ]) !!}
                    <div class="input-field">
                        <label for="name">BUSINESS NAME:</label>
                        {!! Form::text('bname', old('bname'), [
                            'class' => ' name',
                            'maxlength' => '100',
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('bname')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="cole-two">
                        <div class="input-field">
                            <label for="fist">FIRST NAME:</label>
                            {!! Form::text('fname', old('fname'), [
                                'class' => ' name',
                                'maxlength' => '20',
                            ]) !!}
                            <span class="text-danger" style="font-size:15px">
                                @error('fname')
                                    {{ $message }}
                                @enderror
                            </span>
                            <br>
                        </div>
                        <div class="input-field">
                            <label for="Last">LAST NAME:</label>
                            {!! Form::text('lname', old('lname'), [
                                'class' => ' name',
                                'maxlength' => '20',
                            ]) !!}
                            <span class="text-danger" style="font-size:15px">
                                @error('lname')
                                    {{ $message }}
                                @enderror
                            </span>
                            <br>
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="address">ADDRESS:</label>
                        {!! Form::text('address', old('address'), [
                            'class' => ' name',
                            'maxlength' => '100',
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="city">CITY:</label>
                        {!! Form::text('city', old('city'), [
                            'class' => ' name',
                            'maxlength' => '30',
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('city')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="state">State:</label>
                        {{ Form::Select('state', $stateArray, '', ['class' => '', 'placeholder' => 'Select']) }}
                        <span class="text-danger" style="font-size:15px">
                            @error('state')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="zip">zip code:</label>
                        {!! Form::text('zipcode', old('zipcode'), [
                            'class' => ' name',
                            'maxlength' => 6,
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('zipcode')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="website">website:</label>
                        {!! Form::text('website', old('website'), [
                            'class' => ' name',
                            'maxlength' => '70',
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('website')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="email">EMAIL ADDRESS:</label>
                        {!! Form::text('email', old('email'), [
                            'class' => ' name',
                            'maxlength' => '100',
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="number">TELEPHONE NUMBER:</label>
                        {!! Form::text('number', old('number'), [
                            'class' => ' name',
                            'maxlength' => '10',
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        {!! NoCaptcha::display() !!}
                        @error('g-recaptcha-response')
                            <span class="text-danger" style="font-size:15px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="wrap-btn">
                        <input type="submit" class="btn-black" value="SEND">
                    </div>
                    {{ Form::close() }}
                </div>
                <div class="wholesale-form-right">
                    <strong>Wholesale Info</strong>
                    <p>Contact us directly for more information</p>
                    <ul>
                        <li><strong>Address:</strong>{{ config('constants.ADRESS') }}</li>
                        <li><strong>Hours:</strong>{{ config('constants.HOURS') }}</li>
                        <li><strong>Phone:</strong>{{ config('constants.PHONE') }}</li>
                        <li><strong>Email:</strong> <a
                                href="mailto:info@zomoamerica.com">{{ config('constants.EMAIL1') }}</a>
                        </li>
                    </ul>
                    <br><a href="{{ route('frontend.authorized.wholesalers') }}">Authorized Wholesaler List</a>
                </div>
            </div>
        </div>
        <div class="footer-contact reveal">
            <div class="infomation-footer-contact container">
                <div class="footer-contact-box">
                    <p class="title-in">{{ config('constants.FOOTER_TITLE') }}</p>
                    <p>{{ config('constants.FOOTER_ADD') }}</p>
                </div>
                <div class="footer-contact-box">
                    <p class="title-in">{{ config('constants.FOOTER_TITLE1') }}</p>
                    <a href="tel:18669523331">{{ config('constants.FOOTER_TELEPHONE') }}</a>
                    <a href="mailto:sales@zomousa.com">{{ config('constants.FOOTER_GMAIL') }}</a>
                </div>
            </div>
        </div>
    @endsection

    @section('js')
        {!! JsValidator::formRequest('App\Http\Requests\Wholesale', '#wholesale-form') !!}
        {!! NoCaptcha::renderJs() !!}
    @endsection
