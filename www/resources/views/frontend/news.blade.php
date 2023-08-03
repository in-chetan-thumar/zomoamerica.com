@extends('frontend.layouts.master')
@section('title')
    News
@endsection

@section('main')
    <div class="btcm">
        <div class="container">
            <div class="breadcrumbs d-flex align-items-center">
                <a href="{{ route('frontend.home') }}">Home</a>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page">News</span>
            </div>
        </div>
    </div>



    <div class="new-container">
        <div class="news-list">
            <p class="content-title">News</p>
<<<<<<< HEAD
            <div class="news-list-wrapper">
                @foreach ($news as $news)
                    <div class="">
                        <div class="images-box">
                            <a href="{{ route('backend.news', $news->title) }}" class="images">
                                <img src={{ asset('storage/news') . '/' . $news->image }} alt="News 1">
                            </a>
                        </div>
                        <div class="content-news">
                            <a href="{{ route('backend.news', $news->title) }}">
                                {{ $news->title }}
                            </a>
                        </div>
                    </div>
                @endforeach
=======
                {!! $table !!}
>>>>>>> cd463a246971427e1cf2be022b7d0e2276019055

        </div>
    </div>
    <div class="history-slider-main reveal">
        <div class="history-slider owl-carousel owl-theme">
            <div class="item">
                <img src={{ asset('assets/frontend/images/about-us/history-slide-01.png') }} alt="history-slider">
            </div>
            <div class="item">
                <img src={{ asset('assets/frontend/images/about-us/history-slide-02.png') }} alt="history-slider">
            </div>
            <div class="item">
                <img src={{ asset('assets/frontend/images/about-us/history-slide-03.png') }} alt="history-slider">
            </div>
            <div class="item">
                <img src={{ asset('assets/frontend/images/about-us/history-slide-04.png') }} alt="history-slider">
            </div>
            <div class="item">
                <img src={{ asset('assets/frontend/images/about-us/history-slide-05.webp') }} alt="history-slider">
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
