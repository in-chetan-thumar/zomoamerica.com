@extends('frontend.layouts.master')
@section('title')
@endsection


@section('main')
    <div class="btcm">
        <div class="container">
            <div class="breadcrumbs d-flex align-items-center">
                <a href="/">Home</a>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page">About Us</span>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <p class="content-title">ABOUT US</p>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="banner-image">
                <img src={{ asset('assets/frontend/images/about-us/banner.webp') }} alt="banner-image">
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="sub-title">
                <h2>A LITTLE OF OUR HISTORY</h2>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div class="about-history-main">
            <div class="logo-img">
                <img src={{ asset('assets/frontend/images/about-us/zomo.webp') }} alt="zomo">
            </div>
            <div class="about-history">
                <div class="center-line"></div>
                <div class="about-item-main reveal">
                    <div class="about-item">
                        <div class="image" data-bs-toggle="modal" data-bs-target="#history-img01">
                            <img src={{ asset('assets/frontend/images/about-us/history-01.png') }} alt="history-01">
                        </div>
                        <div class="content-details">
                            <h3>EVERYTHING HAS A BEGINNING!</h3>
                            <p>2015: the year it all began The idea of creating ZOMO was born. We started planning to
                                bring a new concept to the market with more than 50 flavors. Shortly after that, we
                                innovated again with the creation of the Strong Mint flavor, the first product of the
                                Strong Line.</p>
                        </div>
                    </div>
                    <div class="icon-main">
                        <span class="round"></span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="about-item-main reveal">
                    <div class="about-item">
                        <div class="image" data-bs-toggle="modal" data-bs-target="#history-img02">
                            <img src={{ asset('assets/frontend/images/about-us/history-02.webp') }} alt="history-02">
                        </div>
                        <div class="content-details">
                            <h3>2016 WORKING AT FULL POWER</h3>
                            <p>New flavors were added to the Strong Line. We also wanted our clients to have a truly
                                global experience. So, we launched the World Experience Line. For end the year on a high
                                note, we launched a limited and exclusive edition for very meticulous people: The Black
                                Edition flavor. Last but not least, Zomo Talk Show came to life; we got 1st place on
                                Embanews Awards for best packaging design and started to plan the Kingdom arguile.</p>
                        </div>
                    </div>
                    <div class="icon-main">
                        <span class="round"></span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                <path
                                    d="M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="about-item-main reveal">
                    <div class="about-item">
                        <div class="image" data-bs-toggle="modal" data-bs-target="#history-img03">
                            <img src={{ asset('assets/frontend/images/about-us/history-03.webp') }} alt="history-03">
                        </div>
                        <div class="content-details">
                            <h3>2017: STARTING A WORLD REVOLUTION</h3>
                            <p>We brought all the soft drinks flavors together in a single line: Splash. The “Bonde do
                                Busão” joined us to create an incredible night at the launching of the Strong Peach
                                flavor. Zomo partnered with the largest Brazilian soccer team to create the Timão
                                flavor. Kingdom arguile was released with great majesty. We organized our first
                                simultaneous event in 30 lounges. Flavors of Brazil got an exclusive line for its own.
                                We also won our 2nd Embanews Award for best packaging design and Best Exhibition Stand
                                Design at the Hookah Club Show Fair in Russia.</p>
                        </div>
                    </div>
                    <div class="icon-main">
                        <span class="round"></span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                <path
                                    d="M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="about-item-main reveal">
                    <div class="about-item">
                        <div class="image" data-bs-toggle="modal" data-bs-target="#history-img04">
                            <img src={{ asset('assets/frontend/images/about-us/history-04.webp') }} alt="history-04">
                        </div>
                        <div class="content-details">
                            <h3>2018 WAS CRAZY</h3>
                            <p> We changed our colors, our image, our packaging and our communication. Instead of
                                organizing a single simultaneous event, we organized 4, in more than 50 lounges in
                                Brazil. We partnered with popular names of the music like Hungria, MC Gui, MC WM to
                                create the Stars Line. We also created the 1st Brazilian Smoke Ring Championship, the
                                SmokeFun. It was the year of the World Cup, so Zomo launched the Copa Line. Last but not
                                least, we won the award of Most Expected Tobacco of the Year in Spain. The 80 feet rosh
                                by Hookah John arrived. We rode Lamborghinis, we smoke in the snow, we went skydiving…
                                we almost got out of breath for doing so much.</p>
                        </div>
                    </div>
                    <div class="icon-main">
                        <span class="round"></span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                <path
                                    d="M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="about-item-main reveal">
                    <div class="about-item">
                        <div class="image" data-bs-toggle="modal" data-bs-target="#history-img05">
                            <img src={{ asset('assets/frontend/images/about-us/history-05.webp') }} alt="history-05">
                        </div>
                        <div class="content-details">
                            <h3>2019 A BOLD YEAR</h3>
                            <p>This year has been awesome. Not a single day of rest. Zomo participated in the biggest
                                hookah fairs all over the globe: Latin America, United States of America, Europe and
                                Russia. We have accomplished a lot of challenging goals, like having a hookah session in
                                Times Square. We launched Zona line, the hookah with German design. We created Strong
                                Foil: the strongest aluminum on the market. Two new flavors were added to the Star line:
                                Dani Russo and Kevinho. Those two flavors have already become a success in lounges and
                                club sessions. 2019 has been top and we still have a lot more to offer, wait and see!
                            </p>
                        </div>
                    </div>
                    <div class="icon-main">
                        <span class="round"></span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path
                                    d="M338.9 446.8c-25.4 11-53.4 17.2-82.9 17.2C141.1 464 48 370.9 48 256S141.1 48 256 48s208 93.1 208 208c0 22.4-3.5 43.9-10.1 64.1c3.1 4.5 5.7 9.4 7.8 14.6c12.7-1.6 25.1 .4 36.2 5c9.1-26.2 14-54.4 14-83.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c35.4 0 69.1-7.2 99.7-20.2c-4.8-5.5-8.5-12.2-10.4-19.7l-6.5-25.3zM296 316c0-6.9-3.1-13.2-7.3-18.3c-4.3-5.2-10.1-9.7-16.7-13.4C258.7 276.9 241.4 272 224 272c-3.6 0-6.8 2.5-7.7 6s.6 7.2 3.8 9l0 0 0 0 0 0 .2 .1c.2 .1 .5 .3 .9 .5c.8 .5 2 1.2 3.4 2.1c2.8 1.9 6.5 4.5 10.2 7.6c3.7 3.1 7.2 6.6 9.6 10.1c2.5 3.5 3.5 6.4 3.5 8.6s-1 5-3.5 8.6c-2.5 3.5-5.9 6.9-9.6 10.1c-3.7 3.1-7.4 5.7-10.2 7.6c-1.4 .9-2.6 1.6-3.4 2.1c-.4 .2-.7 .4-.9 .5l-.2 .1 0 0 0 0 0 0 0 0 0 0c-2.5 1.4-4.1 4.1-4.1 7s1.6 5.6 4.1 7l0 0 0 0 0 0 .2 .1c.2 .1 .5 .3 .9 .5c.8 .5 2 1.2 3.4 2.1c2.8 1.9 6.5 4.5 10.2 7.6c3.7 3.1 7.2 6.6 9.6 10.1c2.5 3.5 3.5 6.4 3.5 8.6s-1 5-3.5 8.6c-2.5 3.5-5.9 6.9-9.6 10.1c-3.7 3.1-7.4 5.7-10.2 7.6c-1.4 .9-2.6 1.6-3.4 2.1c-.4 .2-.7 .4-.9 .5l-.2 .1 0 0 0 0 0 0 0 0c-3.2 1.8-4.7 5.5-3.8 9s4.1 6 7.7 6c17.4 0 34.7-4.9 47.9-12.3c6.6-3.7 12.5-8.2 16.7-13.4c4.3-5.1 7.3-11.4 7.3-18.3s-3.1-13.2-7.3-18.3c-4.3-5.2-10.1-9.7-16.7-13.4c-2.7-1.5-5.7-3-8.7-4.3c3.1-1.3 6-2.7 8.7-4.3c6.6-3.7 12.5-8.2 16.7-13.4c4.3-5.1 7.3-11.4 7.3-18.3zM176.4 240a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm159.3-20c10.6 0 19.9 3.8 25.4 9.7c7.6 8.1 20.2 8.5 28.3 .9s8.5-20.2 .9-28.3C375.7 186.8 355 180 335.6 180s-40.1 6.8-54.6 22.3c-7.6 8.1-7.1 20.7 .9 28.3s20.7 7.1 28.3-.9c5.5-5.8 14.8-9.7 25.4-9.7zM434 352.3c-6-23.2-28.8-37-51.1-30.8s-35.4 30.1-29.5 53.4l22.9 89.3c2.2 8.7 11.2 13.9 19.8 11.4l84.9-23.8c22.2-6.2 35.4-30.1 29.5-53.4s-28.8-37-51.1-30.8l-20.2 5.6-5.4-21z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="about-item-main reveal">
                    <div class="about-item">
                        <div class="image" data-bs-toggle="modal" data-bs-target="#history-img06">
                            <img src={{ asset('assets/frontend/images/about-us/history-06.webp') }} alt="history-06">
                        </div>
                        <div class="content-details">
                            <h3>2020 WAS A DIFFICULT YEAR, BUT WE GOT TOGETHER TO MAKE IT.</h3>
                            <p>To start, we participated in the two largest narghile fairs: one in the world (John
                                Calliano Festival) and one in Brazil (Expo Hookah). We stopped all our production of
                                essences at the factory, to start the production of gel alcohol and masks. So, we were
                                able to make the donation in several locations in Ciudad del Este and Foz do Iguaçu. In
                                the crisis, create! We launched a line that barely arrived and was already the hype of
                                the crowd, the Drinks line. Oh and speaking of launch, two hookah models are now part of
                                the Zona family. And we could not end the year without successful partnerships. We
                                sponsored a MMA fighter Marcio “God of War” and also the FreeFire team, Corinthians FF.
                                So, let 2021 comes.</p>
                        </div>
                    </div>
                    <div class="icon-main">
                        <span class="round"></span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path
                                    d="M256 0c53 0 96 43 96 96v3.6c0 15.7-12.7 28.4-28.4 28.4H188.4c-15.7 0-28.4-12.7-28.4-28.4V96c0-53 43-96 96-96zM41.4 105.4c12.5-12.5 32.8-12.5 45.3 0l64 64c.7 .7 1.3 1.4 1.9 2.1c14.2-7.3 30.4-11.4 47.5-11.4H312c17.1 0 33.2 4.1 47.5 11.4c.6-.7 1.2-1.4 1.9-2.1l64-64c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3l-64 64c-.7 .7-1.4 1.3-2.1 1.9c6.2 12 10.1 25.3 11.1 39.5H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H416c0 24.6-5.5 47.8-15.4 68.6c2.2 1.3 4.2 2.9 6 4.8l64 64c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0l-63.1-63.1c-24.5 21.8-55.8 36.2-90.3 39.6V240c0-8.8-7.2-16-16-16s-16 7.2-16 16V479.2c-34.5-3.4-65.8-17.8-90.3-39.6L86.6 502.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l64-64c1.9-1.9 3.9-3.4 6-4.8C101.5 367.8 96 344.6 96 320H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H96.3c1.1-14.1 5-27.5 11.1-39.5c-.7-.6-1.4-1.2-2.1-1.9l-64-64c-12.5-12.5-12.5-32.8 0-45.3z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="about-item-main reveal">
                    <div class="about-item">
                        <div class="image" data-bs-toggle="modal" data-bs-target="#history-img07">
                            <img src={{ asset('assets/frontend/images/about-us/history-07.webp') }} alt="history-07">
                        </div>
                        <div class="content-details">
                            <h3>2021 WAS AN AMAZING YEAR WITH MANY SURPRISES</h3>
                            <p>We started the year by introducing the Zpod, a practical, elegant and damage-reducing
                                device. We launched our line of CBD e-liquids, the best relaxing ally. The Drink line
                                gained new flavors, starting with Melancia Atômica. We brought a surprise to everyone at
                                FOA at the launch of Sorvetuva and we were glued to the session with Tutti Frutti. We
                                smoked on and off the track at Ultimate Drift events. There was music and a lot of smoke
                                with a sensational live from Hungría direct from our factory for the launch of Brabo, a
                                flavor with a taste of nostalgia. We love this flavor so much that we brought it and
                                others chosen by Hungría in our e-liquids as well. If we were already a part of your
                                days, now we do much more with the new GO disposable pods! and FLOW, which are already
                                successful throughout Brazil. We partner with Elo Ambiental and created a sustainable
                                battery recycling project called ECO Zomo. People there were so many things going on
                                that the year passed very quickly, but stay tuned that 2022 has much more!</p>
                        </div>
                    </div>
                    <div class="icon-main">
                        <span class="round"></span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path
                                    d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75H192 160 64c-35.3 0-64 28.7-64 64v96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V352l8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V300.4c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4V32zm-64 76.7V240 371.3C357.2 317.8 280.5 288 200.7 288H192V192h8.7c79.8 0 156.5-29.8 215.3-83.3z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="history-slider-main reveal">
        <div class="history-slider owl-carousel owl-theme">
            <div class="item">
                <img src={{ asset('assets/frontend/images/about-us/history-01.png') }} alt="history-slider">
            </div>
            <div class="item">
                <img src={{ asset('assets/frontend/images/about-us/history-slide-02.png') }} alt="history-slider">
            </div>
            <div class="item">
                <img src={{ asset('assets/frontend/images/about-us/history-03.webp') }} alt="history-slider">
            </div>
            <div class="item">
                <img src={{ asset('assets/frontend/images/about-us/history-04.webp') }} alt="history-slider">
            </div>
            <div class="item">
                <img src={{ asset('assets/frontend/images/about-us/history-05.webp') }} alt="history-slider">
            </div>
        </div>
    </div>

    <div class="modal fade history" id="history-img01" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="welcomemodelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src={{ asset('assets/frontend/images/about-us/history-01.png') }} alt="history">
                </div>
                <div class="modal-footer">
                    <p>EVERYTHING HAS A BEGINNING!</p>
                    <button type="button" class="close-icon" data-bs-dismiss="modal" aria-label="Close"><img
                            src={{ asset('assets/frontend/images/icons/close-icon.webp') }} alt="close"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade history" id="history-img02" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="welcomemodelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src={{ asset('assets/frontend/images/about-us/history-02.webp') }} alt="history">
                </div>
                <div class="modal-footer">
                    <p>2016 WORKING AT FULL POWER</p>
                    <button type="button" class="close-icon" data-bs-dismiss="modal" aria-label="Close"><img
                            src={{ asset('assets/frontend/images/icons/close-icon.webp') }} alt="close"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade history" id="history-img03" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="welcomemodelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src={{ asset('assets/frontend/images/about-us/history-03.webp') }} alt="history">
                </div>
                <div class="modal-footer">
                    <p>2017: STARTING A WORLD REVOLUTION</p>
                    <button type="button" class="close-icon" data-bs-dismiss="modal" aria-label="Close"><img
                            src={{ asset('assets/frontend/images/icons/close-icon.webp') }} alt="close"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade history" id="history-img04" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="welcomemodelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src={{ asset('assets/frontend/images/about-us/history-04.webp') }} alt="history">
                </div>
                <div class="modal-footer">
                    <p>2018 WAS CRAZY</p>
                    <button type="button" class="close-icon" data-bs-dismiss="modal" aria-label="Close"><img
                            src={{ asset('assets/frontend/images/icons/close-icon.webp') }} alt="close"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade history" id="history-img05" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="welcomemodelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src={{ asset('assets/frontend/images/about-us/history-05.webp') }} alt="history">
                </div>
                <div class="modal-footer">
                    <p>2019 A BOLD YEAR</p>
                    <button type="button" class="close-icon" data-bs-dismiss="modal" aria-label="Close"><img
                            src={{ asset('assets/frontend/images/icons/close-icon.webp') }} alt="close"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade history" id="history-img06" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="welcomemodelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src={{ asset('assets/frontend/images/about-us/history-06.webp') }} alt="history">
                </div>
                <div class="modal-footer">
                    <p>2020 WAS A DIFFICULT YEAR, BUT WE GOT TOGETHER TO MAKE IT.</p>
                    <button type="button" class="close-icon" data-bs-dismiss="modal" aria-label="Close"><img
                            src={{ asset('assets/frontend/images/icons/close-icon.webp') }} alt="close"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade history" id="history-img07" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="welcomemodelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src={{ asset('assets/frontend/images/about-us/history-07.webp') }} alt="history">
                </div>
                <div class="modal-footer">
                    <p>2021 WAS AN AMAZING YEAR WITH MANY SURPRISES</p>
                    <button type="button" class="close-icon" data-bs-dismiss="modal" aria-label="Close"><img
                            src={{ asset('assets/frontend/images/icons/close-icon.webp') }} alt="close"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-contact reveal">
        <div class="infomation-footer-contact container">
            <div class="footer-contact-box">
                <p class="title-in">{{ config('constants.FOOTER_TITLE') }}</p>
                <p>{{ config('constants.FOOTER_ADD') }}</p>
            </div>
            <div class="footer-contact-box">
                <p class="title-in">{{ config('constants.FOOTER_TITLE1') }}</p>
                <a href="tel:18669523331">{{ config('constants.FOOTER_TELEPHONE') }}</a>
                <a href="mailto:sales@zomousa.com">{{ config('constants.FOOTER_GMAIL') }}</a>
            </div>
        </div>
    </div>
@endsection
