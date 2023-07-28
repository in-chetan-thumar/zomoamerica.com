@extends('frontend.layouts.master')
@section('title')
    Product
@endsection
@section('css')
    <style>
        .inner-caption {
            position: absolute;
            font-family: 'gotham_boldregular';
            padding-left: 30px;
            left: 0px;
            margin-left: 0px;
            top: 50%;
            transform: translate(0, -50%);
        }

        .text-white {
            padding-left: 40px;
            font-weight: 400;
            font-style: unset;
            font-size: 30px;
        }


        figure>img {
            width: 10%;
        }

        .row>.col-sm-6 {
            padding: 20px 30px;
        }
    </style>
@endsection


@section('main')

    
        <div class="container">
            <div class="Wholesalers-wrap">
                <article style="padding:20px 20px">
                    <h2>WHERE TO BUY ZOMO</h2>
                    <p>We at Zomo America are constantly looking to partner with exclusive, licensed distributors in all 50
                        states. We provide comprehensive distribution and marketing packages that will benefit both our
                        bottom
                        lines. If you believe your business is situated to join one of the fastest-growing Hookah-Tobacco
                        manufacturers worldwide, please contact us for more information. Please submit your wholesale
                        inquiry
                        form to the “https://www.zomoamerica.com/wholesale” and one of our distribution management team
                        members
                        will contact you. We can also be reached directly at <a
                            href="mailto:info@zomoamerica.com">info@zomoamerica.com</a>.</p>
                </article>
                <article style="padding:20px 20px">
                    <h3>Online Distributor</h3>
                </article>
                <div class="row p-3">
                    <div class="col">
                        <figure>
                            <a href="https://www.hookah-shisha.com/c-2840-zomo-hookah-tobacco-shisha.html" target="_blank">
                                <img src="https://www.zomoamerica.com/assets/upload/store/original/1550656023-1857590545img-buy-01.jpg"
                                    alt="">
                            </a>
                        </figure>
                        <h3>HOOKAH-SHISHA</h3>
                        <a href="https://www.hookah-shisha.com/c-2840-zomo-hookah-tobacco-shisha.html" target="_blank">Visit
                            Store</a>
                    </div>
                    <div class="col">
                        <figure>
                            <a href="https://5starhookah.com/collections/zomo-tobacco-shisha" target="_blank">
                                <img src="https://www.zomoamerica.com/assets/upload/store/original/1550899331-13652209355 STAR HOOKAH.jpg"
                                    alt="">
                            </a>
                        </figure>
                        <h3>5 STAR HOOKAH</h3>
                        <a href="https://5starhookah.com/collections/zomo-tobacco-shisha" target="_blank">Visit
                            Store</a>
                    </div>
                    <div class="col">
                        <figure>
                            <a href="https://hookahjohn.com/collections/zomo-hookah-tobacco" target="_blank">
                                <img src="https://www.zomoamerica.com/assets/upload/store/original/1550899472-989196109HOOKAH JOHN.jpg"
                                    alt="">
                            </a>
                        </figure>
                        <h3>HOOKAH JOHN</h3>
                        <a href="https://hookahjohn.com/collections/zomo-hookah-tobacco" target="_blank">Visit Store</a>
                    </div>
                    <div class="col">
                        <figure>
                            <a href="https://hookahjunkie.com/collections/zomo-tobacco-hookah-tobacco-shisha"
                                target="_blank">
                                <img src="https://www.zomoamerica.com/assets/upload/store/original/1550899494-1135957839HOOKAH JUNKIE.jpg"
                                    alt="">
                            </a>
                        </figure>
                        <h3>HOOKAH JUNKIE</h3>
                        <a href="https://hookahjunkie.com/collections/zomo-tobacco-hookah-tobacco-shisha"
                            target="_blank">Visit
                            Store</a>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-sm-3">
                        <figure>
                            <a href="http://www.narahookah.com/" target="_blank">
                                <img src="https://www.zomoamerica.com/assets/upload/store/original/1553666147-11890377751550899472-989196109HOOKAH JOHN.jpg"
                                    alt="">
                            </a>
                        </figure>
                        <h3>Nara Premium</h3>
                        <a href="http://www.narahookah.com/" target="_blank">Visit Store</a>
                    </div>
                    <div class="col-sm-3">
                        <figure>
                            <a href="https://iconhookah.com/collections/zomo-shisha-hookah-tobacco?page=1" target="_blank">
                                <img src="https://www.zomoamerica.com/assets/upload/store/original/1594636243-1024165316253X255.jpg"
                                    alt="">
                            </a>
                        </figure>
                        <h3>ICON HOOKAH</h3>
                        <a href="https://iconhookah.com/collections/zomo-shisha-hookah-tobacco?page=1" target="_blank">Visit
                            Store</a>
                    </div>
                </div>
                <article style="padding:20px 20px">
                    <h3>Authorized State Distributor</h3>
                </article>
                <div class="row">
                    <div class="col-sm-6">
                        <h3>NEVADA</h3>
                        <h2>VAPE 702 </h2>
                        Location: Las Vegas <br>
                        Address: 6000 S.EASTERN AVENUE UNIT #4C LAS VEGAS NV 89119 <br>
                        Contact:702-683-0901
                    </div>
                    <div class="col-sm-6">
                        <h3>NEW JERSEY</h3>
                        <h2>NARA PREMIUM </h2>
                        Location: Paterson <br>
                        Address: 1076 Main St B, Paterson, NJ 07503 <br>
                        Contact:(973) 925-5991
                    </div>
                    <div class="col-sm-6">
                        <h3>CALIFORNIA</h3>
                        <h2>SAHARA HOOKAH </h2>
                        Location: Sacramento <br>
                        Address: 1309 N Market Blvd Ste 200, Sacramento, California 95834 <br>
                        Contact:(916) 928-1800
                    </div>
                    <div class="col-sm-6">
                        <h3>MISSOURI</h3>
                        <h2>UNITED WHOLESALER </h2>
                        Location: Florissant <br>
                        Address: 760 S New Florissant Rd, Florissant, MO 63031 <br>
                        Contact:(314) 295-3538
                    </div>
                    <div class="col-sm-6">
                        <h3>New Jersey</h3>
                        <h2>Hookah Paradise </h2>
                        Location: Clifton <br>
                        Address: 1219 Main Avenue, Clifton, NJ 07011 <br>
                        Contact:(973) 546-6000
                    </div>
                    <div class="col-sm-6">
                        <h3>PENNSYLVANIA</h3>
                        <h2>NARA PREMIUM </h2>
                        Location: Whitehall <br>
                        Address: 2242 MacArthur Rd, Whitehall, PA 18052 <br>
                        Contact:(610) 351-3233
                    </div>
                    <div class="col-sm-6">
                        <h3>Florida</h3>
                        <h2>Blaze-N-Puff </h2>
                        Location: Pompano Beach <br>
                        Address: 3105 W. Atlantic Road Pompano Beach, FL 33069 <br>
                        Contact:(954) 586-4335
                    </div>
                    <div class="col-sm-6">
                        <h3>Rhode Island</h3>
                        <h2>HW Wholesalers LLC </h2>
                        Location: Providence <br>
                        Address: 25 Pontiac Ave Providence, RI 02907 <br>
                        Contact:(401) 588-9877
                    </div>
                    <div class="col-sm-6">
                        <h3>Georgia</h3>
                        <h2>Blaze N Puff </h2>
                        Location: GA <br>
                        Address: Georgia, GA <br>
                        Contact:Saleh@blazenpuff.com
                    </div>
                    <article class="col-sm-6">
                        <h3>International Distribution</h3>
                        <a href="https://www.zomoofficial.com/en/buy-zomo/" target="_blank">
                            <h2>Visit Store
                            </h2>
                        </a>
                    </article>
                    <a href="https://www.zomoofficial.com/en/buy-zomo/" target="_blank">
                        <div class="clear"></div>
                    </a>
                </div>
            </div>
        </div>
@endsection
