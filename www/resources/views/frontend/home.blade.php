@extends('frontend.layouts.master')
@section('title')
    {{ $content->meta_title }}
@endsection
@section('css')
    .input-bottom {
    width: 65px !important;
    position: absolute;
    border-radius: 2px !important;
    font-size: 50px;
    height: 20px;
    }

    .heading{
    font-size: 22px;
    color: #ffffff;
    text-align: left;
    font-family: Lato;
    font-weight: 700;
    font-style: normal;
    background-color: #7a7a7a;
    padding:5px 8px;
    margin-bottom:25px;
    }

    .where-to-buy-box .images-box{
    {{--        width: 300px; --}}
    {{-- height: 300px; --}}
    {{-- overflow: hidden;  --}}
    }
    .where-to-buy-box .images-box img{
    {{-- width: 100%;
        height: 100%; --}}
    object-fit: cover;
    }
@endsection
@section('main')
    <div class="owl-carousel owl-theme home-banner">
        <div class="item">
            <img class="dastop-images" src={{ asset('assets/frontend/images/banner-images/web/Banner-main-1.webp') }}
                width="100" height="100" alt="dastop-images">
            <img class="tab-images" src={{ asset('assets/frontend/images/banner-images/tab/Banner-main-10241.webp') }}
                width="100" height="100" alt="tab-images">
            <img class="mobile-images" src={{ asset('assets/frontend/images/banner-images/mobile/Banner-main-6401.webp') }}
                width="100" height="100" alt="mobile-images">

        </div>
        <div class="item">
            <img class="dastop-images" src={{ asset('assets/frontend/images/banner-images/web/Banner-main-2.webp') }}
                width="100" height="100" alt="dastop-images">
            <img class="tab-images" src={{ asset('assets/frontend/images/banner-images/tab/Banner-main-10242.webp') }}
                width="100" height="100" alt="tab-images">
            <img class="mobile-images" src={{ asset('assets/frontend/images/banner-images/mobile/Banner-main-6402.webp') }}
                width="100" height="100" alt="mobile-images">

        </div>
        <div class="item">
            <img class="dastop-images" src={{ asset('assets/frontend/images/banner-images/web/Banner-main-3.webp') }}
                width="100" height="100" alt="dastop-images">
            <img class="tab-images" src={{ asset('assets/frontend/images/banner-images/tab/Banner-main-10243.webp') }}
                width="100" height="100" alt="tab-images">
            <img class="mobile-images" src={{ asset('assets/frontend/images/banner-images/mobile/Banner-main-6403.webp') }}
                width="100" height="100" alt="mobile-images">
        </div>
        <div class="item">
            <img class="dastop-images" src={{ asset('assets/frontend/images/banner-images/web/WATERLEMONBANNER.webp') }}
                width="100" height="100" alt="mobile-images">
            <img class="tab-images" src={{ asset('assets/frontend/images/banner-images/tab/WATERLEMONBANNER.webp') }}
                width="100" height="100" alt="mobile-images">

            <img class="mobile-images" src={{ asset('assets/frontend/images/banner-images/mobile/WATERLEMONBANNER.webp') }}
                width="100" height="100" alt="mobile-images">

        </div>
        <div class="item">

            <img class="dastop-images"
                src={{ asset('assets/frontend/images/banner-images/web/miami-nights-home-banner.webp') }} width="100"
                height="100" alt="mobile-images">
            <img class="tab-images"
                src={{ asset('assets/frontend/images/banner-images/tab/miami-nights-home-banner.webp') }} width="100"
                height="100" alt="mobile-images">
            <img class="mobile-images"
                src={{ asset('assets/frontend/images/banner-images/mobile/miami-nights-home-banner.webp') }} width="100"
                height="100" alt="mobile-images">
        </div>
    </div>

    <div class="product-section reveal">
        <div class="container">
            <h2 class="title-main">FEATURE PRODUCTS</h2>
            <div class="owl-carousel owl-theme product-slider-in">
                @foreach ($flavors as $flavor)
                    <div class="item">
                        <div class="product-box">
                            @isset($flavor->slug)
                                <a href="{{ route('frontend.flavors.product.detail', $flavor->slug) }}" class="images-box">
                                    <img src="{{ $model->getFlavorImageAttribute($flavor) }}" alt="Product 1" width="100"
                                        height="100">
                                </a>
                                <a href="{{ route('frontend.flavors.product.detail', $flavor->slug) }}"
                                    class="product-title">{{ $flavor->flavor_title }}</a>
                            @endisset
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="newslatter reveal">
        <div class="container">
            <div class="newslatter-form">
                <p class="title-news">EMAIL NEWLETTER</p>
                {!! Form::open([
                    'url' => route('frontend.EmailNews.store'),
                    'method' => 'POST',
                    'id' => 'EmailNewsLetter-form',
                    'class' => 'EmailNewsLetter-form',
                ]) !!}

                <label for="Subscribe">Subscribe to our newsletter and get notification about ZOMO updates.</label>

                <div class="row">
                    <div class="col-11">
                        <input type="text" name="email" id="Subscribe">

                    </div>
                    <div class="col-1 arrow-button">
                        <input type="submit" class="input-bottom" value=">"
                            style="color:#482583;background:#73648d;font-size:50px;">
                    </div>
                </div>
                {{--                <input type="text" name="email" id="Subscribe"> --}}
                {{--                <input type="submit" class="input-bottom" value=">" --}}
                {{--                    style="color:#482583;background:#73648d;font-size:50px;"> --}}
                {{ Form::close() }}
                </form>
            </div>
        </div>
    </div>

    {{--    <div class="news-sections"> --}}
    {{--        <div class="container"> --}}
    {{--            <h3 class="title-main">news</h3> --}}
    {{--            <div class="news-srction-item reveal"> --}}
    {{--                @foreach ($news as $news) --}}
    {{--                   @if (isset($news->link)) --}}
    {{--                   <div class="news-section-list"> --}}
    {{--                    <div class="images-box"> --}}
    {{--                        <a href="{{ $news->link }}" class="hover-bg"><span --}}
    {{--                                class="hide-text">hover</span></a> --}}
    {{--                        <img src={{ asset("storage/news/$news->image") }} alt="News" width="100" height="100"> --}}
    {{--                    </div> --}}
    {{--                    <p>{{ $news->title }}</p> --}}
    {{--                </div> --}}
    {{--                   @else --}}
    {{--                   <div class="news-section-list"> --}}
    {{--                    <div class="images-box"> --}}
    {{--                        <a href="{{ route('backend.news',$news->slug) }}" class="hover-bg"><span --}}
    {{--                                class="hide-text">hover</span></a> --}}
    {{--                        <img src={{ asset("storage/news/$news->image") }} alt="News" width="100" height="100"> --}}
    {{--                    </div> --}}
    {{--                    <p>{{ $news->title }}</p> --}}
    {{--                </div> --}}
    {{--                   @endif --}}

    {{--                @endforeach --}}
    {{--                --}}{{-- <div class="news-section-list"> --}}
    {{--                    <div class="images-box"> --}}
    {{--                        <a href="single-news.html" class="hover-bg"><span class="hide-text">hover</span></a> --}}

    {{--                        <img src={{ asset('assets/frontend/images/news-02.webp') }} alt="News 2" width="100" --}}
    {{--                            height="100"> --}}
    {{--                    </div> --}}
    {{--                    <p>FLAVOR OF AMERICA JUST LAUNCHED A REVOLUTIONARY APP</p> --}}
    {{--                </div> --}}
    {{--                <div class="news-section-list"> --}}
    {{--                    <div class="images-box"> --}}
    {{--                        <a href="singles-new.html" class="hover-bg"><span class="hide-text">hover</span></a> --}}
    {{--                        <img src={{ asset('assets/frontend/images/news-03.webp') }} alt="News 3" width="100" --}}
    {{--                            height="100"> --}}
    {{--                    </div> --}}
    {{--                    <p>SHISHA’S FLAVOR ON YOUR POD!</p> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--            <div class="sew-more-button reveal"> --}}
    {{--                <a href="{{ route('frontend.news') }} ">SEE MORE <span>></span></a> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </div> --}}

    <div class="where-to-buy" id="distributor">
        <div class="container">
            <h4 class="title-main reveal">WHERE TO BUY ZOMO</h4>
            <div class="row d-block">
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="heading reveal">
                        <h2>ONLINE DISTRIBUTOR</h2>
                    </div>
                    <div class="row d-flex justify-content-center">

                        <div class="col-lg-3 col-sm-12  where-to-buy-item reveal">
                            <div class="where-to-buy-box">
                                <div class="images-box">
                                    <img src="{{ asset('assets/frontend/images/way-to-buy/5starhookah.png') }}"
                                        alt="5 Star Hookah" class="responsive-image" height="100">
                                </div>
                                <p>5 Star Hookah</p>
                                <a href="https://5starhookah.com/collections/zomo-tobacco-shisha" class="visit-store"
                                    target="_blank">
                                    <span>
                                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_31_161)">
                                                <path
                                                    d="M12.1328 9.11719C12.6211 9.60547 12.6211 10.3984 12.1328 10.8867L4.63281 18.3867C4.14453 18.875 3.35156 18.875 2.86328 18.3867C2.375 17.8984 2.375 17.1055 2.86328 16.6172L9.48047 10L2.86719 3.38281C2.37891 2.89453 2.37891 2.10156 2.86719 1.61328C3.35547 1.125 4.14844 1.125 4.63672 1.61328L12.1367 9.11328L12.1328 9.11719Z"
                                                    fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_31_161">
                                                    <rect width="12.5" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    Visit Store</a>
                            </div>
                        </div>
                        {{-- style="padding-top: 23%; margin-left: 9%;" --}}
                        <div class="col-lg-3 col-sm-12  where-to-buy-item reveal">
                            <div class="where-to-buy-box">
                                <div class="images-box">
                                    <img src="{{ asset('assets/frontend/images/way-to-buy/hookahlogo.png') }}"
                                        alt="5 Star Hookah" class="responsive-image" height="100">
                                </div>
                                <p>Smokefun</p>
                                <a href="https://smokefun.com/product-category/tobacco/zomo/" class="visit-store"
                                    target="_blank">
                                    <span>
                                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_31_161)">
                                                <path
                                                    d="M12.1328 9.11719C12.6211 9.60547 12.6211 10.3984 12.1328 10.8867L4.63281 18.3867C4.14453 18.875 3.35156 18.875 2.86328 18.3867C2.375 17.8984 2.375 17.1055 2.86328 16.6172L9.48047 10L2.86719 3.38281C2.37891 2.89453 2.37891 2.10156 2.86719 1.61328C3.35547 1.125 4.14844 1.125 4.63672 1.61328L12.1367 9.11328L12.1328 9.11719Z"
                                                    fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_31_161">
                                                    <rect width="12.5" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    Visit Store</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12  where-to-buy-item reveal">
                            <div class="where-to-buy-box">
                                <div class="images-box">
                                    <img src="{{ asset('assets/frontend/images/way-to-buy/wholesale.png') }}"
                                        alt="Hookah Wholesalers" class="responsive-image" height="100" width="100">
                                </div>
                                <p>Hookah Wholesalers</p>
                                <a href="https://www.hookahwholesalers.com/" class="visit-store" target="_blank">
                                    <span>
                                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_31_161)">
                                                <path
                                                    d="M12.1328 9.11719C12.6211 9.60547 12.6211 10.3984 12.1328 10.8867L4.63281 18.3867C4.14453 18.875 3.35156 18.875 2.86328 18.3867C2.375 17.8984 2.375 17.1055 2.86328 16.6172L9.48047 10L2.86719 3.38281C2.37891 2.89453 2.37891 2.10156 2.86719 1.61328C3.35547 1.125 4.14844 1.125 4.63672 1.61328L12.1367 9.11328L12.1328 9.11719Z"
                                                    fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_31_161">
                                                    <rect width="12.5" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    Visit Store</a>
                            </div>
                        </div>
                        <div class="col-lg-3  col-sm-12 where-to-buy-item reveal">
                            <div class="where-to-buy-box">
                                <div class="images-box">
                                    <img src="{{ asset('assets/frontend/images/way-to-buy/hookal_junki.png') }}"
                                        alt="Hookah Junkie" height="100" class="responsive-image" width="100">
                                </div>
                                <p>Hookah Junkie</p>
                                <a href="https://hookahjunkie.com/" class="visit-store" target="_blank">
                                    <span>
                                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_31_161)">
                                                <path
                                                    d="M12.1328 9.11719C12.6211 9.60547 12.6211 10.3984 12.1328 10.8867L4.63281 18.3867C4.14453 18.875 3.35156 18.875 2.86328 18.3867C2.375 17.8984 2.375 17.1055 2.86328 16.6172L9.48047 10L2.86719 3.38281C2.37891 2.89453 2.37891 2.10156 2.86719 1.61328C3.35547 1.125 4.14844 1.125 4.63672 1.61328L12.1367 9.11328L12.1328 9.11719Z"
                                                    fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_31_161">
                                                    <rect width="12.5" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    Visit Store</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="heading reveal">
                        <h2>AUTHORIZED STATE DISTRIBUTOR</h2>
                    </div>
                    <h6 class="reveal">
                        Looking for a Zomo-authorized distributor in your state?
                    </h6>
                    <div class="content-infomation reveal" id="wholesale-form11">
                        <div class="contact-form">
                            {!! Form::open([
                                'url' => route('frontend.home.authorizeStateDistributor'),
                                'method' => 'POST',
                                'id' => 'wholesale-form',
                                'class' => 'wholesale-form',
                            ]) !!}

                            <div class="cole-two reveal">
                                <div class="input-field">
                                    <label for="fist">FIRST NAME <span class="text-danger">*</span></label>
                                    {!! Form::text('fname', old('fname'), [
                                        'class' => 'fname',
                                        'maxlength' => '20',
                                    ]) !!}
                                    <span class="text-danger" style="font-size:15px">
                                        @error('fname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <br>
                                </div>
                                <div class="input-field">
                                    <label for="Last">LAST NAME <span class="text-danger">*</span></label>
                                    {!! Form::text('lname', old('lname'), [
                                        'class' => 'lname',
                                        'maxlength' => '20',
                                    ]) !!}
                                    <span class="text-danger" style="font-size:15px">
                                        @error('lname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <br>
                                </div>
                            </div>

                            <div class="cole-two reveal">
                                <div class="input-field">
                                    <label for="city">CITY <span class="text-danger">*</span></label>
                                    {!! Form::text('city', old('city'), [
                                        'class' => 'city',
                                        'maxlength' => '30',
                                    ]) !!}
                                    <span class="text-danger" style="font-size:15px">
                                        @error('city')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <br>
                                </div>
                                <div class="input-field">
                                    <label for="state">State <span class="text-danger">*</span></label>
                                    {{ Form::Select('state', $stateArray, '', ['class' => 'state', 'placeholder' => 'Select']) }}
                                    <span class="text-danger" style="font-size:15px">
                                        @error('state')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <br>
                                </div>
                            </div>

                            <div class="cole-two reveal">
                                <div class="input-field">
                                    <label for="email">EMAIL ADDRESS <span class="text-danger">*</span></label>
                                    {!! Form::text('email', old('email'), [
                                        'class' => 'email',
                                        'maxlength' => '100',
                                    ]) !!}
                                    <span class="text-danger" style="font-size:15px">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <br>
                                </div>
                                <div class="input-field">
                                    <label for="number">TELEPHONE NUMBER <span class="text-danger">*</span></label>
                                    {!! Form::text('number', old('number'), [
                                        'class' => 'number',
                                        'maxlength' => '10',
                                    ]) !!}
                                    <span class="text-danger" style="font-size:15px">
                                        @error('number')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <br>
                                </div>
                            </div>

                            <div class="input-field">
                                <input type="hidden" name="g-recaptcha-response" id="response">
                            </div>

                            <div class="wrap-btn reveal">
                                <input type="submit" class="btn-black mb-5" value="SEND">
                            </div>

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @if (strpos(request()->cookie('blocker'), 'blocker') != -1)
        <div class="jquery-modal blocker current">
            <div id="bouncer_modal" class="modal_bouncer">
                <form name="AgeVerForm" id="AgeVerForm">
                    <div class="model_logo">
                        <img src="{{ asset('assets/frontend/images/logo.webp') }}" alt="model" width="100"
                            height="100">
                    </div>
                    <h1 id="bouncer_modal_heading">Welcome to zomoamerica.com</h1>
                    <p id="bouncer_modal_subheading">
                        By clicking <strong>Enter</strong> you verify that you are 18 years of age or older, 21 Years of age
                        or older in California and Hawaii.
                    </p>

                    <div id="bouncer_modal_actions">
                        <button type="button" class="pop-submit">Enter</button>
                        <button type="button" class="btn-black close">Exit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="Popup" style="display: none">
            <div class="pop-inner">
                <div class="pop-news-letter">

                    {!! Form::open([
                        'method' => 'POST',
                        'id' => 'newsletterPopupForm',
                        'class' => 'form-newletter',
                    ]) !!}

                    <h2>JOIN OUR<br>
                        NEWSLETTER</h2>
                    <p>Receive exclusive insight on special<br>
                        events, new flavors, and products.</p>
                    <div class="pop-letter-field">
                        <input type="email" id="emailPop" name="email" value="" placeholder="Email Address"
                            onblur="if(this.placeholder=='')this.placeholder='Email Address';"
                            onfocus="if(this.placeholder=='Email Address')this.placeholder='';" class="input-03">
                        <input type="hidden" name="action" value="" id="actionValue">
                        <div class="btn-wrap clear-fix">
                            <button type="button" name="action" value="newsletter_subscribe"
                                onclick="newsletterPopupFormAxaj('newsletter_subscribe');"
                                class="btn-news btn-blue left">SIGN UP</button>
                            <button type="button" name="action" value="newsletter_unsubscribe"
                                onclick="newsletterPopupFormAxaj('newsletter_unsubscribe');" class="btn-news  right">NO
                                THANKS</button>
                        </div>
                        <div class="errorMessage" style="clear:both;color:red"></div>
                        <small>By signing up you agree you are 21 &amp; older and accept<br>
                            receiving electronic information by Zomo &amp; it’s partners</small>.
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    @endif
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
@section('js')
    {!! JsValidator::formRequest('App\Http\Requests\HomeRequest', '#wholesale-form') !!}
    {!! JsValidator::formRequest('App\Http\Requests\EmailNewsLetter', '#EmailNewsLetter-form') !!}
    <script src="https://www.google.com/recaptcha/api.js?render=6LdNflwoAAAAAA5C79bAV5nRZqbVT6ntszmWqqV-"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdNflwoAAAAAA5C79bAV5nRZqbVT6ntszmWqqV-', {
                action: 'submit'
            }).
            then(function(token) {
                if (token) {
                    document.getElementById('response').value = token;
                }
            })
        });
    </script>
    <script>
        {{-- $(document).ready(function() { --}}

        {{--    if (document.cookie.indexOf("blocker") != -1) { --}}
        {{--        $(".blocker").hide(); --}}
        {{--    }else{ --}}
        {{--        $(".blocker").show(); --}}

        {{--    } --}}
        {{--    // if (document.cookie.indexOf("blocker") == -1) { --}}
        {{--    //     $(".blocker").show(); --}}
        {{--    // } --}}
        {{-- }); --}}
        {{-- $(".pop-submit").click(function() { --}}
        {{--    let a = $(this).text(); --}}
        {{--    if (a == "Enter") { --}}
        {{--        // var allcookies = document.cookie; --}}
        {{--        var d = new Date(); --}}
        {{--        d.setTime(d.getTime() + (24 * 60 * 60 * 1000)); --}}
        {{--        var expires = "expires=" + d.toGMTString(); --}}
        {{--        document.cookie = "name=blocker;expire='" + expires + "'"; --}}
        {{--        $(".blocker").hide(); --}}
        {{--        $(".Popup").show(); --}}
        {{--    } --}}
        {{-- }); --}}

        {{-- function newsletterPopupFormAxaj(actionType) { --}}
        {{--    // $(".Popup").hide(); --}}
        {{--    var email = jQuery("#emailPop").val(); --}}
        {{--    if (email == "" && actionType == "newsletter_subscribe") { --}}
        {{--        jQuery(".errorMessage").html( --}}
        {{--            "<p>Your email address is required.</p>" --}}
        {{--        ); --}}
        {{--        return false; --}}
        {{--    } else { --}}
        {{--        $("#actionValue").val(actionType); --}}
        {{--        var _selector = jQuery(this); --}}
        {{--        $.ajax({ --}}
        {{--            url: "{{ route('frontend.newsLetter') }}", --}}
        {{--            type: "POST", --}}
        {{--            data: { --}}
        {{--                email: email, --}}
        {{--                actionType: actionType, --}}
        {{--                "_token": "{{ csrf_token() }}", --}}
        {{--            }, --}}
        {{--            beforeSend: function() { --}}
        {{--                jQuery(".pop-inner").prepend( --}}
        {{--                    '<div id="myLoader" class="ajax-loader"></div>' --}}
        {{--                ); --}}
        {{--                $("#myLoader").css({ --}}
        {{--                    height: $("#myLoader").parent().height(), --}}
        {{--                    width: $("#myLoader").parent().width(), --}}
        {{--                }); --}}
        {{--                $("#myLoader").show(); --}}
        {{--            }, --}}
        {{--            complete: function() { --}}
        {{--                jQuery("#myLoader").hide(); --}}
        {{--            }, --}}
        {{--            success: function(response) { --}}
        {{--                $(".Popup").hide(); --}}
        {{--                if (response.status == "unsubscribe") {} else { --}}
        {{--                    swal( --}}
        {{--                        "Thank You!", --}}
        {{--                        "" + response.success_message + "" --}}
        {{--                    ); --}}
        {{--                } --}}
        {{--                window.location.href = "{{ route('frontend.home') }}"; --}}
        {{--            }, --}}
        {{--        }); --}}
        {{--    } --}}
        {{-- } --}}

        $(".btn-black").click(function() {
            var text = $(this).text();
            if (text === "Exit") {
                window.location.replace("https://www.fda.gov/regulatory-information");
            }
        });
    </script>
@endsection
@endsection
