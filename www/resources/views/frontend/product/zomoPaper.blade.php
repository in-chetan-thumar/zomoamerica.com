@extends('frontend.layouts.master')
@section('title')
    Zomo Papers
@endsection
@section('css')
    .main-content{
    padding-top:40px;

    }
    .heading{
    background-color:red;
    font-size: 26px;
    color: #ffffff;
    text-align: left;
    font-family:Lato;
    font-weight:700;
    font-style:normal;
    margin-bottom: -8px;
    padding: 5px 0px 5px 20px;
    }

    .vc_custom1{
    background-color:black;
    }

    .vc_custom3{
    background-color:#003b0d;
    }

    .owl-dots{
    margin-right:180px;
    }
    .wpb_content_element p{
    line-height:30px;
    text-align: center;
    font-family: 'Titillium Web';
    font-weight: 600;
    font-size: 25px;
    }



    .vc_text p{
    color: #7dc623;
    {{-- font-size: 18px; --}}
    font-family: 'Titillium Web', sans-serif;
    font-weight: 600;
    text-align:center;
    line-height:30px;
    }
    .vc_text1 p{
    color: #7dc623;
    font-size: 18px;
    font-family: 'Titillium Web', sans-serif;
    font-weight: 600;
    text-align:center;
    line-height:30px;
    }

    .vc_single_image .vc_single_image1{
    padding:40px 20px;
    }
    .vc_single_image2
    {
    width:50%;
    margin-bottom:100px;
    }
    .vc_single_image2 img{
    margin-left:100px;
    }
    .vc_footer{
    background-color:white;
    }
    .row h4{
    margin-top:50px;
    }
    .row p{

    margin-top:30px;
    margin-bottom:40px;
    }
@endsection
@section('main')
        <div class="btcm">
            <div class="container">
                <div class="breadcrumbs d-flex align-items-center">
                    <a href="{{ route('frontend.home') }}">Home</a>
                    <span> » </span>
                    <span class="breadcrumb_last" aria-current="page"> Rolling Paper</span>
                </div>
            </div>
        </div>
        <div class="container main-content">

            <div class="row">

                <div class="heading">
                    <h1 style="" class="heading-h1">ZOMO PAPER</h1>
                </div>
                <div class="vc_custom1">
                    <div class="row">
                        <div class="col-sm-6" style="margin-top:70px">
                            <figure class="vc_figure">
                                <img src="{{ asset('assets/frontend/images/product/zomo_paper_black.png') }}" width="654"
                                    height="637">
                            </figure>
                        </div>
                        <div class="col-sm-6" style="margin-top:70px">
                            <h1 style="font-size: 3.5rem;color: #ffffff;text-align: center;font-family:Titillium Web;font-weight:600;font-style:normal"
                                class="">CLASSIC</h1>

                            <div class="wpb_content_element">
                                <p><span style="color: #ffffff;">Use of ultrathin paper with vegetable rubber to ensure a
                                        standard burn of the product. We have a variety of sizes to meet your needs.</span>
                                </p>
                            </div>

                            <div class="owl-carousel owl-theme home-banner">

                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/paper1.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Perfect Pink</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/paper2.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Perfect Black Pack</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/paper4.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Slim Prata</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/paper3.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Perfect Black</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/paper9.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Slim</p>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/paper10.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Perfect</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/paper7.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Monster</p>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/paper8.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Mini</p>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

                <div class="vc_custom2">
                    <div class="row">
                        <div class="col-sm-6" style="margin-top:20%">
                            <figure class="vc_figure">
                                <img src="{{ asset('assets/frontend/images/product/zomo_paper_natural.png') }}"
                                    width="654" height="637">
                            </figure>
                        </div>
                        <div class="col-sm-6 zomopaper-natural">
                            <h1
                                style="font-size: 3.5rem;color: #bf0811;text-align: center;font-family:Titillium Web;font-weight:600;font-style:normal">
                                NATURAL</h1>
                            <div class="wpb_content_element">
                                <p class="vc_2_p">Product without bleaching process, free of dyes and other additives. Zomo
                                    uses only
                                    reforested woods.</p>
                            </div>

                            <div class="owl-carousel owl-theme home-banner">

                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/natural1.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Natural Monster</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/natural2.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Natural Perfect Black</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/natural4.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Natural Micro</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/natural6.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Natural Mini</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/product/natural5.png') }}" class="image_wpb"
                                        alt="mobile-images">
                                    <p>Zomo Paper Natural Perfect</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_custom3">
                    <div class="row">
                        <div class="col-sm-6" style="margin-top:70px">
                            <figure class="vc_figure">
                                <img src="{{ asset('assets/frontend/images/product/zomo-paper-hemp.png') }}" width="654"
                                    height="637">
                            </figure>
                        </div>
                        <div class="col-sm-6" style="margin-top:70px">
                            <div class="vc-siingle-image">
                                <img src="{{ asset('assets/frontend/images/product/zomopaper-product-hemp.png') }}">
                            </div>
                            <div class="vc_text1">
                                <p>100% ORGANIC HEMP FIBER PAPER, PSYCHOACTIVE FREE,UNBLEACHED.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="vc_custom4">
                    <div class="row">
                        <div class="col-sm-6 product-bg-image" style="margin-top:200px">
                            <figure class="vc_figure">
                                <img src="{{ asset('assets/frontend/images/product/mock-embalagem-pack-alfafa-min.png') }}"
                                    width="654" height="637">
                            </figure>
                        </div>
                        <div class="col-sm-6" style="margin-top:160px">
                            <div class="vc_single_image">
                                <img src="{{ asset('assets/frontend/images/product/alfafa.png') }}">
                            </div>
                            <div class="vc_single_image1">
                                <img src="{{ asset('assets/frontend/images/product/organic-french-en.png') }}">
                            </div>
                            <div class="vc_text">
                                <p class="vc_4_p">ALFAFA PAPER PRODUCED IN FRANCE GROWING ECOLOGICAL CERTIFIED ORGANIC AND
                                    100% NATURAL (NO
                                    ADDITIVES AND CHLORINE) SLOW BURNING NATURAL GUM ARABICA.</p>
                            </div>

                            <div class="vc_single_image2">
                                <img src="{{ asset('assets/frontend/images/product/see-more.png') }}" width="300"
                                    height="94">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_footer product-bottom-footer">
                    <div class="row">
                        <h4 class="main-title"style="text-align: center"><strong>
                                FOR MORE DETAILS GO TO:
                            </strong></h4>

                        <p style="text-align:center">
                            <a href="http://www.zomopaper.com/">
                                <span style="color: #dd3288;">
                                    <strong style="font-size:30px">
                                        WWW.
                                        <span style="font-size:70px">ZOMOPAPER</span>
                                        .COM
                                    </strong>
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
