@extends('frontend.layouts.master')
@section('title')
    Zomo Charcol
@endsection
@section('css')
    .row .main-content {
    padding: 20px 70px;
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
    background-color: #000000;
    }
    .row .main-content .main-section h1{
    font-size: 45px;
    margin-top:30px;
    background: -webkit-linear-gradient(5deg, #00fffe, #00fffe, #00ff9e, #03ea90);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    letter-spacing: 10px;
    text-align:center;
    }

    .row .main-content .main-section .video iframe{
    margin-top:40x;
    }
    .row .main-content .main-section .row .release_title{
    text-align:center;
    }
    .row .main-content .main-section .row .release_note
    {
    margin-top:200px;
    }
    .row .main-content .main-section .row .release_note .descricao-aluminio
    {
    margin-top:70px;
    }
    .row .main-content .main-section .row .release_note .descricao-aluminio p
    {
    background: -webkit-linear-gradient(0deg, #00fffe, #00fffe, #00ff9e, #03ea90);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 17px;
    font-weight: 400;
    }
    .row .main-content .main-section .row .release_note .descricao-aluminio p .medium
    {
    border: 2px #00fffe solid;
    padding: 5px;
    background: -webkit-linear-gradient(0deg, #00fffe, #00fffe, #00ff9e, #03ea90);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 15px;
    font-weight: 400;
    }
    .row .main-content .main-section .row .release_title p{

    font-size: 70px;
    color: #00fffe;
    font-weight: 900;
    letter-spacing: 17px;
    }
    .row .main-content .main-section .bg_image{
    background-image: url('../assets/frontend/images/product/fundo-fun.png');
    margin-top:40px;
    background-position: center !important;
    background-repeat: no-repeat !important;
    }
    .row .main-content .main-section .bg_image .other_model
    {
    display: inline-block;
    margin-left:30%;
    }
    .row .main-content .main-section .bg_image1 .other_model
    {
    display: inline-block;
    margin-left:30%;
    }
    .row .main-content .main-section .bg_image2 .other_model
    {
    display: inline-block;
    margin-left:30%;
    }
    .row .main-content .main-section .bg_image1{
    background-image: url('../assets/frontend/images/product/FUNDO-CROSS.png');
    background-position: center !important;
    background-repeat: no-repeat !important;
    }
    .row .main-content .main-section .bg_image2{
    background-image: url('../assets/frontend/images/product/FUNDO-TWIST.png');
    background-position: center !important;
    background-repeat: no-repeat !important;
    }
    .row .main-content .main-section .row .col iframe{
    width:100%;
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
                    <div class="row">
                        <iframe width="848" height="477" src="https://www.youtube.com/embed/YEracpIzNq4?feature=oembed"
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
                <h1>RELEASES</h1>
                <div class="row">
                    <div class="col-sm-6 release_note">
                        <div class="release_title">
                            <p>ZOOM</p>
                        </div>
                        <div class="descricao-aluminio">
                            <p class="descr" style="text-align: center;">*STEM ONLY <a
                                    href="https://www.zomoofficial.com/en/zoom/"><span class="medium"> SEE MORE</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="relase_image">
                            <img src="{{ asset('assets/frontend/images/product/novos-energy-zona-1.jpg') }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="relase_image">
                            <img src="{{ asset('assets/frontend/images/product/modelo-energy-lp-zona.jpg') }}">
                        </div>
                    </div>
                    <div class="col-sm-6 release_note">
                        <div class="release_title">
                            <p>ENERGY</p>
                        </div>
                        <div class="descricao-aluminio">
                            <p class="descr" style="text-align: center;">*STEM ONLY <a
                                    href="https://www.zomoofficial.com/en/energy/"><span class="medium"> SEE MORE</span></a>
                            </p>
                        </div>
                    </div>
                    <h1>OTHER MODELS</h1>
                </div>
                <div class="row bg_image">
                    <div class="col-sm-6">
                        <div class="other_model">
                            <img src="{{ asset('assets/frontend/images/product/novo-arquile-fun2.png') }}">
                        </div>
                    </div>
                    <div class="col-sm-6 release_note">
                        <div class="release_title">
                            <p>FUN</p>
                        </div>
                        <div class="descricao-aluminio">
                            <p class="descr" style="text-align: center;">*AVAILABLES SIZES<span class="medium">
                                    MEDIUM</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg_image1">
                    <div class="col-sm-6 release_note">
                        <div class="release_title">
                            <p>CROSS</p>
                        </div>
                        <div class="descricao-aluminio">
                            <p class="descr" style="text-align: center;">AVAILABLES SIZES<span class="medium">
                                    SMALL</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="other_model">
                            <img src="{{ asset('assets/frontend/images/product/NOVO-ARQUILE-ZONA-ZOMO-CROSS.png') }}">
                        </div>
                    </div>
                </div>
                <div class="row bg_image2">
                    <div class="col-sm-6">
                        <div class="other_model">
                            <img src="{{ asset('assets/frontend/images/product/novo-arquile-fun2.png') }}">
                        </div>
                    </div>
                    <div class="col-sm-6 release_note">
                        <div class="release_title">
                            <p>TWIST</p>
                        </div>
                        <div class="descricao-aluminio">
                            <p class="descr" style="text-align: center;">*AVAILABLES SIZES <span class="medium">
                                    SMALL</span><span class="medium">
                                    MEDIUM</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="video">
                    <div class="row">
                        <iframe width="848" height="477" src="https://www.youtube.com/embed/pQkNtMIuKFk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <iframe width="848" height="477" src="https://www.youtube.com/embed/AhnOdVIOfaQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col">
                        <iframe width="848" height="477" src="https://www.youtube.com/embed/o9CSRQLGloU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col">
                        <iframe width="848" height="477" src="https://www.youtube.com/embed/o9CSRQLGloU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
