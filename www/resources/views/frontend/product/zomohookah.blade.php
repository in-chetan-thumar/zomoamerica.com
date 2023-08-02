@extends('frontend.layouts.master')
@section('title')
    Zomo Charcol
@endsection
@section('css')
    .row .main-content {
    padding:40px 150px 0px 150px !important;
    }

    .row .main-content .heading {
    padding:5px 10px;
    font-size: 26px;
    color: #ffffff;
    font-family: Lato;
    font-weight: 700;
    font-style: normal;
    background-color: #01ff9d !important;
    }
    .row .main-content .main-section{
    background-color: #000000 !important;
    }
    .row .main-content .main-section h1{
    color:#00ff9e;
    text-align:center;
    margin-top:30px;
    }

    .row .main-content .main-section .video iframe{
    margin-top:40x;
    }
@endsection
@section('main')
    <div class="btcm">
        <div class="container">
            <div class="breadcrumbs d-flex align-items-center">
                <a href="{{ route('frontend.home') }}">Home</a>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page">Zomo Zona Hookah
                </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="main-content">
            <div class="heading">
                <h2>ZOMO ZONA HOOKAH</h2>
            </div>
            <div class="main-section">
                <div class="video">
                    <iframe width="1230" height="700" src="https://www.youtube.com/embed/YEracpIzNq4?feature=oembed"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
                </div>
                <h1>RELEASES</h1>
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
