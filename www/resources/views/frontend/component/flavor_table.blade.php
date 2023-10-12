<?php
use App\Models\Flavor;
$model = new Flavor();
?>
<div class="row linha-das-categorias-classic-line">
    @if ($category_id === 'Classic-line')
        <img src="{{ asset('assets/frontend/images/flavors/zomo_classic_baner.png') }}">
    @elseif($category_id === 'Strong-line')
        <img src="{{ asset('assets/frontend/images/flavors/zomo_strong_banner.png') }}">
    @elseif($category_id === 'Max-line')
        <img src="{{ asset('assets/frontend/images/flavors/zomo_maxLine_banner.png') }}">
    @endif
    <div class="row" style="margin-top:-150px;text-align:center;">
        <div class="col-sm-6 titulo-descr-categorias-classic-line">
            @if ($category_id === 'Classic-line')
                <a href="" class="produto-categoria-link">
                    <h3>Classic</h3>
                </a>
            @elseif($category_id === 'Strong-line')
                <a href="" style="color:white">
                    <h3>Strong</h3>
                </a>
            @elseif($category_id === 'Max-line')
                <div class="elementor-widget-container elementor-motion-effects-element"
                    style="transform: rotateX(var(--rotateX))rotateY(var(--rotateY)); --rotateX: -9.80769230769231deg; --rotateY: -9.882869692532944deg">
                    <img width="523"class="image" height="336"
                        src="{{ asset('assets/frontend/images/flavors/zomo_max.png') }}"sizes="(max-width: 523px) 100vw, 523px">
                </div>
            @endif
        </div>
        <div class="col-sm-4" style="letter-spacing: 2px;">
            @if ($category_id === 'Classic-line')
                <p class="descricao-pagina-categorias-classic-line">
                    The Classic Line brings the flavors already known to your session. A more top flavor than the
                    others,
                    check out all the flavors below!</p>
            @elseif($category_id === 'Strong-line')
                <p class="strong-line">Welcome the strength of flavors that will boost your hookah session. The Strong
                    Line offers sugar cane molasses with an exquisite cool taste, for those who enjoy strong hookah
                    flavors.</p>
            @endif
        </div>
        @if ($category_id === 'Max-line')
            <div class="col-sm-4 zomo_max-quality">
                <img width="459" height="167"
                    src="{{ asset('assets/frontend/images/flavors/max_quality.png') }}"sizes="(max-width: 459px) 100vw, 459px">
            </div>
        @endif
    </div>
        <div class="new-container max-line flavor-image">

@if ($category_id === 'Max-line')
        <div class="row">
            <h2 class="title-main">
                <p>MAXIMUM TASTE,</p>
                <p> QUALITY AND LAST LONGER.</p>
            </h2>
            <div class="col-sm-2">
                <img width="459" height="167"
                    src="{{ asset('assets/frontend/images/flavors/max.png') }}"sizes="(max-width: 459px) 100vw, 459px">

            </div>
            <div class="col-sm-8">
                <p class="inner_paragraph">Find a unique experience with a new concept that brings the highest
                    quality
                    to your session. From the selection of the best tobacco imported directly from Germany to the
                    ISO
                    9001 international certification in every production process, every detail has been very well
                    taken
                    care of to guarantee maximum satisfaction at all times.</p>
                <br><br>
                <p class="inner_paragraph"><span style="color: var( --e-global-color-text ); letter-spacing: 0.4px;">
                        We are always improving ourselves and looking for the best of the best for you, that’s why
                        Zomo
                        Max meets the highest quality standards. We use specially selected and tested international
                        flavorings, in addition to a new quality process developed in the United States, Blender
                        Max,
                        now available in Brazil. You will have that respect session with the most intense and true
                        flavors ever made. If it’s about being the best, only ZOMO!
                    </span></p>
            </div>
            <div class="col-sm-2">
                <img width="459" height="167"
                    src="{{ asset('assets/frontend/images/flavors/much_more.png') }}"sizes="(max-width: 459px) 100vw, 459px">
            </div>
        </div>
    @else
        <div class="new-container">
@endif
@if ($category_id === 'Max-line')
    <div class="product-list" style="margin-top:100px;">
    @else
        <div class="product-list">
@endif
<div class="product-item">
    @foreach ($tableData as $val)
        <div class="product-box">
            <a href="{{ route('frontend.flavors.product.detail', $val->slug) }}" class="images">
                <img src="{{ $model->getFlavorImageAttribute($val) }}" class="fimg">
            </a>
            <a class="product-title"
                href="{{ route('frontend.flavors.product.detail', $val->slug) }}">{{ $val->flavor_title }}</a>
        </div>
    @endforeach
</div>
<div class="pagination product-list-pages">
    {{ $tableData->links('frontend.component.pagination') }}
</div>
{{-- </div> --}}
