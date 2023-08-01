@extends('frontend.layouts.master')
@section('title')
        Zomo Charcol
@endsection
@section("css")
.row{
        padding:40px 60px;   
    }
 .row .heading{
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
 .vc_text{
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    background-image: url(https://cdn.zomoofficial.com/wp-content/uploads/2020/07/fundo_pesos_lpcarvao.png?id=17065) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: contain !important
    padding:20px 10px
 }

 .vc_text p{
    text-align: center;
    font-size: 18px;
    color: #009045
 }
 <!--  -->
 .row .charcol_heading
 {
    background-image: url({{ resource_path('images\fundo_conteudo.png')}});
    text-align:center;
 }
 .row .charcol_heading h2{
    font-size: 24px;
    <!-- color: #ffffff; -->
    text-align: left;
    font-family: Lato;
    font-weight: 700;
    font-style: normal;
 }
 .charcol_desc {
    padding:0px 10px;
 }
 .charcol_desc p{
    font-size:15px;
    text-align:center;
 }
@endsection
@section('main')
       
<div class="btcm">
            <div class="container">
                <div class="breadcrumbs d-flex align-items-center">
                    <a href="{{ route('frontend.home') }}">Home</a>
                    <span> » </span>
                    <span class="breadcrumb_last" aria-current="page">Zomo Charcol</span>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="heading">
            <h2>ECO CHARCOAL</h2>
        </div>
        <div class="vc_custom">
            <img src="{{ asset('assets/frontend/images/product/banner_pricipal_lp_carvão.png')}}" width="1100" height="900" sizes="(max-width: 1100px) 100vw, 1100px">
            <div class="vc_text">
                <!-- <img src="{{ asset('assets/frontend/images/product/fundo_pesos_lpcarvao.png')}}" width="1100" height="900" sizes="(max-width: 1100px) 100vw, 1100px"> -->
                <p>
                    <strong>500g, 1KG, 2KG or 12KG </strong>
                    <span style="text-align: center; font-size: 20px; color: #fff;"><strong>boxes</strong> </span>
                </p>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <h2 style="margin-top:100px;font-size: 40px;color: #000000;text-align: center;font-family:Lato;font-weight:900;font-style:normal">AVAILABLE FORMATS:</h2>
                </div>
                <div class="col-sm-7">
                    <!--  -->
                    <figure>
                        <img src="{{ asset('assets/frontend/images/product/tipos_carvao_usa.png')}}">
                    </figure>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6" style="text-align:center;">
                    <img src="{{ asset('assets/frontend/images/product/carvao_ultra.jpg')}}" width="404" height="160" sizes="(max-width: 404px) 100vw, 404px" style="height:auto;width:70%">   
                <!-- carvao_ultra -->
                </div>
                <div class="col-sm-6" style="   text-align:center;">
                    <img src="{{ asset('assets/frontend/images/product/tempo_carvao.jpg')}}" width="404" height="160" sizes="(max-width: 404px) 100vw, 404px" style="height:auto;width:70%">   
                </div>
            </div>
            <div class="row">
                <!-- fundo_conteudo -->
                <div class="col-sm-6 ">
                    <h2 class="charcol_heading">HEXAGONAL FORMAT</h2>
                    <div class="charcol_desc">
                        <p>The perfect format for your sessions. The hexagonal format guarantees easier handling during the sessions, preventing accidents with the charcoal. Perfect for enjoying great moments with friends.</p>
                    </div>
                </div>
              <div class="col-sm-6">
                    <h2 class="charcol_heading">ECO FRIENDLY</h2>
                     <div class="charcol_desc">
                        <p>We care for the planet we live. That’s why our coals are produced observing environment-friendly rules. We use coconut shell for manufacturing and materials that are 100% natural. Every element that we don’t use is disposed of correctly.</p>
                    </div>
                </div>
            </div>
             <div class="row">
                <!-- fundo_conteudo -->
                <div class="col-sm-6">
                    <h2 class="charcol_heading">NO SMELL / TASTE</h2>
                     <div class="charcol_desc">
                        <p>In addition to the high quality charcoal, #MyEcoCharcoal burns slowly and for a long time, guaranteeing more than 90 minutes sessions. Just prepare the shisha pipe, control the charcoal and relax.</p>
                    </div>
                </div>
              <div class="col-sm-6">
                    <h2 class="charcol_heading">ULTRA RESISTANT</h2>
                     <div class="charcol_desc">
                        <p>In addition to a sensational heat, the #MyEcoCharcoal has an ultra resistance, guaranteeing a session of more than 90 minutes. Just prepare the bowl, control the coal and relax.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection