@extends('frontend.layouts.master')
@section('title')
    Product
@endsection


@section('main')

    <body class="product-page">
        <div class="btcm">
            <div class="container">
                <div class="breadcrumbs d-flex align-items-center">
                    <a href="{{ route('frontend.home') }}">Home</a>
                    <span> » </span>
                    <span class="breadcrumb_last" aria-current="page">News</span>
                </div>
            </div>
        </div>



        <div class="new-container">
            <div class="news-list">
                <p class="content-title">News</p>
                <div class="news-list-wrapper">
                    <div class="news-box ">
                        <div class="images-box">
                            <a href="singles-new.html" class="images">
                                <img src={{ asset('assets/frontend/images/new-1.webp') }} alt="News 1">
                            </a>
                            <a href="singles-new.html" class="leia-mais">
                                <span>LEIA MAIS</span>
                            </a>
                        </div>
                        <div class="div-tag">
                            <p>Zomo Release</p>
                        </div>
                        <div class="content-news">
                            <a href="singles-new.html">
                                Strawberry Candy is the newest flavor explosion from Zomo
                            </a>
                            <p>This flavor highlights the irresistible sweetness of strawberry, coupled with a balanced
                                freshness that offers a unique experience with MAX intensity and duration. It’s not just a
                                flavor, it’s a sensory journey. Strawberry Candy invites you to a new level of pleasure and
                                freshness, without being overly intense. This perfect balance makes it the most […]</p>
                            <p class="date">Posted in: 6 de June de 2023</p>
                        </div>
                    </div>
                    <div class="news-box ">
                        <div class="images-box">
                            <a href="singles-new.html" class="images">
                                <img src={{ asset('assets/frontend/images/new-2.webp') }} alt="News 1">
                            </a>
                            <a href="singles-new.html" class="leia-mais">
                                <span>LEIA MAIS</span>
                            </a>
                        </div>
                        <div class="div-tag">
                            <p>Zomo Release</p>
                        </div>
                        <div class="content-news">
                            <a href="singles-new.html">
                                LAUNCH ZOMO MAX UVA
                            </a>
                            <p>Hey, guys! The launch that will leave you amazed is here! The new flavor has arrived, and
                                it’s a flavor explosion that will shake you up… Check this out: purple grape with maximum
                                intensity! It has a sweet touch that is pure love. It’s that perfect balance that makes us
                                want more and more. And […]</p>
                            <p class="date">Posted in: 6 de June de 2023</p>
                        </div>
                    </div>
                    <div class="news-box reveal">
                        <div class="images-box">
                            <a href="singles-new.html" class="images">
                                <img src={{ asset('assets/frontend/images/new-2.webp') }} alt="News 1">
                            </a>
                            <a href="singles-new.html" class="leia-mais">
                                <span>LEIA MAIS</span>
                            </a>
                        </div>
                        <div class="div-tag">
                            <p>Zomo Release</p>
                        </div>
                        <div class="content-news">
                            <a href="singles-new.html">
                                Strawberry Candy is the newest flavor explosion from Zomo
                            </a>
                            <p>This flavor highlights the irresistible sweetness of strawberry, coupled with a balanced
                                freshness that offers a unique experience with MAX intensity and duration. It’s not just a
                                flavor, it’s a sensory journey. Strawberry Candy invites you to a new level of pleasure and
                                freshness, without being overly intense. This perfect balance makes it the most […]</p>
                            <p class="date">Posted in: 6 de June de 2023</p>
                        </div>
                    </div>
                    <div class="news-box reveal">
                        <div class="images-box">
                            <a href="singles-new.html" class="images">
                                <img src={{ asset('assets/frontend/images/new-3.webp') }} alt="News 1">
                            </a>
                            <a href="singles-new.html" class="leia-mais">
                                <span>LEIA MAIS</span>
                            </a>
                        </div>
                        <div class="div-tag">
                            <p>Zomo Release</p>
                        </div>
                        <div class="content-news">
                            <a href="singles-new.html">
                                THE NEW PAPER LAUNCH BY ZOMO NATURAL SLIM ARRIVES ON THE MARKET
                            </a>
                            <p>A novelty has just arrived on the artisanal cigarette market. The launch of paper for the
                                Roll Your Own category promises to delight consumers. With its ultra-thin thickness, French
                                origin and organic manufacturing, it offers a slow burn and a unique experience. Slim size
                                ensures elegance and practicality. Enjoy special moments with the ideal paper […]</p>
                            <p class="date">Posted in: 6 de June de 2023</p>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <a href="#" class="page-numbers prev">Previous</a>
                    <a href="#" class="page-numbers current">1</a>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">...</a>
                    <a href="#" class="page-numbers">20</a>
                    <a href="#" class="next page-numbers">Next</a>
                </div>
            </div>
        </div>
        <div class="history-slider-main reveal">
            <div class="history-slider owl-carousel owl-theme">
                <div class="item">
                    <img src={{ asset('assets/frontend/images/about-us/history-slide-01.png') }} alt="history-slider">
                </div>
                <div class="item">
                    <img src={{ asset('assets/frontend/images/about-us/history-slide-02.png') }} alt="history-slider">
                </div>
                <div class="item">
                    <img src={{ asset('assets/frontend/images/about-us/history-slide-03.png') }} alt="history-slider">
                </div>
                <div class="item">
                    <img src={{ asset('assets/frontend/images/about-us/history-slide-04.png') }} alt="history-slider">
                </div>
                <div class="item">
                    <img src={{ asset('assets/frontend/images/about-us/history-slide-05.webp') }} alt="history-slider">
                </div>
            </div>
        </div>

        <div class="footer-contact reveal">
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


    </body>
@endsection
