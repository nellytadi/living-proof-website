@extends('layouts.layout')
@section('content')
<main class="main">
    <section class="promo-primary">
        <picture>
            <source srcset="{{asset('assets/img/about.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('assets/img/about.jpg')}}" alt="img"/>
        </picture>
        <div class="promo-primary__description"> <span>Compassion</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Living Proof</span>
                            <h1 class="promo-primary__title"><span>Contact us</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section start-->
    <section class="section contacts">
        <div class="container">
            <div class="row offset-margin">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="{{asset('assets/img/icon_1-1.png')}}" alt="img"/>
                            <svg class="icon icon-item__icon icon--red">
                                <use xlink:href="#location-pin"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p><b>HEAD OFFICE: </b><br>55, Dansville plaza, beside A/P filling Station along Lagislative Quarters Durumi 1, Apo, FCT-Abuja.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="{{asset('assets/img/icon_3-3.png')}}" alt="img"/>
                            <svg class="icon icon-item__icon icon--green">
                                <use xlink:href="#envelope"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
							<p><b>KURUDU OFFICE:</b><br>
                                La-Vogue Event Center, 
                                Kurudu, FCT-Abuja.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="{{asset('assets/img/icon_2-2.png')}}" alt="img"/>
                            <svg class="icon icon-item__icon icon--orange">
                                <use xlink:href="#phone-call"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p>Phone: <br><a class="icon-item__link" href="tel:+23492920275">+234 929 20275</a> </p>
                            <p>Email: <a class="icon-item__link" href="mailto:contact@livingproofs.org">contact@livingproofs.org</a></p>

                        </div>
                    </div>
                </div>
               
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="{{asset('assets/img/icon_4-4.png')}}" alt="img"/>
                            <svg class="icon icon-item__icon icon--blue">
                                <use xlink:href="#share"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <!-- socials start-->
                            <ul class="socials">
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                            <!-- socials end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- contacts start-->
    <section class="section contacts no-padding-top">
        <div class="contacts-wrapper">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-6">
                        <form class="form message-form" id="contact-form" action="{{route('contact')}}" method="POST">

                            <h6 class="form__title">Contact us</h6><span class="form__text">* The following info is required</span>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input class="form__field" type="text" name="name" placeholder="Name *" required="required"/>
                                </div>
                            
                                <div class="col-lg-6">
                                    <input class="form__field" type="email" name="email" placeholder="Email *" required="required"/>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="tel" name="phone" placeholder="Phone"/>
                                </div>
                                <div class="col-12">
                                    <textarea class="form__message form__field" name="message" placeholder="Message"></textarea>
                                </div>
                                

                                <div class="col-12">
                                    <button class="form__submit g-recaptcha" data-sitekey="6LdIeyoaAAAAAEH_uCUSgEY83m1GWcmgjDYxovPe" 
                                    data-callback='onSubmit' 
                                    data-action='submit' type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="contacts-wrapper__map" id="map" data-api-key="AIzaSyD5ES8GFHrarPhIVpDhFDea6fPtga0Wy4Y" data-longitude="-73.935242" data-latitude="40.730610" data-marker="{{asset('assets/img/marker.png')}}"></div>
        </div>
    </section>
    <!-- contacts end-->
    <!-- bottom bg start-->
    <section class="bottom-background">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-background__img"><img src="{{asset('assets/img/bottom-bg.png')}}" alt="img"/></div>
                </div>
            </div>
        </div>
    </section>
    <!-- bottom bg end-->
</main>

@endsection


