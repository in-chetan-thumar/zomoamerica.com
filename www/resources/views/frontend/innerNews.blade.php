@extends('frontend.layouts.master')
@section('title')
@endsection

@section('main')
    <div class="btcm">
        <div class="container">
            <div class="breadcrumbs d-flex align-items-center">
                <a href="{{ route('frontend.home') }}">Home</a>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page"><a href="{{ route('frontend.news') }}">News</a></span>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page">{{ $news->title }}</span>

            </div>
        </div>
    </div>



    <div class="new-container">
        <div class="news-list">
            <p class="content-title">News</p>
            <div class="news-list-wrapper">
                <div class="news-box ">
                    <div class="images-box">
                        <a href="#" class="images">
                            <img src={{ asset('storage/news') . '/' . $news->image }} alt="News 1">
                        </a>
                    </div>

                    <div class="content-news">
                        <a href="{{ route('backend.news', $news->title) }}">
                            {{ $news->title }}
                        </a>
                        <p>{{ $news->description }}</p>
                    </div>
                </div>
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
