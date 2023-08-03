@extends('frontend.layouts.master')
@section('title')
    Zomo Charcol
@endsection
@section('css')
    .main_content{
    padding:40px 150px 0px 150px !important;
    }
    .row .main_content .heading{
    font-size: 22px;
    color: #ffffff;
    text-align: left;
    font-family: Lato;
    font-weight: 700;
    font-style: normal;
    background-color: #fab900 !important;
    padding:5px 6px;
    }

    .row .main_content .heading h1{
    font-size: 26px;
    color: #ffffff;
    text-align: left;
    font-family: Lato;
    font-weight: 700;
    font-style: normal;
    }
    .row .main_content .image1{
    display: inline-block;
    vertical-align: top;
    max-width: 100%;
    }
    .row .main_content .image1 img{
    margin-top:100px;
    width:70%;
    margin-left:300px;
    }

    .row .main_content .bg_image .descrip img{
    width: 40%;
    margin-top:50px;
    margin-left:50%;
    }
@endsection
<!--  -->
@section('main')
    <div class="btcm">
        <div class="container">
            <div class="breadcrumbs d-flex align-items-center">
                <a href="{{ route('frontend.home') }}">Home</a>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page"> Aluminum Foil</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="main_content ">
            <div class="heading">
                <h1>ALUMINUM FOIL</h1>
            </div>
            <div class="bg_image content-image">
                <figure class="image1">
                    <img width="800" height="159"
                        src="{{ asset('assets/frontend/images/product/INGLES_BANNER.png') }}">
                </figure>
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <div class="aluminium_desc">
                            <p>A strong aluminum as you asked for. Imagine preparing THE section with a stretched aluminum
                                without fearing to break it? The strong Foil is 42 microns, is flexible and resistant for a
                                perfect bowl assembly and without a headache. Aluminum must be Strong. #StrechZomo</p>
                        </div>
                    </div>
                    <figure class="descrip">
                        <img src="{{ asset('assets/frontend/images/product/descricao_ingles.png') }}" width="450"
                            height="122">
                    </figure>
                </div>
            </div>
        </div>
    </div>
@endsection
