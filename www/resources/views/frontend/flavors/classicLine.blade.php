<?php
use App\Models\Flavor;
$model = new Flavor();
?>
@extends('frontend.layouts.master')
@section('title')
    Classic Line
@endsection

@section('css')
    .linha-das-categorias-classic-line {
    height: 300px;
    background-size: auto;
    background-repeat: no-repeat;
    display: inline-flex;
    margin: 0;
    padding: 30px 0;
    }
    .linha-das-categorias-classic-line > img
    {
    margin-top:-30px;
    }
    .titulo-descr-categorias-classic-line{
    margin-top: -50px;
    }
    .descricao-pagina-categorias-classic-line {
    color: #00afef;
    font-size: 17px;
    font-weight: 600;
    margin-right: 1em;
    text-align: justify;
    }
    .image-part{
    background-color:white;
    padding:30px 30px;
    }
    .strong-line{
    color: #fff;
    font-size: 17px;
    font-weight: 600;
    margin-right: 1em;
    text-align: justify;
    }
@endsection
@section('main')
    <div class="btcm">
        <div class="container">
            <div class="breadcrumbs d-flex align-items-center">
                <a href="/">Home</a>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page">Flavors</span>
                <span> » </span>
                <a href="#" class="breadcrumb_last" aria-current="page">{{ $category_id }}</span>
            </div>
        </div>
    </div>
    <div class="row linha-das-categorias-classic-line">
            @if($category_id === "Classic-line")
                <img src="{{ asset('assets/frontend/images/flavors/zomo_classic_baner.png') }}">
            @elseif($category_id === "Strong-line")
                <img src="{{ asset('assets/frontend/images/flavors/zomo_strong_banner.png') }}">
            @elseif($category_id === "Max-line")
                <img src="{{ asset('assets/frontend/images/flavors/zomo_maxLine_banner.png') }}" style="height:200px">
            @endif
        <div class="row" style="margin-top:-250px;text-align:center;">
            <div class="col-sm-6 titulo-descr-categorias-classic-line">
                @if($category_id === "Classic-line")
                    <a href="" class="produto-categoria-link">
                        <h3>Classic</h3>
                    </a>
                @elseif($category_id === "Strong-line")
                     <a href="" style="color:white">
                        <h3>Strong</h3>
                    </a>
                @endif
            </div>
            <div class="col-sm-4" style="letter-spacing: 2px;">
            @if($category_id === "Classic-line")
                <p class="descricao-pagina-categorias-classic-line">
                    The Classic Line brings the flavors already known to your session. A more top flavor than the
                    others,
                    check out all the flavors below!</p>
            @elseif($category_id === "Strong-line")
                    <p class="strong-line">Welcome the strength of flavors that will boost your hookah session. The Strong Line offers sugar cane molasses with an exquisite cool taste, for those who enjoy strong hookah flavors.</p>
            @endif
                </div>
        </div>
    </div>
    <div class="new-container">
        <!-- product listing  -->
        <div class="product-list">
            <div class="product-item">
                @foreach ($data as $val)
                    <div class="product-box">
                        <a href="{{ route('frontend.flavors.product.detail',$val->slug)}}" class="images">
                            <img src="{{ $model->getFlavorImageAttribute($val) }}">
                        </a>
                        <a class="product-title">{{ $val->slug }}</a>                
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
