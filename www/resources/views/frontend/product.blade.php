@extends('frontend.layouts.master')
@section('title')
	 
@endsection


@section('main')
<body class="product-page">
<div class="btcm">
	<div class="container">
			<div class="breadcrumbs d-flex align-items-center">
				<a href="/">Home</a>
				<span> » </span>
				<a href="/">Products</a>
				<span> » </span>
				<a href="/">Flavors</a>
				<span> » </span>
				<span class="breadcrumb_last" aria-current="page">Max Blueberry</span>
			</div>
	</div>
</div>

	<div class="product-slider-main">
        <div class="container">
            <div class="product-slider">
                <div class="product-slider-wrapper">
                    <div class="product-left">
                        <div class="product-slider-sub-main">
                            <div class="swiper product-slider-sub">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="image-box">
                                            <img class="image" src={{ asset('assets/frontend/images/product/product-01.webp')}} alt="product-01" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-box">
                                            <img class="image" src={{ asset('assets/frontend/images/product/product-02.webp')}} alt="product-02" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper thumb-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="image-box">
                                            <img src={{ asset('assets/frontend/images/product/product-01.webp')}} alt="product-01" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-box">
                                            <img src={{ asset('assets/frontend/images/product/product-02.webp')}} alt="product-02" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-right product-box">
                        <h1>BLUEBERRY</h1>
                        <h2>ZOMO MAX BLUEBERRY</h2>
                        <p>Blueberry is Zomo’s newest release. Better known in Brazil as Mirtilo, a fruity flavor, with
                            a lot of intensity and MAX duration. A flavor that brings the sweetness of the fruit and at
                            the same time has a super balanced refreshing touch that transform his flavor into the most
                            special launch of Zomo ever.
                        </p>

                        <div class="progress-main">
                            <div class="item">
                                <p>Menthol</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="item">
                                <p>Sweet</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="item">
                                <p>Citric</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="available">
                            <p>Available in:</p>
                            <div class="item">
                                <span>50g</span>
                                <span>|</span>
                                <span>250g</span>
                                <span>|</span>
                                <span>6kg</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icon">
                    <a class="left-arrow arrow-icon" href="#"><img src={{ asset('assets/frontend/images/icons/slider-icon-left.webp')}} alt="left-icon"></a>
                    <a class="right-arrow arrow-icon" href="#"><img src={{ asset('assets/frontend/images/icons/slider-icon-right.webp')}} alt="left-icon"></a>
                </div>
            </div>
        </div>
    </div>
	<!-- product footer -->
	<div class="footer-contact">
		<div class="infomation-footer-contact container">
			<div class="footer-contact-box">
				<p class="title-in">Corporate</p>
				<p> 704 North Valley Street Suite R&S Anaheim, CA 92801</p>
			</div>
			<div class="footer-contact-box">
				<p class="title-in">Sales</p>
				<a href="tel:18669523331">1-866-952-3331</a>
				<a href="mailto:sales@zomousa.com">sales@zomousa.com</a>
			</div>
		</div>
	</div>
    @section('js')
    @endsection
</body>
@endsection
