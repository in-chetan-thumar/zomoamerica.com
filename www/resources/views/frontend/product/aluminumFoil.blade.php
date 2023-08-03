@extends('frontend.layouts.master')
@section('title')
    Zomo Aluminum Foil
@endsection
@section('css')
    .main-content{
    padding-top:40px;

    }
      .heading{
    font-size: 22px;
    color: #ffffff;
    text-align: left;
    font-family: Lato;
    font-weight: 700;
    font-style: normal;
    background-color: #fab900 !important;

    margin-bottom:-8px;
    padding:5px 0px 5px 20px;
    }
    .row .main-content .image1{
    display: inline-block;
    vertical-align: top;
    max-width: 100%;
    }
     .main-content .image1 img{
    margin-top:100px;
    width:70%;
    margin-left:300px;
    }

   .main-content .bg_image .descrip img{
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
    <div class="container main-content">
        <div class="row">
            <div class="heading">

                <h2>ALUMINUM FOIL</h2>
            </div>
            <div class="bg_image content-image">
                <div class="row">
                <div class="col-sm-12">
                <figure class="image1">
                    <img width="800" height="159"
                        src="{{ asset('assets/frontend/images/product/INGLES_BANNER.png') }}">
                </figure>
                </div>
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <div class="aluminium_desc">
                            <p>A strong aluminum as you asked for. Imagine preparing THE section with a stretched aluminum
                                without fearing to break it? The strong Foil is 42 microns, is flexible and resistant for a
                                perfect bowl assembly and without a headache. Aluminum must be Strong. #StrechZomo</p>
                        </div>
                    </div>

                </div>
                <figure class="descrip">
                    <img src="{{ asset('assets/frontend/images/product/descricao_ingles.png') }}" width="450"
                         height="122">
                </figure>
        </div>
    </div>
@endsection
