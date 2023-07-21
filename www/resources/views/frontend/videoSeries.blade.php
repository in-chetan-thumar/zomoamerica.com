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
                    <span class="breadcrumb_last" aria-current="page">Video Series</span>
                </div>
            </div>
        </div>


        <div class="series-wrap">
            <div class="container">
                <div class="video-big">
                    <!-- <iframe width="560" height="720" src="https://www.youtube.com/embed/X7WXHhokylc"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe> -->
                    <iframe width="560" height="720" src="https://www.youtube.com/embed/Ae29eMNBaXs"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

                <div class="video-grid">
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/Ae29eMNBaXs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/drWCUoin1TA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/At8SIRbaolE"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/JUqehm-Rpvk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/Xr2s4cJw69U"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/T4_HqTQfgow"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/44kQNg_UGkE"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/T2MuWS2kfIQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <!-- <div class="video-box">
                                    <iframe width="560" height="234" src="https://www.youtube.com/embed/LXRmXXoS9pg"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div> -->
                    <div class="video-box">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/o1MdcJaw26o"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/am5zmf_elbg"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/HgZld8MojGQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <!-- <div class="video-box">
                                    <iframe width="560" height="234" src="https://www.youtube.com/embed/HpSExNo4r3Y"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-box">
                                    <iframe width="560" height="234" src="https://www.youtube.com/embed/yZw4XmKLsok"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div> -->
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/Y0-_n2VuzeA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-box reveal">
                        <iframe width="560" height="234" src="https://www.youtube.com/embed/Kjr0-qWKbNc"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

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
    </body>
@endsection
