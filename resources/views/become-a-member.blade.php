@extends('layouts.layout')
@section('content')
<main class="main">
    <section class="promo-primary">
        <picture>
            <source srcset="{{asset('assets/img/about.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('assets/img/volunteer.jpg')}}" alt="img"/>
        </picture>
        <div class="promo-primary__description"> <span>Love and Prayer</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Living Proof</span>
                            <h1 class="promo-primary__title"><span>Become</span> <span>a Member</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section start-->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-5">
                    <div class="img-box"><img class="img--layout" src="{{asset('assets/img/about_layout-reverse.png')}}" alt="img"/>
                        <div class="img-box__img"><img class="img--bg" src="{{asset('assets/img/membership.jpg')}}" alt="img"/></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="heading heading--primary"><span class="heading__pre-title">Membership</span>
                        <h2 class="heading__title"><span>Conditions to </span> <span>Become a Member</span></h2>
                    </div>
                
                    <p>
                        <ol>
                            <li>Living proof women foundation international  membership is opened to women who are ready to give back to the society by helping the vulnerable, needy, widows etc</li>
                            <li>Must be of like minds ready to put a smile on others . It is a charitable organization set to raise a total woman. </li>
                            <li>Must attend meetings regularly as at when due and must pay a monthly dues as decided by the leadership of the organization </li>
                            <li>Must be financially independent to be a member</li>
                            <li>A member is allowed to become a member after the consent form has been filled , read, understood, and signed by the secretary and the president </li>
                            <li>Membership form shall be assessed with a token</li>
                        </ol>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- section start-->
    <section class="section forms-section no-padding-top no-padding-bottom">
        <div class="container">
           
            <div class="row">
                <div class="col-12">
                    <!-- user form start-->
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
                    <!-- user form end-->
                </div>
            </div>
        </div><img class="forms-section__bg" src="{{asset('assets/img/volunteer-2.png')}}" alt="img"/>
    </section>
    <!-- section end-->
</main>
@endsection