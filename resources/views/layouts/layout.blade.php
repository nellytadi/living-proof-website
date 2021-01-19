<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="Living Proof is a gender base organization for women (married, unmarried, widows), children and the vulnerable in the society at large."/>
		<meta name="keywords" content="Living Proof, Gender Based Organisation"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
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
					<div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:lpwfintl@gmail.com">lpwfintl@gmail.com</a></div>
					<div class="aside-inner"><span class="aside-inner__title">Phone number</span><a class="aside-inner__link" href="tel:+23492920275">+234 92 920 275</a></div>
					<ul class="aside-socials">
						{{--<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}
						<li class="aside-socials__item"><a class="aside-socials__link" href="https://www.facebook.com/groups/779897679171609"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="https://www.youtube.com/channel/UCSFKO-LItwMu84OkVOh1V5A/videos"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
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
									<li class="main-menu__item {{Route::currentRouteName() == "index" ? "main-menu__item--active" : ''}}"><a class="main-menu__link" href="{{url('/')}}"><span>Home</span></a></li>
									
									<li class="main-menu__item  {{Route::currentRouteName() == "about" ? "main-menu__item--active" : ''}}"><a class="main-menu__link" href="{{url('/about')}}"><span>About us</span></a></li>
									<li class="main-menu__item  {{Route::currentRouteName() == "team" ? "main-menu__item--active" : ''}}"><a class="main-menu__link" href="{{url('/team')}}"><span>Our Team</span></a></li>
									<li class="main-menu__item  {{Route::currentRouteName() == "gallery" ? "main-menu__item--active" : ''}}"><a class="main-menu__link" href="{{url('/gallery')}}"><span>Gallery</span></a></li>
									<li class="main-menu__item {{Route::currentRouteName() == "contact" ? "main-menu__item--active" : ''}}"><a class="main-menu__link" href="{{url('/contact')}}"><span>Contact us</span></a></li>
									
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
								<li class="footer-socials__item"><a class="footer-socials__link" href="https://www.facebook.com/groups/779897679171609"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href="https://www.youtube.com/channel/UCSFKO-LItwMu84OkVOh1V5A/videos"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								{{--<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}
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
								<p class="footer-contacts__mail">Email: <a href="mailto:lpwfintl@gmail.com">lpwfintl@gmail.com</a></p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<h4 class="footer__title">Menu</h4>
							<!-- footer nav start-->
							<nav>
								<ul class="footer-menu">
									<li class="footer-menu__item {{Route::currentRouteName() == "home" ? "footer-menu__item--active" : ''}}"><a class="footer-menu__link" href="{{url('/')}}">Home</a></li>
									<li class="footer-menu__item {{Route::currentRouteName() == "about" ? "footer-menu__item--active" : ''}}"><a class="footer-menu__link" href="{{url('/about')}}">About Us</a></li>
									<li class="footer-menu__item {{Route::currentRouteName() == "team" ? "footer-menu__item--active" : ''}}"><a class="footer-menu__link" href="{{url('/team')}}">Our Team</a></li>
									<li class="footer-menu__item {{Route::currentRouteName() == "gallery" ? "footer-menu__item--active" : ''}}"><a class="footer-menu__link" href="{{url('/gallery')}}">Gallery</a></li>
									<li class="footer-menu__item {{Route::currentRouteName() == "become-a-member" ? "footer-menu__item--active" : ''}}"><a class="footer-menu__link" href="{{url('/become-a-member')}}">Become a member</a></li>
									<li class="footer-menu__item {{Route::currentRouteName() == "contact" ? "footer-menu__item--active" : ''}}"><a class="footer-menu__link" href="{{url('/contact')}}">Contact us</a></li>
									
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
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
		
		<script src="{{asset('assets/js/app.js')}}"></script>
		
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