@extends('frontend.layouts.master')
@section('title')
	Home
@endsection
@section('main')

		<div class="owl-carousel owl-theme home-banner">
			<div class="item">
				<img class="dastop-images" src={{ asset('assets/frontend/images/Banner-main-1.webp') }} width="100"
					height="100" alt="dastop-images">
				<img class="tab-images" src={{ asset('assets/frontend/images/banner-images/Banner-main-10241.webp') }}
					width="100" height="100" alt="tab-images">
				<img class="mobile-images" src={{ asset('assets/frontend/images/banner-images/Banner-main-6401.webp') }}
					width="100" height="100" alt="mobile-images">
			</div>
			<div class="item">
				<img class="dastop-images" src={{ asset('assets/frontend/images/Banner-main-2.webp') }} width="100"
					height="100" alt="dastop-images">
				<img class="tab-images" src={{ asset('assets/frontend/images/banner-images/Banner-main-10242.webp') }}
					width="100" height="100" alt="tab-images">
				<img class="mobile-images" src={{ asset('assets/frontend/images/banner-images/Banner-main-6402.webp') }}
					width="100" height="100" alt="mobile-images">
			</div>
			<div class="item">
				<img class="dastop-images" src={{ asset('assets/frontend/images/Banner-main-3.webp') }} width="100"
					height="100" alt="dastop-images">
				<img class="tab-images" src={{ asset('assets/frontend/images/banner-images/Banner-main-10243.webp') }}
					width="100" height="100" alt="tab-images">
				<img class="mobile-images" src={{ asset('assets/frontend/images/banner-images/Banner-main-6403.webp') }}
					width="100" height="100" alt="mobile-images">
			</div>
		</div>

		<div class="product-section reveal">
			<div class="container">
				<h2 class="title-main">PRODUCTS</h2>
				<div class="owl-carousel owl-theme product-slider-in">
					<div class="item">
						<div class="product-box">
							<a href="single-product.html" class="images-box">
								<img src={{ asset('assets/frontend/images/product-01.webp') }} alt="Product 1"
									width="100" height="100">
							</a>
							<a href="single-product.html" class="product-title">ZOMO MAX GRAPE</a>
						</div>
					</div>
					<div class="item">
						<div class="product-box">
							<a href="single-product.html" class="images-box">
								<img src={{ asset('assets/frontend/images/product-02.webp') }} alt="Product 2"
									width="100" height="100">
							</a>
							<a href="single-product.html" class="product-title">ZOMO MAX BLUEBERRY</a>
						</div>
					</div>
					<div class="item">
						<div class="product-box">
							<a href="single-product.html" class="images-box">
								<img src={{ asset('assets/frontend/images/product-03.webp') }} alt="Product 3"
									width="100" height="100">
							</a>
							<a href="single-product.html" class="product-title">ZOMO MAX GRAPEFRUIT TWIST</a>
						</div>
					</div>
					<div class="item">
						<div class="product-box">
							<a href="single-product.html" class="images-box">
								<img src={{ asset('assets/frontend/images/product-01.webp') }} alt="Product 1"
									width="100" height="100">
							</a>
							<a href="single-product.html" class="product-title">ZOMO MAX GRAPE</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="newslatter reveal">
			<div class="container">
				<div class="newslatter-form">
					<p class="title-news">EMAIL NEWLETTER</p>
					<form>
						<label for="Subscribe">Subscribe to our newletter and get notification about ZOMO updates.</label>
						<input type="text" id="Subscribe">
					</form>
				</div>
			</div>
		</div>

		<div class="news-sections">
			<div class="container">
				<h3 class="title-main">news</h3>
				<div class="news-srction-item reveal">
					<div class="news-section-list">
						<div class="images-box">
							<a href="single-news.html" class="hover-bg"><span class="hide-text">hover</span></a>
							<img src={{ asset('assets/frontend/images/news-01.webp') }} alt="News" width="100"
								height="100">
						</div>
						<p>THE NEW PAPER LAUNCH BY ZOMO NATURAL SLIM ARRIVES ON THE MARKET</p>
					</div>
					<div class="news-section-list">
						<div class="images-box">
							<a href="single-news.html" class="hover-bg"><span class="hide-text">hover</span></a>

							<img src={{ asset('assets/frontend/images/news-02.webp') }} alt="News 2" width="100"
								height="100">
						</div>
						<p>FLAVOR OF AMERICA JUST LAUNCHED A REVOLUTIONARY APP</p>
					</div>
					<div class="news-section-list">
						<div class="images-box">
							<a href="singles-new.html" class="hover-bg"><span class="hide-text">hover</span></a>
							<img src={{ asset('assets/frontend/images/news-03.webp') }} alt="News 3" width="100"
								height="100">
						</div>
						<p>SHISHA’S FLAVOR ON YOUR POD!</p>
					</div>
				</div>
				<div class="sew-more-button reveal">
					<a href="single-news.html">SEE MORE <span>></span></a>
				</div>
			</div>
		</div>

		<div class="where-to-buy">
			<div class="container">
				<h4 class="title-main reveal">WHERE TO BUY ZOMO</h4>
				<div class="row d-flex justify-content-center">
					<div class="col-lg-3 col-md-4 col-6 where-to-buy-item reveal">
						<div class="where-to-buy-box">
							<div class="images-box">
								<img src={{ asset('assets/frontend/images/way-to-buy/wtb-1.webp') }} alt="Hookah Shisha"
									width="100" height="100">
							</div>
							<p>Hookah Shisha</p>
							<a href="https://www.hookah-shisha.com/c/shisha-tobacco/brand/zomo" class="visit-store">
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
								Visit Store
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6 where-to-buy-item reveal">
						<div class="where-to-buy-box">
							<div class="images-box">
								<img src={{ asset('assets/frontend/images/way-to-buy/wtb-2.webp') }} alt="5 Star Hookah"
									width="100" height="100">
							</div>
							<p>5 Star Hookah</p>
							<a href="https://5starhookah.com/collections/zomo-tobacco-shisha" class="visit-store">
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
					<div class="col-lg-3 col-md-4 col-6 where-to-buy-item reveal">
						<div class="where-to-buy-box">
							<div class="images-box">
								<img src={{ asset('assets/frontend/images/way-to-buy/wtb-3.webp') }} alt="The Hookah"
									width="100" height="100">
							</div>
							<p>The Hookah</p>
							<a href="https://www.thehookah.com/" class="visit-store">
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
					<div class="col-lg-3 col-md-4 col-6 where-to-buy-item reveal">
						<div class="where-to-buy-box">
							<div class="images-box">
								<img src={{ asset('assets/frontend/images/way-to-buy/wtb-4.webp') }} alt="Texas Hookah"
									width="100" height="100">
							</div>
							<p>Texas Hookah</p>
							<a href="https://www.texashookah.com/" class="visit-store">
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
					<div class="col-lg-3 col-md-4 col-6 where-to-buy-item reveal">
						<div class="where-to-buy-box">
							<div class="images-box">
								<img src={{ asset('assets/frontend/images/way-to-buy/wtb-5.webp') }} alt="Hookah John"
									width="100" height="100">
							</div>
							<p>Hookah John</p>
							<a href="https://hookahjohn.com/collections/zomo-shisha-hookah-tobacco-flavors" class="visit-store">
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
					<div class="col-lg-3 col-md-4 col-6 where-to-buy-item reveal">
						<div class="where-to-buy-box">
							<div class="images-box">
								<img src={{ asset('assets/frontend/images/way-to-buy/wtb-6.webp') }} alt="Hookah Junkie"
									width="100" height="100">
							</div>
							<p>Hookah Junkie</p>
							<a href="https://hookahjunkie.com/collections/zomo-tobacco-hookah-tobacco-shisha" class="visit-store">
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
					<div class="col-lg-3 col-md-4 col-6 where-to-buy-item reveal">
						<div class="where-to-buy-box">
							<div class="images-box">
								<img src={{ asset('assets/frontend/images/way-to-buy/wtb-7.webp') }} alt="Ultimate Junkie"
									width="100" height="100">
							</div>
							<p>Ultimate Junkie</p>
							<a href="#" class="visit-store">
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
					<div class="col-lg-3 col-md-4 col-6 where-to-buy-item reveal">
						<div class="where-to-buy-box">
							<div class="images-box">
								<img src={{ asset('assets/frontend/images/way-to-buy/wtb-8.webp') }} alt="Hookah Heroes"
									width="100" height="100">
							</div>
							<p>Hookah Heroes</p>
							<a href="#" class="visit-store">
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
					<div class="col-lg-3 col-md-4 col-6 where-to-buy-item reveal">
						<div class="where-to-buy-box">
							<div class="images-box">
								<img src={{ asset('assets/frontend/images/way-to-buy/wtb-9.webp') }}
									alt="Hookah Wholesalers" width="100" height="100">
							</div>
							<p>Hookah Wholesalers</p>
							<a href="#" class="visit-store">
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
					<div class="col-lg-3 col-md-4 col-6 where-to-buy-item reveal">
						<div class="where-to-buy-box">
							<div class="images-box">
								<img src={{ asset('assets/frontend/images/way-to-buy/wtb-10.webp') }} alt="Hookah Company"
									width="100" height="100">
							</div>
							<p>Hookah Company</p>
							<a href="#" class="visit-store">
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
		</div>

		<!-- <div class="contact-us-section">
			<div class="container">
				<h5 class="title-main reveal">CONTACT US</h5>
				<p class="sub-text reveal">We would like to hear <b>about you </b>just send us a message!</p>
				<div class="content-infomation reveal">
					<div class="contact-form">
						<p>LETS GET IN TOUCH!</p>
						<form class="form-contact-us">
							<input type="text" placeholder="Email">
							<input type="text" placeholder="Subject">
							<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<button type="submit">Send Message</button>
						</form>
					</div>
					<div class="map-infomation">
						<div class="image-location">
							<div class="icon">
								<img src={{ asset('assets/frontend/images/location-icon.webp') }} alt="location"
									width="100" height="100">
							</div>
							<p>Location</p>
						</div>
						<div class="map-box">
							<iframe title="content"
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2141.127457838495!2d-54.6431055207775!3d-25.507287348071166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f68571c6f023c1%3A0x21c1ba001e986ac5!2sFlavors%20of%20Americas%20S.A.!5e0!3m2!1spt-BR!2spy!4v1572973947331!5m2!1spt-BR!2spy"
								width="600" height="350" frameborder="0" style="border: 0px; pointer-events: none;"
								allowfullscreen=""></iframe>
						</div>
					</div>
				</div>
			</div>
		</div> -->

  <div class="footer-contact reveal">
            <div class="infomation-footer-contact container">
                <div class="footer-contact-box">
                    <p class="title-in">{{ config("constants.FOOTER_TITLE")}}</p>
                    <p>{{ config("constants.FOOTER_ADD")}}</p>
                </div>
                <div class="footer-contact-box">
                    <p class="title-in">{{ config("constants.FOOTER_TITLE1")}}</p>
                    <a href="tel:18669523331">{{ config("constants.FOOTER_TELEPHONE")}}</a>
                    <a href="mailto:sales@zomousa.com">{{ config("constants.FOOTER_GMAIL")}}</a>
                </div>
            </div>
        </div>		@section('js')
{{--			<script>--}}
{{--				// $(".nav-menu .menu .menu-item a").click(function(){--}}
{{--				//     $(".nav-menu .menu .menu-item").removeClass("active");--}}
{{--				//     $(this).addClass("active");--}}
{{--				// });--}}
{{--				--}}
{{--				  $('.pop-submit').click(function(){--}}
{{--					var text = $(this).text();--}}
{{--					if(text === "Enter")--}}
{{--					{--}}
{{--						  if (!sessionStorage.getItem('shown-modal')){--}}
{{--								$(".modal_bouncer").hide();--}}
{{--								sessionStorage.setItem('shown-modal', 'true');--}}

{{--						  }--}}
{{--					}--}}
{{--				});  --}}
{{--				$(".btn-black").click(function(){--}}
{{--					var text = $(this).text();--}}
{{--					if(text === "Exit")--}}
{{--					{--}}
{{--						window.location.replace("https://www.fda.gov/regulatory-information");--}}
{{--					}--}}
{{--				})--}}
{{--			</script>--}}
		@endsection
@endsection
