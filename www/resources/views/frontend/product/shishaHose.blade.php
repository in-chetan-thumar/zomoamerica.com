@extends('frontend.layouts.master')
@section('title')
    Zomo Charcol
@endsection
@section('css')
    .row .main-content {
    padding:40px 150px 0px 150px ;
    }

    .row .main-content .heading {
    font-size: 26px;
    color: #ffffff;
    font-family: Lato;
    font-weight: 700;
    font-style: normal;
    background-color: #812991 !important;
    margin-bottom: -8px;
    padding: 5px 0px 5px 20px;

    }



    .row .main-content .shisha_desc_image .row .img1 {
    width: 70%;
    margin-left: 50px;
    }

    .row .main-content .shisha_desc_image .row .image5 {
    width: 70%;
    margin-left: 15%;
    }

    .row .main-content .shisha_desc_image .row .cores-disponiveis {
    display: flex;
    margin-top: 30px;
    }

    .row .main-content .shisha_desc_image .row .cores-disponiveis #quadrado-branco {
    border: 1px solid #000;
    width: 28px;
    height: 28px;
    margin-left: 12px;
    }

    .row .main-content .shisha_desc_image .row .cores-disponiveis #quadrado-preto {
    border: 1px solid #000;
    background-color: #000;
    width: 28px;
    height: 28px;
    margin-left: 10px;
    }

    .row .main-content .shisha_desc_image .row .cores-disponiveis #quadrado-roxo {
    border: 1px solid #000;
    background-color: #812991;
    width: 28px;
    height: 28px;
    margin-left: 10px;
    }

    .row .main-content .shisha_desc_image .row .cores-disponiveis #quadrado-dourado {
    background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%,
    transparent 80%), radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f
    62.5%, #5d4a1f 100%);
    border: 1px solid #000;
    width: 28px;
    height: 28px;
    margin-left: 10px;
    }

    .row .main-content .shisha_desc_image .row .cores-disponiveis #quadrado-transparente {
    border: 1px solid #000;
    background-color: #e8e8e8;
    width: 28px;
    height: 28px;
    margin-left: 10px;
    }


    .row .main-content .shisha_desc_image .row p {
    text-align: center;
    font-weight: 400;
    color: #743d96;
    font-size: 22px;
    line-height: 30px;
    }

    .shisha_desc_image {
    background-color: white;
    }

    .row .main-content .shisha_desc_image .shisha_desc p {
    text-align: center;
    font-weight: 400;
    color: #743d96;
    font-size: 22px;
    line-height: 40px;
    }

    .row .main-content .shisha_desc_image .video_gallary {
    background-image:
    url('../assets/frontend/images/product/textura-rodape-videos-lo-mangueira-zomo.jpg');
    }
    .row .main-content .shisha_desc_image .video_gallary .image6 {
    width:25%;
    margin-left:35%;
    margin-top:-40px;
    margin-bottom:5%;
    }

    .row .main-content .shisha_desc_image .video_gallary .row .video h2
    {
    margin-top: 50px;
    margin-bottom: 40px;
    font-size: 18px;
    color: #ffffff;
    text-align: center;
    font-family: Lato;
    font-weight: 700;
    font-style: normal

    }

@endsection
<!--  -->
@section('main')
    <div class="btcm">
        <div class="container">
            <div class="breadcrumbs d-flex align-items-center">
                <a href="{{ route('frontend.home') }}">Home</a>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page"> Shisha Hose</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="main-content">
            <div class="heading">
                <h2>SHISHA HOSE</h2>
            </div>
            <div class="inner_image1">
                <img src="{{ asset('assets/frontend/images/product/banner-principal-noticia-nova-mangueira-zomo-official.png') }}"
                    width="1333" height="750" sizes="(max-width: 1333px) 100vw, 1333px">
            </div>
            <div class="shisha_desc_image">
                <figure>
                    <img class="img" src="{{ asset('assets/frontend/images/product/myShishaHose.png') }}">
                </figure>
                <div class="row">
                    <div class="shisha_desc" >
                        <p class="shisha_description">Stay tuned and have a perfect session with <strong style="color:#743d96">Zomo
                                Shisha
                                Hose</strong>. Ultra strength, high density thermoplastic polymer in its extremities, to fit
                            the
                            hookah perfectly.</p>
                        <div class="shisha_border_top" style="margin-top: 20px">
                        </div>
                    </div>

                    <div class="col-sm-6 p-5">


                        <figure>
                            <img class="img1"
                                src="{{ asset('assets/frontend/images/product/clean_hose-zomo-ingles.png') }}">
                        </figure>
                        <p>With its 100% non-toxic raw material, your session will not taste like plastic, not even the
                            first
                            time you use it. <strong style="color:#743d96">Easy and quick cleaning</strong>, so you can
                            enjoy
                            what you really like.</p>

                    </div>
                    <div class="col-sm-6 p-5">
                        <figure>
                            <img class="img1"
                                src="{{ asset('assets/frontend/images/product/meabillity_ingles_flexivel.png') }}">
                        </figure>
                        <p class="desc-limpeza-facil"><strong style="color:#743d96">Hose flexibility</strong> in order not
                            to
                            feel afraid when sharing it with your friends. Remember, that’s not a mic, fella. Crazy, ain’t
                            it?
                            Go and get your top quality Zomo hose asap!</p>
                    </div>
                    <div class="col-sm-6 p-5">
                        <figure>
                            <img class="img2"
                                src="{{ asset('assets/frontend/images/product/cores-das-mangueiras.png') }}">
                        </figure>

                    </div>
                    <div class="col-sm-6 p-5">
                        <figure>
                            <img class="img1" src="{{ asset('assets/frontend/images/product/choose.png') }}">
                        </figure>
                        <p>For an amazing setup, nothing better than having several options of colors. We offer you many
                            <strong style="color:#743d96">different colors</strong> to make your hookah awesome.
                        </p>
                        <div class="cores-disponiveis">
                            <span>Available Colors</span>
                            <p id="quadrado-branco"><small></small></p>
                            <p id="quadrado-preto"><small></small></p>
                            <p id="quadrado-roxo"><small></small></p>
                            <p id="quadrado-dourado"><small></small></p>
                            <p id="quadrado-transparente"><small></small></p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-5">
                        <figure>
                            <img class="img1"
                                src="{{ asset('assets/frontend/images/product/non-toxic-hose-zomo-english.png') }}">
                        </figure>
                        <p>Our hoses are <strong style="color:#743d96">free of toxic components,</strong> ensuring safety
                            and a
                            smooth hookah session. You can carve with no fear.</p>
                    </div>
                    <div class="col-sm-6 p-5">
                        <figure>
                            <img class=""
                                src="{{ asset('assets/frontend/images/product/mangueira-zomo-novo-modelo.png') }}">
                        </figure>
                    </div>
                    <div class="col-sm-6 p-5">
                        <figure>
                            <img class=""
                                src="{{ asset('assets/frontend/images/product/mangueira-roxa-hose-zomo.png') }}">
                        </figure>
                    </div>
                    <div class="col-sm-6 p-5">
                        <figure>
                            <img class="img1"
                                src="{{ asset('assets/frontend/images/product/high-resistance-english-hose-zomo.png') }}">
                        </figure>
                        <p>The material we use is a <strong style="color:#743d96">thermoplastic polymer,</strong> which
                            guarantees greater strength and product quality.</p>
                    </div>


                    <div class="col-sm-12 pt-5 ">
                        <div class="shisha_border_top">
                        </div>
                        <img class="image5" width="1000" height="466" sizes="(max-width: 1000px) 100vw, 1000px"
                            src="{{ asset('assets/frontend/images/product/new-BANNER_MANGUEIRA_ZOMO-en.jpg') }}">
                        {{-- new-BANNER_MANGUEIRA_ZOMO-en --}}
                    </div>
                </div>
                <div class="video_gallary">
                    <img class="image6" width="1000" height="466"
                        src="{{ asset('assets/frontend/images/product/videoss-galery-hose-zomo.png') }}">
                    <div class="row">
                        <div class="col-sm-6 video">
                            <div class="video_wrapper">
                                <iframe src="https://www.youtube.com/embed/0HcrvKvDAS4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <h2>THE LARGEST HOSE IN THE WORLD *100
                                METERS*</h2>
                        </div>
                        <div class="col-sm-6 video">
                            <div class="video_wrapper">
                                <iframe  src="https://www.youtube.com/embed/MxgPYbVPvUw"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <h2>HOW TO SET UP A NARGUILE IN 10 STEPS *BEST TUTORIAL*</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
