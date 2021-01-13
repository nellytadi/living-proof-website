@extends('layouts.layout')
@section('content')
			<main class="main">
				<!-- promo start-->
				<section class="promo">
					<div class="promo-slider">
						<div class="promo-slider__item promo-slider__item--style-1">
							<picture>
								<source srcset="{{asset('assets/img/promo_1.jpg')}}" media="(min-width: 835px)"/>
								<source srcset="{{asset('assets/img/promo_1.jpg')}}" media="(min-width: 376px)"/><img class="img--bg lazy" data-src="{{asset('assets/img/promo_1.jpg')}}" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="align-container">
										<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title">
														<span>We assist women, children </span> <br>
														<span>and the vulnerable.</span>
													</h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">We are a gender base organization for women (married, unmarried, widows), children and the vulnerable in the society at large</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="{{url('/about')}}">Learn more</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="promo-slider__item promo-slider__item--style-2">
							<picture>
								<source srcset="{{asset('assets/img/promo_1.jpg')}}" media="(min-width: 835px)"/>
								<source srcset="{{asset('assets/img/promo_1.jpg')}}" media="(min-width: 376px)"/><img class="img--bg lazy" data-src="{{asset('assets/img/promo_1.jpg')}}" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-xl-7">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>We are committed to </span><br/><span> changing lives.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">We are raising awareness amongst women, girls and the vulnerable all over the country and the diaspora at large.</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="{{url('/about')}}">Learn more</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 
						<div class="promo-slider__item promo-slider__item--style-3">
							<picture>
								<source srcset="img/promo_3.jpg" media="(min-width: 835px)"/>
								<source srcset="img/834promo_3.jpg" media="(min-width: 376px)"/><img class="img--bg lazy" data-src="img/375promo_3.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-xl-8 offset-xl-2">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Helpo Volounteers</span><br/><span>Around the world.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<!-- promo socials start-->
					<ul class="promo-socials">
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
					<!-- promo socials end-->
					<!-- promo pannel start-->
					<div class="promo-pannel"><a class="anchor promo-pannel__anchor" href="#about"> <span>Scroll Down</span></a>
						<div class="promo-pannel__video">
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<img class="img--bg lazy" data-src="{{asset('assets/img/video-cover.jpg')}}" alt="image"/>
							<a class="video-trigger" href="https://www.youtube.com/watch?v=hJetkNPhPPQ"><span>Watch our video</span><i class="fa fa-play" aria-hidden="true"></i></a>
						</div>
						<div class="promo-pannel__phones">
							<p class="promo-pannel__title">Phone numbers</p><a class="promo-pannel__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="promo-pannel__link" href="tel:+18009756511">+ 1800 - 975 65 11</a>
						</div>
						<div class="promo-pannel__email">
							<p class="promo-pannel__title">Email</p><a class="promo-pannel__link" href="mailto:support@helpo.org">support@helpo.org</a>
						</div>
					</div>
					<!-- promo pannel end-->
					<!-- slider nav start-->
					<div class="slider__nav slider__nav--promo">
						<div class="promo-slider__count"></div>
						<div class="slider__arrows">
							<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
							</div>
							<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<!-- slider nav end-->
				</section>
				<!-- promo end-->
				<!-- about us start-->
				<section class="section about-us" id="about">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
									<h2 class="heading__title"><span>Help is Our</span> <span>Main Goal</span></h2>
								</div>
								<p><strong>Living proof  women Foundation International is a non governmental organization (NGO ) registered with corporate Affairs Commission  and other relevant agencies.</strong></p>
								<p>It is a gender base organization for women( married, unmarried, widows, ) children and the vulnerable in the society at large.</p>
								<p>Living Proof women Foundation was founded by <b>Mrs Julie Onovwiona</b> a woman who has so much passion for women as a result of her poor parental  upbringing.</p><a class="button button--primary" href="{{url('/about')}}">More About</a>
							</div>
							<div class="col-lg-6 col-xl-5 offset-xl-1">
								<div class="info-box"><img class="img--layout lazy" data-src="{{asset('assets/img/about_layout.png')}}" alt="img"/><img class="img--bg lazy" data-src="{{asset('assets/img/about-us.jpg')}}" alt="img"/>
									<h4 class="info-box__title">You too can become a member</h4>
									<p>Living proof women foundation international  membership is opened to women who are ready to give back to the society by helping the vulnerable, needy, widows etc</p><a class="info-box__link" href="{{url('/become-a-member')}}">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- about us end-->
					<!-- statistics start-->
				<section class="section statistics no-padding-top">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">What we Do</span>
									<h2 class="heading__title no-margin-bottom"><span>Our</span> <span>Statistics</span></h2>
								</div>
							</div>
						</div>
						<div class="row offset-margin">
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout lazy" data-src="{{asset('assets/img/icon_1.png')}}" alt="img"/><span class="js-counter">2</span></div>
									<div class="icon-item__text">
										<p>Years of Experience</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout lazy" data-src="{{asset('assets/img/icon_4.png')}}" alt="img"/><span class="js-counter">15 </span></div>
									<div class="icon-item__text">
										<p>Volunteers</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout lazy" data-src="{{asset('assets/img/icon_3.png')}}" alt="img"/><span class="js-counter">500 </span><span>+</span></div>
									<div class="icon-item__text">
										<p>People Helped</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout lazy" data-src="{{asset('assets/img/icon_4.png')}}" alt="img"/><span class="js-counter">1 </span><span>M+</span></div>
									<div class="icon-item__text">
										<p>Naira donated</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- statistics end-->
				

<style type="text/css">.causes-item--primary .causes-item__badge {
	position: absolute;
	left: 15px;
	top: -15px;
	z-index: 2;
	background: #efc940;

}</style>
					<!-- causes inner start-->
				<section class="section causes-inner">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">What have we done?</span>
									<h2 class="heading__title no-margin-bottom"><span>Our</span> <span>Impact so far</span></h2>
								</div>
							</div>
						</div>
						
						<div class="row offset-margin">
							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> Business Empowerment</h6>
											<p>In March 2019, six widows from GWAGWAKADA MASAKA were empowered with cash to start their businesses.</p>
										</div>
										<div class="causes-item__img">
											<a href="{{url('/gallery')}}"><div class="causes-item__badge">View gallery</div></a><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-14.jpg')}}" alt="img"/>
										</div>
									
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title">First Anniversary Event</h6>
											<p>At the first anniversary held in July 2019, an outreach was done at Kuje where various items viz clothing, food items, cash donations were given out to the vulnerable</p>
										</div>
										<div class="causes-item__img">
											<a href="{{url('/gallery')}}"><div class="causes-item__badge">View gallery</div></a><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-6.jpg')}}" alt="img"/>
										</div>
									
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title">COVID 19 Assistance</h6>
											<p>During the lock down of 2020 as a result of COVID 19, the Foundation in June 2020 distributed food items worth one million, six hundred thousand naira worth of food items to various communities in FCT Abuja, Nigeria.</p>
										</div>
										<div class="causes-item__img">
											<a href="{{url('/gallery')}}"><div class="causes-item__badge">View gallery</div></a><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-1.jpg')}}" alt="img"/>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title">Second Year Anniversary celebration</h6>
											<p>The second year anniversary celebration held in October 2020.</p>
										</div>
										<div class="causes-item__img">
											<a href="{{url('/gallery')}}"><div class="causes-item__badge">View gallery</div></a><img class="img--bg lazy" data-src="{{asset('assets/img/second-anniversary/gallery-1.jpg')}}" alt="img"/>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title">Widows empowerment</h6>
											<p>The last program for the widows and the vulnerable was held on the 29TH of December 2020. To the glory of food items , clothing, cash was given to the need with school bags distributed to the children</p>
										</div>
										<div class="causes-item__img">
											<a href="{{url('/gallery')}}"><div class="causes-item__badge">View gallery</div></a><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-15.jpg')}}" alt="img"/>
										</div>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</section>
				<!-- causes inner end-->


		@include('includes.partners')
		
				
			
				
				
			</main>
			@endsection('body')