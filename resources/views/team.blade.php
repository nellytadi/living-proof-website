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
   @include('includes.team')
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