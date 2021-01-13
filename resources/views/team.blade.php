@extends('layouts.layout')
@section('content')
<main class="main">
    <section class="promo-primary promo-primary--elements">
        <picture>
            <source srcset="{{asset('assets/img/about.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('assets/img/about.jpg')}}" alt="img"/>
        </picture>
        <div class="promo-primary__description"> <span>Elements</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Living Proof</span>
                            <h1 class="promo-primary__title"><span>Team</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                <div class="col-12 text-center"><a class="button button--primary" href="{{url("/become-a-member")}}">Become a member</a></div>
            </div>
        </div>
    </section>
    <!-- team end-->
    
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