<?php
$categorias = resolve('category-repo')->getCategory();
?>
<footer class="footer reveal">
    <div class="container">
        <div class="footer-item">
            <div class="footer-list">
                <a href="#" class="footer-logo">
                    <img src={{ asset('assets/frontend/images/logo-footer.webp') }} alt="footer logo" width="100"
                        height="100">
                </a>
                <div class="nav-footer-link">
                    <a href="{{ route('frontend.news') }}">News</a>
                    <a href="{{ route('frontend.contact') }}">contact us</a>
                    <a href="{{ route('frontend.wholesale') }}">WHOLESALE</a>
                    <a href="{{ route('frontend.faqs') }}">FAQS</a>
                </div>

                <div class="nav-footer-link">
                    <h3 style="color:white">FLAVORS</h3>
                        @foreach ($categorias as $value)
                            <a href="{{ route('frontend.flavors', $value->slug) }}">{{ $value->name }}</a>
                        @endforeach
                </div>


                <div class="nav-footer-link">
                    <h3 style="color:white">PRODUCT</h1>
                        <a href="{{ route('frontend.zomopaper') }}">Zomo Paper</a>
                        <a href="{{ route('frontend.charcol') }}">Zomo Charcoal</a>
                        <a href="{{ route('frontend.aluminumFoil') }}">Aluminium Foil</a>
                        <a href="{{ route('frontend.shishaHose') }}">Shisha Hose</a>
                        <a href="{{ route('frontend.zomo.hookah') }}">Zomo Zoom Hookah</a>
                </div>


            </div>
        </div>

        <div class="follow-us">
            <p>Follow us</p>
            <div class="icon-list">
                <a href="https://m.facebook.com/zomoamerica/" class="icon">
                    <span class="hide-text">icon</span>
                    <svg width="15" height="24" viewBox="0 0 15 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.0847 13.5L13.7513 9.15656H9.58362V6.33797C9.58362 5.14969 10.1658 3.99141 12.0324 3.99141H13.9271V0.293438C13.9271 0.293438 12.2077 0 10.5638 0C7.13159 0 4.88815 2.08031 4.88815 5.84625V9.15656H1.073V13.5H4.88815V24H9.58362V13.5H13.0847Z"
                            fill="white" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/zomoamerica/reels/" class="icon">
                    <span class="hide-text">icon</span>
                    <svg width="21" height="24" viewBox="0 0 21 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_32_163)">
                            <path
                                d="M10.5047 6.60928C7.52341 6.60928 5.11873 9.01396 5.11873 11.9952C5.11873 14.9765 7.52341 17.3812 10.5047 17.3812C13.4859 17.3812 15.8906 14.9765 15.8906 11.9952C15.8906 9.01396 13.4859 6.60928 10.5047 6.60928ZM10.5047 15.4968C8.5781 15.4968 7.0031 13.9265 7.0031 11.9952C7.0031 10.064 8.57341 8.49365 10.5047 8.49365C12.4359 8.49365 14.0062 10.064 14.0062 11.9952C14.0062 13.9265 12.4312 15.4968 10.5047 15.4968ZM17.3672 6.38896C17.3672 7.0874 16.8047 7.64522 16.1109 7.64522C15.4125 7.64522 14.8547 7.08271 14.8547 6.38896C14.8547 5.69521 15.4172 5.13271 16.1109 5.13271C16.8047 5.13271 17.3672 5.69521 17.3672 6.38896ZM20.9344 7.66396C20.8547 5.98115 20.4703 4.49053 19.2375 3.2624C18.0094 2.03428 16.5187 1.6499 14.8359 1.56553C13.1015 1.46709 7.9031 1.46709 6.16873 1.56553C4.4906 1.64521 2.99998 2.02959 1.76716 3.25771C0.534351 4.48584 0.154663 5.97646 0.0702881 7.65928C-0.0281494 9.39365 -0.0281494 14.5921 0.0702881 16.3265C0.149976 18.0093 0.534351 19.4999 1.76716 20.728C2.99998 21.9562 4.48591 22.3405 6.16873 22.4249C7.9031 22.5233 13.1015 22.5233 14.8359 22.4249C16.5187 22.3452 18.0094 21.9608 19.2375 20.728C20.4656 19.4999 20.85 18.0093 20.9344 16.3265C21.0328 14.5921 21.0328 9.39834 20.9344 7.66396ZM18.6937 18.1874C18.3281 19.1062 17.6203 19.814 16.6969 20.1843C15.314 20.7327 12.0328 20.6062 10.5047 20.6062C8.97654 20.6062 5.6906 20.728 4.31248 20.1843C3.39373 19.8187 2.68591 19.1108 2.3156 18.1874C1.76716 16.8046 1.89373 13.5233 1.89373 11.9952C1.89373 10.4671 1.77185 7.18115 2.3156 5.80303C2.68123 4.88428 3.38904 4.17646 4.31248 3.80615C5.69529 3.25771 8.97654 3.38428 10.5047 3.38428C12.0328 3.38428 15.3187 3.2624 16.6969 3.80615C17.6156 4.17178 18.3234 4.87959 18.6937 5.80303C19.2422 7.18584 19.1156 10.4671 19.1156 11.9952C19.1156 13.5233 19.2422 16.8093 18.6937 18.1874Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_32_163">
                                <rect width="21" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@ZomoAmerica" class="icon">
                    <span class="hide-text">icon</span>
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.0549 11.4312H4.48193C2.00659 11.4312 0 13.4397 0 15.9146V19.517C0 21.9919 2.00659 24 4.48193 24H20.0549C22.5297 24 24.5368 21.9919 24.5368 19.517V15.9146C24.5368 13.4397 22.5297 11.4312 20.0549 11.4312ZM7.7537 14.2357H6.30592V21.4296H4.90716V14.2357H3.46037V13.012H7.7537V14.2357ZM11.8434 21.4296H10.6027V20.7492C10.3721 21.0008 10.1345 21.1929 9.88635 21.3225C9.63822 21.4576 9.39859 21.5206 9.16546 21.5206C8.87731 21.5206 8.66319 21.4291 8.51661 21.243C8.37253 21.0574 8.299 20.7822 8.299 20.4105V15.2192H9.53967V19.9833C9.53967 20.1304 9.56718 20.2359 9.61671 20.3015C9.67024 20.369 9.75528 20.4 9.87185 20.4C9.9619 20.4 10.078 20.357 10.2175 20.2699C10.3581 20.1819 10.4862 20.0718 10.6027 19.9358V15.2187H11.8434V21.4296ZM16.3479 20.1474C16.3479 20.5861 16.2503 20.9233 16.0557 21.1584C15.8621 21.3935 15.5789 21.5091 15.2122 21.5091C14.9681 21.5091 14.751 21.4651 14.5624 21.374C14.3728 21.284 14.1942 21.1454 14.0316 20.9533V21.4291H12.7759V13.012H14.0316V15.723C14.1997 15.5354 14.3773 15.3898 14.5629 15.2922C14.7525 15.1927 14.9431 15.1447 15.1362 15.1447C15.5289 15.1447 15.8281 15.2757 16.0352 15.5404C16.2433 15.805 16.3469 16.1927 16.3469 16.701V20.1474H16.3479ZM20.6517 18.474H18.2774V19.6441C18.2774 19.9703 18.3174 20.1974 18.3985 20.324C18.4815 20.451 18.6211 20.5131 18.8197 20.5131C19.0258 20.5131 19.1684 20.4595 19.2514 20.3525C19.3315 20.2444 19.3745 20.0093 19.3745 19.6441V19.3614H20.6517V19.6801C20.6517 20.3165 20.4971 20.7962 20.1834 21.1199C19.8748 21.4406 19.4095 21.5997 18.7912 21.5997C18.2344 21.5997 17.7956 21.4301 17.477 21.0889C17.1593 20.7497 16.9972 20.2789 16.9972 19.6806V16.8911C16.9972 16.3543 17.1743 15.9126 17.526 15.5739C17.8767 15.2352 18.3284 15.0661 18.8842 15.0661C19.453 15.0661 19.8898 15.2227 20.1944 15.5369C20.4991 15.8515 20.6517 16.3018 20.6517 16.8906V18.474Z"
                            fill="white" />
                        <path
                            d="M18.8316 16.1519C18.6335 16.1519 18.4925 16.2074 18.4064 16.3234C18.3184 16.4325 18.2773 16.6191 18.2773 16.8798V17.5076H19.3744V16.8798C19.3744 16.6191 19.3304 16.432 19.2434 16.3234C19.1598 16.2079 19.0202 16.1519 18.8316 16.1519Z"
                            fill="white" />
                        <path
                            d="M14.5509 16.1306C14.4628 16.1306 14.3738 16.1501 14.2882 16.1906C14.2012 16.2302 14.1162 16.2957 14.0321 16.3808V20.2493C14.1317 20.3494 14.2302 20.4264 14.3263 20.4705C14.4218 20.513 14.5209 20.537 14.6264 20.537C14.779 20.537 14.8901 20.493 14.9616 20.4039C15.0321 20.3159 15.0682 20.1753 15.0682 19.9767V16.7695C15.0682 16.5583 15.0261 16.4003 14.9381 16.2917C14.847 16.1846 14.718 16.1306 14.5509 16.1306Z"
                            fill="white" />
                        <path
                            d="M6.52104 9.27402H8.09389V5.42694L9.92538 0H8.32651L7.35299 3.70701H7.25393L6.23188 0H4.64752L6.52104 5.60003V9.27402Z"
                            fill="white" />
                        <path
                            d="M12.0565 9.44665C12.6918 9.44665 13.1901 9.28006 13.5533 8.94688C13.914 8.61219 14.0946 8.15545 14.0946 7.57013V4.03622C14.0946 3.51543 13.91 3.0867 13.5423 2.75602C13.1721 2.42634 12.6978 2.26025 12.1195 2.26025C11.4842 2.26025 10.9784 2.41734 10.6022 2.73101C10.227 3.04468 10.0384 3.46541 10.0384 3.99719V7.54312C10.0384 8.12493 10.222 8.58518 10.5887 8.93037C10.9554 9.27405 11.4457 9.44665 12.0565 9.44665ZM11.4772 3.94517C11.4772 3.79659 11.5307 3.67652 11.6353 3.58247C11.7438 3.49042 11.8814 3.4459 12.0525 3.4459C12.2371 3.4459 12.3867 3.49042 12.5007 3.58247C12.6143 3.67652 12.6708 3.79659 12.6708 3.94517V7.67269C12.6708 7.85529 12.6153 8.00036 12.5027 8.10492C12.3912 8.20998 12.2411 8.26151 12.0525 8.26151C11.8679 8.26151 11.7253 8.21148 11.6253 8.10642C11.5267 8.00386 11.4767 7.85979 11.4767 7.67219L11.4772 3.94517Z"
                            fill="white" />
                        <path
                            d="M16.2043 9.37411C16.4669 9.37411 16.7366 9.29907 17.0142 9.15499C17.2949 9.00891 17.5635 8.7953 17.8192 8.51664V9.27456H19.2164V2.43335H17.8192V7.62616C17.6891 7.77474 17.5445 7.89681 17.3894 7.99386C17.2313 8.08991 17.1013 8.13794 16.9987 8.13794C16.8676 8.13794 16.7711 8.10192 16.7146 8.02738C16.657 7.95584 16.6245 7.83878 16.6245 7.67819V2.43335H15.2292V8.15095C15.2292 8.55867 15.3113 8.86333 15.4734 9.06544C15.6385 9.27055 15.8796 9.37411 16.2043 9.37411Z"
                            fill="white" />
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/zomoamerica/" class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="25" height="24">
                        <rect width="24" height="24" fill="#FFFFFF" rx="2"/>
                        <path d="M20.57 2H3.43C2.63 2 2 2.63 2 3.43v17.14C2 21.37 2.63 22 3.43 22h17.14c.8 0 1.43-.63 1.43-1.43V3.43C22 3.63 21.37 3 20.57 3zM8 19H5V9h3v10zM6.5 7.5a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm10 11h-3v-5.67c0-1.28-.51-2.33-1.5-2.33s-1.5 1.05-1.5 2.33V18H7V9h3v1.56C9 10.53 10.12 9 12 9s3 1.53 3 3.56V18z" fill="#1F0647"/>
                    </svg>
                </a>
                <a href="https://www.pinterest.com/zomoamerica/" class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFFFF" class="bi bi-pinterest" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0"/>
                    </svg>
                </a>
                <a href="https://www.twitter.com/zomoamerica" class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFFFF" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="copy-right">
            <p>{{ config('constants.COPYRIGHT') }}</p>
        </div>
    </div>
</footer>

<div class="warning">
    <div class="container">
        <p><span>WARNING:</span>{{ config('constants.FOOTER_WARNING') }}</p>
    </div>
</div>
@if (url()->current() == 'http://lc.zomoamerica.com')
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
