<?php
use App\Models\Flavor;
$model = new Flavor();
?>
@extends('frontend.layouts.master')
@section('title')
    {{ $content->meta_title }}
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
    .image{
    width: 70%;
    margin-left: 66%;
    margin-top:-40%;
    }
    .zomo_max-quality{
    margin-left:500px;
    }
    .inner_paragraph{
    text-align: center;
    font-family: "Klavika-Regular", Sans-serif;
    font-size: 22px;
    font-weight: 400;
    line-height: 28px;
    letter-spacing: 0.4px;
    }
    .duration_image{
    margin-left:450px;
    }
    input[type=checkbox] {
    display: none;
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
            </div>
        </div>
    </div>

    {!! $table !!}
@endsection
