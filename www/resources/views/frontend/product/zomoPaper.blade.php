@extends('frontend.layouts.master')
@section('title')
        Zomo Papers
@endsection
@section("css")
    .main-content{
        padding:20px 100px;
    }
    .heading{
        background-color:red;
    }
    .heading-h1{
        padding:10px;
    }
    .vc_custom1{
        background-color:black;
    }
    .vc_custom2{
        background-color:#ce9b78;
    }
    .wpb_content_element{
        padding:20px 30px;
    }
    .owl-dots{
        margin-right:180px;
        margin-top:100px;
    }
@endsection
@section('main')
    <div class="row">
        <div class="btcm">
            <div class="container">
                <div class="breadcrumbs d-flex align-items-center">
                    <a href="{{ route('frontend.home') }}">Home</a>
                    <span> » </span>
                    <span class="breadcrumb_last" aria-current="page"> Rolling Paper</span>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="main-content">
                <div class="heading">
                        <h1 style="font-size: 26px;color: #ffffff;text-align: left;font-family:Lato;font-weight:700;font-style:normal" class="heading-h1">ZOMO PAPER</h1>
                </div>
                <div class="vc_custom1">
                    <div class="row">
                        <div class="col-sm-6" style="margin-top:70px">
                            <figure class="vc_figure">
                                <img src="{{ asset('assets/frontend/images/product/zomo_paper_black.png')}}" width="654" height="637">
                            </figure>
                        </div>
                        <div class="col-sm-6" style="margin-top:70px">
                            <h1 style="font-size: 3.5rem;color: #ffffff;text-align: center;font-family:Titillium Web;font-weight:600;font-style:normal" class="">CLASSIC</h1>

                            <div class="wpb_content_element">
                                    <p style="text-align: center;
                                    font-family: 'Titillium Web';
                                    font-weight: 600;
                                    font-size: 25px;
                                    "><span style="color: #ffffff;">Use of ultrathin paper with vegetable rubber to ensure a standard burn of the product. We have a variety of sizes to meet your needs.</span></p>
                            </div>

                            <div class="owl-carousel owl-theme home-banner">
                                <div class="item" style="width:70%;margin-left:100px;margin-top:170px">
                                    <img  src="{{ asset('assets/frontend/images/product/paper1.png')}}" width="70" height="100" alt="mobile-images">
                                </div>
                                <div class="item"style="width:70%;margin-left:100px;margin-top:170px" >
                                    <img  src="{{ asset('assets/frontend/images/product/paper2.png')}}" width="70" height="100" alt="mobile-images">
                                </div>
                                <div class="item" style="width:70%;margin-left:100px;margin-top:170px">
                                    <img  src="{{ asset('assets/frontend/images/product/paper3.png')}}" width="70" height="100" alt="mobile-images">
                                </div>
                                <div class="item" style="width:70%;margin-left:100px;margin-top:170px">
                                    <img  src="{{ asset('assets/frontend/images/product/paper4.png')}}" width="70" height="100" alt="mobile-images">
                                </div>
                                <div class="item" style="width:70%;margin-left:100px;margin-top:170px">
                                    <img  src="{{ asset('assets/frontend/images/product/paper5.png')}}" width="70" height="100" alt="mobile-images">
                                </div>
                                <div class="item" style="width:70%;margin-left:100px;margin-top:170px";>
                                    <img  src="{{ asset('assets/frontend/images/product/paper6.png')}}" width="70" height="100" alt="mobile-images">
                                </div>
                                <div class="item" style="width:70%;margin-left:100px;margin-top:170px">
                                    <img  src="{{ asset('assets/frontend/images/product/paper7.png')}}" width="70" height="100" alt="mobile-images">
                                </div>
                                <div class="item" style="width:70%;margin-left:100px;margin-top:170px">
                                    <img  src="{{ asset('assets/frontend/images/product/paper8.png')}}" width="70" height="100" alt="mobile-images">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="vc_custom2">
                    <div class="row">
                        <div class="col-sm-6" style="margin-top:70px">
                            <figure class="vc_figure">
                                <img src="{{ asset('assets/frontend/images/product/zomo_paper_natural.png')}}" width="654" height="637">
                            </figure>
                        </div>
                        <div class="col-sm-6" style="margin-top:70px">
                            <h1 style="font-size: 3.5rem;color: #bf0811;text-align: center;font-family:Titillium Web;font-weight:600;font-style:normal">NATURAL</h1>
                            <div class="wpb_content_element">
                                <p>Product without bleaching process, free of dyes and other additives. Zomo uses only reforested woods.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection