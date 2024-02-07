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
                <span class="breadcrumb_last" aria-current="page"><a href="{{ route('frontend.news') }}">News</a></span>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page">@isset($news){{ $news->title }}@endisset</span>

            </div>
        </div>
    </div>
    <div class="news-main">
        <div class="container">
            <h1>News</h1>
            <div class="news-slider-main">
                <div class="news-slider">
                    <div class="news-wrapper">
                        <div class="image">
                            @isset($news)<img src="{{ asset('storage/news') . '/' . $news->image }}" alt="news-01">@endisset
                        </div>
                        <div class="detail">
                            <div class="title">
                                <h3>@isset($news){{ $news->title }}@endisset</h3>
                            </div>
                            <p>@isset($news){!! $news->description !!}  @endisset</p>
                            <div class="news-time">
                                <div class="time">
                                    <p>Post in: <span>@isset($news){{ $news->created_at }}@endisset</span></p>
                                </div>
                                <div class="share">
                                    <p>Share:</p>
                                    <a href="https://www.instagram.com/">
                                        <img src="{{ asset('assets/images/icons/instagram.webp') }}" alt="instagram">
                                    </a>
                                    <a href="https://www.facebook.com/">
                                        <img src="{{ asset('assets/images/icons/facebook.webp') }}" alt="facebook">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container new-container">
        <div class="news-list">
            <p class="content-title">News</p>
            <div class="inner_news">
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
    </div> --}}

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
