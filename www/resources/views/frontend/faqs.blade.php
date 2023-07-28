@extends('frontend.layouts.master')
@section('title')
    
@endsection


@section('main')

        <div class="btcm">
            <div class="container">
                <div class="breadcrumbs d-flex align-items-center">
                    <a href="{{ route('frontend.home') }}">Home</a>
                    <span> » </span>
                    <span class="breadcrumb_last" aria-current="page">Faqs</span>
                </div>
            </div>
        </div>
        <div class="new-container">
            <div class="news-list">
                <p class="content-title">Faqs</p>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How can I buy Zomo products?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <article>Zomo is building distributors that sell both wholesale and retail in the United States.
                                Find the nearest one to you by sending Zomo a message on our social networks.</article>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How can I get Zomo to sponsor my channel? </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <article>Zomo does not sponsor YouTube or Instagram channels, but we have a big heart and there
                                is space in it for everyone. That’s why we always do giveaways and distribute special perks
                                and presents on our pages to the fans who follow and interact with us. Keep an eye on Zomo.
                                Our team is always on and ready to make your day!</article>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How long does it take for the new products to hit the market? </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <article>As soon as there is a launching event or official announcement on Zomo’s social
                                networks, the new product will be packed and ready to hit the market in about 20 days.
                                That’s how long it takes for the supply chain to hit every shop in the whole country. So,
                                keep in touch with your favorite tobacco shop and ask for Zomo!</article>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How do I get to know about what is coming?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <article>Zomo has its pages on the social networks, in which we talk about everything that is
                                happening in the Zomo world. To know more about what is coming, follow us on Instagram,
                                Twitter, Facebook, and Subscribe to our Youtube channel!</article>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How can I file a complaint? </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <article>Our customer service is always available to help you. In case you need anything, do not
                                hesitate to get in touch via chat on Facebook, Instagram or send us an email:
                                info@zomoamerica.com. We work business hours, from Monday to Friday 10AM to 6PM. If we do
                                not answer you immediately, we will be answering as soon as possible, on the next business
                                day.</article>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>

@endsection
