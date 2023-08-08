@extends('frontend.layouts.master')
@section('title')
    {{ $content->meta_title }}
@endsection

@section('css')
    {{-- .main-content{
    padding-top:40px;
    } --}}
    .heading{
    font-size: 22px;
    color: #ffffff;
    text-align: left;
    font-family: Lato;
    font-weight: 700;
    font-style: normal;
    background-color: #7a7a7a;
    padding:5px 6px;
    }

    .vc_custom{
    background-color: white;
    }

    .vc_text_image p{
    text-align: center;
    font-size: 18px;
    color: #009045
    }
    .charcol_desc p{
    font-size:15px;
    }
@endsection
@section('main')
    <div class="btcm ">
        <div class="container">
            <div class="breadcrumbs d-flex align-items-center">
                <a href="{{ route('frontend.home') }}">Home</a>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page">Zomo Charcol</span>
            </div>
        </div>
    </div>
    <div class="container main-content">


        <div class="row ">
            <div class="heading ">
                <h2>ECO CHARCOAL</h2>
            </div>
            <div class="vc_custom">

                <img src="{{ asset('assets/frontend/images/product/banner_pricipal_lp_carvão.png') }}" width="1100"
                    height="900" sizes="(max-width: 1100px) 100vw, 1100px">
                <div class="vc_text_image">
                    <!-- <img src="{{ asset('assets/frontend/images/product/fundo_pesos_lpcarvao.png') }}" width="1100" height="900" sizes="(max-width: 1100px) 100vw, 1100px"> -->
                    <p>
                        <strong>500g, 1KG, 2KG or 12KG </strong>
                        <span style="text-align: center; font-size: 20px; color: #fff;"><strong>boxes</strong> </span>
                    </p>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <h2
                            style="margin-top:100px;font-size: 40px;color: #000000;text-align: center;font-family:Lato;font-weight:900;font-style:normal">
                            AVAILABLE FORMATS:</h2>
                    </div>
                    <div class="col-sm-7">
                        <!--  -->
                        <figure>
                            <img src="{{ asset('assets/frontend/images/product/tipos_carvao_usa.png') }}">
                        </figure>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6" style="text-align:center;">

                        <img src="{{ asset('assets/frontend/images/product/carvao_ultra.jpg') }}"
                            class="image-available-form">
                        <!-- carvao_ultra -->
                    </div>
                    <div class="col-sm-6" style="   text-align:center;">
                        <img src="{{ asset('assets/frontend/images/product/tempo_carvao.jpg') }}"
                            class="image-available-form">

                    </div>
                </div>
                <div class="row charcol">
                    <!-- fundo_conteudo -->
                    <div class="col-sm-6  charcol-item ">
                        <h2 class="charcol_heading">HEXAGONAL FORMAT</h2>
                        <div class="charcol_desc">
                            <p>The perfect format for your sessions. The hexagonal format guarantees easier handling during
                                the
                                sessions, preventing accidents with the charcoal. Perfect for enjoying great moments with
                                friends.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 charcol-item">
                        <h2 class="charcol_heading">ECO FRIENDLY</h2>
                        <div class="charcol_desc">
                            <p>We care for the planet we live. Thats why our coals are produced observing
                                environment-friendly
                                rules. We use coconut shell for manufacturing and materials that are 100% natural. Every
                                element
                                that we dont use is disposed of correctly.</p>
                        </div>
                    </div>

                    <div class="col-sm-6   charcol-item">
                        <h2 class="charcol_heading">NO SMELL / TASTE</h2>
                        <div class="charcol_desc">
                            <p>In addition to the high quality charcoal, #MyEcoCharcoal burns slowly and for a long time,
                                guaranteeing more than 90 minutes sessions. Just prepare the shisha pipe, control the
                                charcoal
                                and relax.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 charcol-item " style="padding-bottom: 50px">

                        <h2 class="charcol_heading">ULTRA RESISTANT</h2>
                        <div class="charcol_desc">
                            <p>In addition to a sensational heat, the #MyEcoCharcoal has an ultra resistance, guaranteeing a
                                session of more than 90 minutes. Just prepare the bowl, control the coal and relax.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
