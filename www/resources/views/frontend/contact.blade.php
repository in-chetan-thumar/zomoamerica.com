@extends('frontend.layouts.master')
@section('title')
    
@endsection


@section('main')

        <div class="btcm">
            <div class="container">
                <div class="breadcrumbs d-flex align-items-center">
                    <a href="/">Home</a>
                    <span> » </span>
                    <span class="breadcrumb_last" aria-current="page">Contact</span>
                </div>
            </div>
        </div>

        <div class="contact-us-section">

            <div class="container">
                <h5 class="title-main">CONTACT US</h5>
                <p class="sub-text">We would like to hear <b>about you </b>just send us a message!</p>
                <div class="content-infomation">
                    <div class="contact-form">
                        <p>LETS GET IN TOUCH!</p>
                        {!! Form::open([
                            'url' => route('frontend.storeContact'),
                            'method' => 'POST',
                            'id' => 'Enquery-top-form',
                            'class' => 'form-contact-us',
                        ]) !!}

                        {{ Form::text('email', old('email'), ['class' => '','maxlength' => '50','placeholder' => 'Email']) }}
							@error('email')
								<span class="text-danger" style="font-size:15px">
										{{ $message }}
								</span>
							@enderror

                        {{ Form::text('subject', old('subject'), ['class' => '','maxlength' => '50', 'placeholder' => 'Subject']) }}
							@error('subject')
								<span class="text-danger" style="font-size:15px">
										{{ $message }}
								</span>
							@enderror
                        {{ Form::bsTextArea('', 'message', '', '', ['placeholder' => 'Message', 'maxlength' => '150','class' => '', 'rows' => 10, 'cols' => '30'], [], false) }}
                        <div class="row">
                            {!! NoCaptcha::display() !!}
                                @error('g-recaptcha-response')
                            <span class="text-danger" style="font-size:15px">
                                    {{ $message }}
                            </span>
                                @enderror
                        </div>
                        <button type="submit">Send Message</button>
                        {{ Form::close() }}
                    </div>
                    <div class="map-infomation">
                        <div class="image-location">
                            <div class="icon">
                                <img src={{ asset("assets/frontend/images/location-icon.webp") }} alt="location">
                            </div>
                                <p>Location</p>
                                </div>
                                <div class="map-box">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2141.127457838495!2d-54.6431055207775!3d-25.507287348071166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f68571c6f023c1%3A0x21c1ba001e986ac5!2sFlavors%20of%20Americas%20S.A.!5e0!3m2!1spt-BR!2spy!4v1572973947331!5m2!1spt-BR!2spy"
                                width="600" height="350" frameborder="0" style="border: 0px; pointer-events: none;"
                                allowfullscreen=""></iframe>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>

                                <div class="footer-contact reveal">
            <div class="infomation-footer-contact container">
                <div class="footer-contact-box">
                    <p class="title-in">{{ config("constants.FOOTER_TITLE")}}</p>
                    <p>{{ config("constants.FOOTER_ADD")}}</p>
                </div>
                <div class="footer-contact-box">
                    <p class="title-in">{{ config("constants.FOOTER_TITLE1")}}</p>
                    <a href="tel:18669523331">{{ config("constants.FOOTER_TELEPHONE")}}</a>
                    <a href="mailto:sales@zomousa.com">{{ config("constants.FOOTER_GMAIL")}}</a>
                </div>
            </div>
        </div>

     @section('js')
    {!! NoCaptcha::renderJs() !!}
@endsection
     
@endsection
