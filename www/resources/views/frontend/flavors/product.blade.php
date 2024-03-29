<?php
use App\Models\Flavor;
use App\Models\FlavorImage;
$model = new Flavor();
$FlavorImage = FlavorImage::getDataWithArray($data->id); //this is used for passing data in model
?>
@extends('frontend.layouts.master')
@section('title')
    Product Page
@endsection

@section('css')
    <style>
        .product-right .product-box .one-bg-single h1 {
            font-size: 35px;
            text-align: left;
            font-family: Lato;
            font-weight: 700;
            font-style: normal;
        }

        input[type=checkbox] {
            display: none;
        }

        .container .product-slider .product-slider-wrapper .product-left .product-slider-sub-main .product-slider-sub .swiper-wrapper .swiper-slide .image-box1 .img {
            transition: transform 0.25s ease;
            cursor: zoom-in;
        }

        input[type=checkbox]:checked>.img {
            transform: scale(2);
            cursor: zoom-out;
        }
    </style>
@endsection
@section('main')
    <div class="btcm">
        <div class="container">
            <div class="breadcrumbs d-flex align-items-center">
                <a href="/">Home</a>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page">Flavors</span>
                <span> » </span>
                <a href="#" class="breadcrumb_last" aria-current="page">{{ $getCategory_Data->name }}</span></a>
                    <span> » </span>
                    <span class="breadcrumb_last" aria-current="page">{{ $data->flavor_title }}</span>
            </div>
        </div>
    </div>

    <div class="main-single-product container">
        <div class="product-slider-main">
            <div class="container">
                <div class="product-slider">
                    <div class="product-slider-wrapper">
                        <div class="product-left">
                            <div class="product-slider-sub-main">
                                <div class="swiper product-slider-sub">
                                    <div class="swiper-wrapper">
                                        @foreach ($FlavorImage as $flavor)
                                            <div class="swiper-slide">
                                                <div class="image-box image-box1">
                                                    {{-- <input type="checkbox" id="zoomCheck"> --}}
                                                    <div id="myresult" class="img-zoom-result"></div>
                                                    <img src="{{ $model->getFlavorImageArray($flavor) }}" alt="product-01"
                                                        class="img" />
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="swiper thumb-slider">
                                    <div class="swiper-wrapper">
                                        @foreach ($FlavorImage as $flavor)
                                            <div class="swiper-slide">
                                                <div class="image-box">
                                                    <img src="{{ $model->getFlavorImageArray($flavor) }}"
                                                        alt="product-01" />
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-right product-box">
                            <div class="one-bg-single">
                                <div class="vc_custom_heading">ZOMO SHISHA TOBACCO</div>
                                <h1 class="text-dark"
                                    style="font-size: 35px;text-align: left;font-family: Lato;font-weight: 600;font-style: normal;">
                                    {{ $data->flavor_title }}</h1>
                            </div>
                            <div class="two-bg-single">
                                <div class="vc_custom_heading-two">
                                    <span style="color: #ffffff">DESCRIPTION</span>
                                </div>
                            </div>
                            <!-- <h2>ZOMO MAX BLUEBERRY</h2> -->
                            <p>
                                {{ $data->flavor_description }}
                            </p>

                            <div class="progress-main">
                                <div class="single-three-bg">
                                    <div class="vc_custom_heading-three">
                                        <span>ZOMO SCALE</span>
                                    </div>
                                </div>
                                {{-- sweet --}}
                                <div class="item">
                                    <p>Sweet</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width:{{ $data->sweet }}%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                {{-- citric --}}
                                <div class="item">
                                    <p>Citric</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $data->citric }}%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                {{-- menthol --}}
{{--                                <div class="item">--}}
{{--                                    <p>Menthol</p>--}}
{{--                                    <div class="progress">--}}
{{--                                        <div class="progress-bar" role="progressbar" style="width:{{ $data->menthol }}%"--}}
{{--                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                {{-- TOBACCO INTENSITY --}}
                                <div class="item">
                                    <p>TOBACCO <br><br>INTENSITY</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:{{ $data->tobaco_intensity }}%" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                {{-- menthol --}}
                                <div class="item">
                                    <p>MENTHOL</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width:{{ $data->menthol }}%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                {{-- cloud volume --}}
                                <div class="item">
                                    <p>CLOUD <br><br> VOLUME</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:{{ $data->cloud_volume }}%" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="available">
                                    <p>Available in:</p>
                                    <div class="item">
                                        <span class="text-primary">{{ $data->flavors_available }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script></script>
@endsection
