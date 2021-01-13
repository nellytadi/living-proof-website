<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<title>Living Proof Women Foundation International</title>
		<!-- styles-->
		<link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}"/>
		@yield('styles')
		<!-- web-font loader-->
		<script>
			WebFontConfig = {

				google: {

					families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
	</head>
	<body>
		<div class="page-wrapper">
			<!-- aside dropdown start-->
			<div class="aside-dropdown">
				<div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
				<div class="aside-dropdown__item d-lg-none d-block">
					<ul class="aside-menu">
						<li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active"><a class="aside-menu__link" href="javascript:void(0);"><span>Home</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li class="item--active"><a href="index.html"><span>01 Home Color Style</span></a></li>
								<li><a href="front_2.html"> <span>02 Home Color Style</span></a></li>
								<li><a href="front_3.html"><span>03 Home Color Style</span></a></li>
								<li><a href="mono/index.html"><span>04 Home Monochrome</span></a></li>
								<li><a href="mono/front_2.html"><span>05 Home Monochrome</span></a></li>
								<li><a href="mono/front_3.html"><span>06 Home Monochrome</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Pages</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="about.html"><span>About</span></a></li>
								<li><a href="typography.html"> <span>Typography</span></a></li>
								<li><a href="donors.html"><span>Donors & Partners</span></a></li>
								<li><a href="volunteer.html"><span>Become a Volunteer</span></a></li>
								<li><a href="events.html"><span>Events</span></a></li>
								<li><a href="event-details.html"><span>Event Details</span></a></li>
								<li><a href="stories.html"><span>Stories</span></a></li>
								<li><a href="story-details.html"><span>Story Details</span></a></li>
								<li><a href="blog.html"><span>Blog</span></a></li>
								<li><a href="blog-post.html"><span>Blog Post</span></a></li>
								<li><a href="gallery.html"><span>Gallery</span></a></li>
								<li><a href="pricing.html"><span>Pricing Plans</span></a></li>
								<li><a href="faq.html"><span>FAQ</span></a></li>
								<li><a href="404.html"><span>404 Page</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Causes</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="causes.html"><span>Causes 1</span></a></li>
								<li><a href="causes_2.html"> <span>Causes 2</span></a></li>
								<li><a href="causes_3.html"><span>Causes 3</span></a></li>
								<li><a href="cause-details.html"><span>Cause Details</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Shop</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="shop.html"><span>Catalog Page</span></a></li>
								<li><a href="shop-product.html"><span>Shop Product</span></a></li>
								<li><a href="shop-cart.html"><span>Shop Cart</span></a></li>
								<li><a href="shop-checkout.html"><span>Shop Checkout</span></a></li>
								<li><a href="shop-account.html"><span>Shop Account</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="contacts.html"><span>Contacts</span></a></li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Elements</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="alerts.html"><span>Alerts</span></a></li>
								<li><a href="team.html"><span>Team</span></a></li>
								<li><a href="testimonials.html"><span>Testimonials</span></a></li>
								<li><a href="accordion.html"><span>Accordion</span></a></li>
								<li><a href="tabs.html"><span>Tabs</span></a></li>
								<li><a href="pricing-plan.html"><span>Pricing Plan</span></a></li>
								<li><a href="counters.html"><span>Counters</span></a></li>
								<li><a href="icons.html"><span>Icons</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
					</ul>
				</div>
				<div class="aside-dropdown__item">
					<!-- aside menu start-->
					<ul class="aside-menu">
						<li class="aside-menu__item"><a class="aside-menu__link" href="{{url('/')}}">Home</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="{{url('/about')}}">About Us</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="{{url('/team')}}">Our Team</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="{{url('/gallery')}}">Gallery</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="{{url('/become-a-member')}}">Become a member</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="{{url('/contact')}}">Contact us</a></li>

					</ul>
					<!-- aside menu end-->
					<div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:contact@livingproofs.org">contact@livingproofs.org</a></div>
					<div class="aside-inner"><span class="aside-inner__title">Phone number</span><a class="aside-inner__link" href="tel:+23492920275">+234 92 920 275</a></div>
					<ul class="aside-socials">
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="aside-dropdown__item"><a class="button button--squared" href="{{url('donate')}}"><span>Donate</span></a></div>
				</div>
			</div>
			<!-- aside dropdown end-->
			<!-- header start-->
			<header class="header header--front">
				<div class="container-fluid">
					<div class="row no-gutters justify-content-between">
						<div class="col-auto d-flex align-items-center">
							<div class="dropdown-trigger d-none d-sm-block">
								<div class="dropdown-trigger__item"></div>
							</div>
							<div class="header-logo"><a class="header-logo__link" href="{{url('/')}}"><img class="header-logo__img logo--light" src="{{asset('assets/img/logo_white.png')}}" alt="logo"/><img class="header-logo__img logo--dark" src="{{asset('assets/img/logo_dark.png')}}" alt="logo"/></a></div>
						</div>
						<div class="col-auto">
							<!-- main menu start-->
							<nav>
								<ul class="main-menu">
									<li class="main-menu__item main-menu__item--active"><a class="main-menu__link" href="{{url('/')}}"><span>Home</span></a></li>
									
									<li class="main-menu__item "><a class="main-menu__link" href="{{url('/about')}}"><span>About us</span></a></li>
									<li class="main-menu__item "><a class="main-menu__link" href="{{url('/team')}}"><span>Our Team</span></a></li>
									<li class="main-menu__item "><a class="main-menu__link" href="{{url('/gallery')}}"><span>Gallery</span></a></li>
									<li class="main-menu__item"><a class="main-menu__link" href="{{url('/contact')}}"><span>Contact us</span></a></li>
									
								</ul>
							</nav>
							<!-- main menu end-->
						</div>
						<div class="col-auto d-flex align-items-center">
							
							<div class="dropdown-trigger d-block d-sm-none">
								<div class="dropdown-trigger__item"></div>
							</div><a class="button button--squared" href="{{url('/donate')}}"><span>Donate</span></a>
						</div>
					</div>
				</div>
			</header>
            <!-- header end-->
            

            @yield('content')

            <!-- footer start-->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-lg-4">
							<div class="footer-logo"><a class="footer-logo__link" href="{{url('/')}}"><img class="footer-logo__img" src="{{asset('assets/img/logo_white.png')}}" alt="logo"/></a></div>
							

							<!-- footer socials start-->
							<ul class="footer-socials">
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
							<!-- footer socials end-->
								
						</div>
						<div class="col-sm-6 col-lg-4">
							<h4 class="footer__title">Contacts</h4>
							<div class="footer-contacts">
								<p class="footer-contacts__address">
									<b>HEAD OFFICE</b><br> 55, Dansville plaza, beside A/P filling Station along Lagislative Quarters Durumi 1, Apo, FCT-Abuja.
								</p><br>
								<p class="footer-contacts__address">
									<b>KURUDU OFFICE</b><br>
									La-Vogue Event Center, 
									Kurudu, FCT-Abuja.
								</p>
								<br>
								<p class="footer-contacts__phone">Phone: <a href="tel:+23492920275">+23492920275</a></p>
								<p class="footer-contacts__mail">Email: <a href="mailto:contact@livingproofs.org">contact@livingproofs.org</a></p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<h4 class="footer__title">Menu</h4>
							<!-- footer nav start-->
							<nav>
								<ul class="footer-menu">
									<li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link" href="{{url('/')}}">Home</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="{{url('/about')}}">About Us</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="{{url('/team')}}">Our Team</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="{{url('/gallery')}}">Gallery</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="{{url('/become-a-member')}}">Become a member</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="{{url('/contact')}}">Contact us</a></li>
									
								</ul>
							</nav>
							<!-- footer nav end-->
						</div>
						<!-- <div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Donate</h4>
							<p>Help Us Change Lives all around</p><a class="button footer__button button--filled" href="#">Donate</a>
						</div> -->
					</div>
					<div class="row align-items-baseline">
						<div class="col-md-6">
							<p class="footer-copyright">© <script>document.write(new Date().getFullYear())</script> Living Proof Foundation</p>
						</div>
						
					</div>
				</div>
			</footer>
			<!-- footer end-->
		</div>
		<!-- libs-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="{{asset('assets/js/libs.min.js')}}"></script>
		<!-- scripts-->
		<script src="{{asset('assets/js/common.min.js')}}"></script>
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<script>
			function onSubmit(token) {
			  document.getElementById("contact-form").submit();
			}
		  </script>
		 
		 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		 @if(Session::has('status'))
			 @if(Session::get('status')=="success")
			 <script>
				 swal("Successfull!", "{!! Session::get('message') !!}.", "success");
			 </script>
			 @endif
	 
			 @if(Session::get('status')=="error")
			 <script>
				 swal("Error!", "{!! Session::get('message') !!}.", "error");
			 </script>
			 @endif
		 @endif
	 
		 @yield('scripts')

	</body>
</html>