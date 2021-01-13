@extends('layouts.layout')
@section('content')
			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="{{asset('assets/img/about.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('assets/img/about.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Get to know us</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Living Proof</span>
										<h1 class="promo-primary__title"><span>About</span><br/><span>Organization</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- about-us start-->
				<section class="section about-us">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-xl-5">
								<div class="img-box"><img class="img--layout" src="{{asset('assets/img/about_layout-reverse.png')}}" alt="img"/>
									<div class="img-box__img"><img class="img--bg" src="{{asset('assets/img/about-us.jpg')}}" alt="img"/></div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 offset-xl-1">
								<div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
									<h2 class="heading__title"><span>Helping is our</span> <span>Main Goal</span></h2>
								</div>
								<p><strong>Living proof  women Foundation International is a non governmental organization (NGO ) registered with corporate Affairs Commission  and other relevant agencies</strong></p>
								<p>It is a gender base organization for women (married, unmarried, widows), children and the vulnerable in the society at large</p>
								<p>Living Proof women Foundation was founded by<b> Mrs Julie Onovwiona</b> a woman who has so much passion for women as a result of her poor parental  upbringing.</p>
								
							</div>
						</div>
					</div>
				</section>
				<!-- about-us end-->
				<!-- about us style-2 start-->
				<section class="section about-us about-us--style-2 no-padding-top">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h4 class="about-us__subtitle">As a little child she saw how and what women and young girls go through in the society which made her to be doggedly determined to strive for success despite all odds.</h4>
								
								<p>This is all she cares to campaign about to whosoever care to listen that EVERY WOMAN CAN SUCCED DESPITE ALL ODDS.
								</p>
								<p>The foundation is aimed at raising a total woman despite who  she is : Married, Unmanned, Separated, Divorced, Single mothers, Widows etc.</p>
								<p>
								Through her enlightenment programs and campaigns Mrs Julie Onovwiona  has been able  to change the mind sets of so many women that the woman can succed despite all kinds of oppression she may have gone through.</p>
							</div>
							<div class="col-lg-6 col-xl-5 offset-xl-1">
								<div class="about-us__text-aside">The inspiration</div>
							</div>
						</div>
					</div>
				</section>
				<!-- about us style-2 end-->
				<!-- about us style-2 start-->
				<section class="section about-us about-us--style-2 no-padding-top">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-xl-5 offset-xl-1">
								<div class="about-us__text-aside">Our Mission</div>
							</div>
							<div class="col-lg-6">
								<h4 class="about-us__subtitle">Aims and Objectives</h4>
								
								<p>To work for women economic independence through Entrepreneurship training and programs.</p>
								<p>To support women and girls  to develop their mindset against all limitations and challenges faced by women as a result of gender discrimination.</p>
								<p>To campaign and advocate for the elimination of all discrimination against women , girl child and the vulnerables.</p>
								<p>To organize and reorganize business and Entrepreneurship training  to be able to bring alignment, equality, awakening  to the mind of the woman so as to bridge the gap of inequality in the society
								</p>
								
							</div>
							
						</div>
					</div>
				</section>
				<!-- about us style-2 end-->
			
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
									<div class="icon-item__img"><img class="img--layout" src="{{asset('assets/img/icon_1.png')}}" alt="img"/><span class="js-counter">2</span></div>
									<div class="icon-item__text">
										<p>Years of Experience</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="{{asset('assets/img/icon_4.png')}}" alt="img"/><span class="js-counter">15 </span></div>
									<div class="icon-item__text">
										<p>Volunteers</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="{{asset('assets/img/icon_3.png')}}" alt="img"/><span class="js-counter">500 </span><span>+</span></div>
									<div class="icon-item__text">
										<p>People Helped</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="{{asset('assets/img/icon_4.png')}}" alt="img"/><span class="js-counter">1 </span><span>M+</span></div>
									<div class="icon-item__text">
										<p>Naira donated</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- statistics end-->
				<!-- team start-->
				<section class="section team">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="heading heading--primary"><span class="heading__pre-title">Team</span>
									<h2 class="heading__title no-margin-bottom"><span>Meet</span> <span>our Team</span></h2>
								</div>
							</div>
						</div>
						<div class="row margin-bottom">
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder"><img class="img--layout" src="{{asset('assets/img/team_1.png')}}" alt="layout"/>
										<div class="team-item__img"><img class="img--bg" src="{{asset('assets/img/julie.jpg')}}" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Julie Odion Oifoh-Onovwiona </div>
										<div class="team-item__position">President</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder"><img class="img--layout" src="{{asset('assets/img/team_2.png')}}" alt="layout"/>
										<div class="team-item__img"><img class="img--bg" src="{{asset('assets/img/team_2.jpg')}}" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Mrs Funmilayo Agbaminoja </div>
										<div class="team-item__position">VP Admin</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder"><img class="img--layout" src="{{asset('assets/img/team_3.png')}}" alt="layout"/>
										<div class="team-item__img"><img class="img--bg" src="{{asset('assets/img/team_3.jpg')}}" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Rose Omono</div>
										<div class="team-item__position">VP Human Resources</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder"><img class="img--layout" src="{{asset('assets/img/team_4.png')}}" alt="layout"/>
										<div class="team-item__img"><img class="img--bg" src="{{asset('assets/img/team_4.jpg')}}" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Mr. Godwin Oifoh</div>
										<div class="team-item__position">ICT Department</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder"><img class="img--layout" src="{{asset('assets/img/team_5.png')}}" alt="layout"/>
										<div class="team-item__img"><img class="img--bg" src="{{asset('assets/img/team_5.jpg')}}" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Lucy</div>
										<div class="team-item__position">Public Relations Department</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder"><img class="img--layout" src="{{asset('assets/img/team_6.png')}}" alt="layout"/>
										<div class="team-item__img"><img class="img--bg" src="{{asset('assets/img/team_6.jpg')}}" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Mr Samuel Onovwiona </div>
										<div class="team-item__position">ICT</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							
						</div>
						<div class="row">
							<div class="col-12 text-center"><a class="button button--primary" href="{{url('become-a-member')}}">Become a member</a></div>
						</div>
					</div>
				</section>
				<!-- team end-->
				<!-- donors start-->
				@include('includes.partners')
				<!-- donors end-->
			</main>
@endsection