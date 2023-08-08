@extends('frontend.layouts.master')

@section('title')
    Thank you
@endsection

@section('main')
    <div class="inquery-thankyou">
        <div class="social-icon popup">
            <a href="#" class="insta-icon icon-box">
                <img src="{{ asset('assets/frontend/images/instagram-icon.svg') }}" alt="instagram-icon">
            </a>
            <a href="#" class="insta-icon icon-box">
                <img src="{{ asset('assets/frontend/images/call-icon.svg') }}" alt="call-icon">
            </a>
        </div>
        <h5>Thank you!</h5>
        <p>Our team will get in touch with you soon</p>
        <img src="{{ asset('assets/frontend/images/thankyou-popup-img.webp') }}" alt="thankyou-popup-img">

        <a href="{{ URL::previous() }}" class=" primary-button">close </a>
    </div>
@endsection
