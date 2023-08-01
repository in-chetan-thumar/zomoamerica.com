@extends('frontend.layouts.master')
@section('title')
        Zomo Charcol
@endsection
@section("css")
.row{
        padding:50px 100px;
    }
.row .heading{
    font-size: 26px;
    color: #ffffff;
    font-family: Lato;
    font-weight: 700;
    font-style: normal;
    background-color:#812991 !important;
}
.row .shisha_desc_image .img{
    width: 40%;
    margin-left:30%;
    margin-top:-50px;
}
.row .shisha_desc_image .row  .img1{
    width:70%;
    margin-left:50px;
}
.row .shisha_desc_image .row .cores-disponiveis
{
    display:flex;
    margin-top:30px;
}
.row .shisha_desc_image .row .cores-disponiveis #quadrado-branco
{
    border: 1px solid #000;
    width: 28px;
    height: 28px;
    margin-left: 12px;
}
.row .shisha_desc_image .row .cores-disponiveis #quadrado-preto
{
    border: 1px solid #000;
    background-color: #000;
    width: 28px;
    height: 28px;
    margin-left: 10px;
}
.row .shisha_desc_image .row .cores-disponiveis #quadrado-roxo
{
    border: 1px solid #000;
    background-color: #812991;
    width: 28px;
    height: 28px;
    margin-left: 10px;
}
.row .shisha_desc_image .row .cores-disponiveis #quadrado-dourado
{
    background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%), radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
    border: 1px solid #000;
    width: 28px;
    height: 28px;
    margin-left: 10px;
}
.row .shisha_desc_image .row .cores-disponiveis #quadrado-transparente
{
   border: 1px solid #000;
    background-color: #e8e8e8;
    width: 28px;
    height: 28px;
    margin-left: 10px;
}


.row .shisha_desc_image .row  p{
    text-align: center;
    font-weight: 400;
    color: #743d96;
    font-size: 22px;
    line-height:30px;
}
.shisha_desc_image{
    background-color:white;
}
.row .shisha_desc_image .shisha_desc p
{
    text-align: center;
    font-weight: 400;
    color: #743d96;
    font-size: 22px;
    line-height:40px;
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
                <div class="heading">
                    <h2>SHISHA HOSE</h2>
                </div>
                <div class="inner_image1">
                    <img src="{{ asset('assets/frontend/images/product/banner-principal-noticia-nova-mangueira-zomo-official.png')}}" width="1333" height="750" sizes="(max-width: 1333px) 100vw, 1333px">
                </div>
                <div class="shisha_desc_image">
                    <figure>
                    <img class="img" src="{{ asset('assets/frontend/images/product/myShishaHose.png')}}">
                    </figure>
                    <div class="row">
                        <div class="shisha_desc">
                            <p class="">Stay tuned and have a perfect session with <strong style="color:#743d96">Zomo Shisha Hose</strong>. Ultra strength, high density thermoplastic polymer in its extremities, to fit the hookah perfectly.</p>
                        </div>
                        <div ><span><span ></span></span><span ><span></span></span>
                            <hr>
                        </div>
                        <div class="col-sm-6 p-5">
                            <figure>
                                <img class="img1" src="{{ asset('assets/frontend/images/product/clean_hose-zomo-ingles.png')}}">
                            </figure>
                            <p>With its 100% non-toxic raw material, your session will not taste like plastic, not even the first time you use it. <strong style="color:#743d96">Easy and quick cleaning</strong>, so you can enjoy what you really like.</p>
                            
                        </div>
                        <div class="col-sm-6 p-5">
                             <figure>
                                <img class="img1" src="{{ asset('assets/frontend/images/product/meabillity_ingles_flexivel.png')}}">
                            </figure>
                            <p class="desc-limpeza-facil"><strong style="color:#743d96">Hose flexibility</strong> in order not to feel afraid when sharing it with your friends. Remember, that’s not a mic, fella. Crazy, ain’t it? Go and get your top quality Zomo hose asap!</p>
                        </div>
                        <div class="col-sm-6 p-5">
                            <figure>
                                <img class="img2" src="{{ asset('assets/frontend/images/product/cores-das-mangueiras.png')}}">
                            </figure>
                            
                        </div>
                        <div class="col-sm-6 p-5">
                             <figure>
                                <img class="img1" src="{{ asset('assets/frontend/images/product/choose.png')}}">
                            </figure>
                                <p>For an amazing setup, nothing better than having several options of colors. We offer you many <strong style="color:#743d96">different colors</strong> to make your hookah awesome.</p>
                            <div class="cores-disponiveis">
                                <span>Available Colors</span>
                                <p id="quadrado-branco"><small></small></p>
                                <p id="quadrado-preto"><small></small></p>
                                <p id="quadrado-roxo"><small></small></p>
                                <p id="quadrado-dourado"><small></small></p>
                                <p id="quadrado-transparente"><small></small></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
@endsection