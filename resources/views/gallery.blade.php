@extends('layouts.layout')
@section('content')
<main class="main">
    <section class="promo-primary">
        <picture>
            <source srcset="{{asset('assets/img/about.jpg')}}" media="(min-width: 992px)"/><img class="img--bg lazy" src="{{asset('assets/img/about.jpg')}}" alt="img"/>
        </picture>
        <div class="promo-primary__description"> <span>Gallery</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Living Proof</span>
                            <h1 class="promo-primary__title"><span>Our Gallery</span> </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery start-->
    <section class="section gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- filter panel start-->
                    <ul class="filter-panel">
                        <li class="filter-panel__item filter-panel__item--active" data-filter="*"><span>All</span></li>
                        <li class="filter-panel__item" data-filter=".category_1"><span>Covid 19 Assistance</span></li>
                        <li class="filter-panel__item" data-filter=".category_2"><span>First Anniversary</span></li>
                        <li class="filter-panel__item" data-filter=".category_3"><span>Second Anniversary</span></li>
                        <li class="filter-panel__item" data-filter=".category_4"><span>Widows Empowerment</span></li>
                    </ul>
                    <!-- filter panel end-->
                </div>
            </div>
        </div>
        <div class="row no-gutters gallery-masonry">

            <!-- Covid 19 gallery start -->
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-1.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-1.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-2.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-2.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-3.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-3.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-4.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-4.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-5.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-5.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-6.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-6.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div>
            <!-- <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-7.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-7.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-8.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-8.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-9.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-9.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-10.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-10.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/covid-19/gallery-11.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/covid-19/gallery-11.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Covid 19 Assistance</h6></a>
            </div> -->
            <!-- Covid 19 gallery end -->
            <!-- first anniversary gallery start -->
            
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-1.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-1.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>

            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-2.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-2.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-3.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-3.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-4.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-4.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-5.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-5.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-6.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-6.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-7.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-7.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-8.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-8.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-9.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-9.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-10.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-10.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
    <!-- 		<div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-11.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-11.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-12.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-12.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-13.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-13.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
                <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{url('assets/img/first-anniversary/gallery-14.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/first-anniversary/gallery-14.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">First Anniversary Event</h6></a>
            </div> -->
            
            <!-- first anniversry gallery end -->
            <!-- second anniversry gallery start -->
            <div class="col-6 col-md-4 gallery-masonry__item category_3">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/second-anniversary/gallery-1.jpg')}}" data-fancybox="gallery">
                <img class="img--bg lazy" data-src="{{asset('assets/img/second-anniversary/gallery-1.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Second Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_3">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/second-anniversary/gallery-2.jpg')}}" data-fancybox="gallery">
                <img class="img--bg lazy" data-src="{{asset('assets/img/second-anniversary/gallery-2.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Second Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_3">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/second-anniversary/gallery-3.jpg')}}" data-fancybox="gallery">
                <img class="img--bg lazy" data-src="{{asset('assets/img/second-anniversary/gallery-3.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Second Anniversary Event</h6></a>
            </div>
            <!-- <div class="col-6 col-md-4 gallery-masonry__item category_3">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/second-anniversary/gallery-4.jpg')}}" data-fancybox="gallery">
                <img class="img--bg lazy" data-src="{{asset('assets/img/second-anniversary/gallery-4.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Second Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_3">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/second-anniversary/gallery-5.jpg')}}" data-fancybox="gallery">
                <img class="img--bg lazy" data-src="{{asset('assets/img/second-anniversary/gallery-5.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Second Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_3">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/second-anniversary/gallery-6.jpg')}}" data-fancybox="gallery">
                <img class="img--bg lazy" data-src="{{asset('assets/img/second-anniversary/gallery-6.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Second Anniversary Event</h6></a>
            </div> -->
            <div class="col-6 col-md-4 gallery-masonry__item category_3">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/second-anniversary/gallery-7.jpg')}}" data-fancybox="gallery">
                <img class="img--bg lazy" data-src="{{asset('assets/img/second-anniversary/gallery-7.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Second Anniversary Event</h6></a>
            </div>
            <!-- <div class="col-6 col-md-4 gallery-masonry__item category_3">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/second-anniversary/gallery-8.jpg')}}" data-fancybox="gallery">
                <img class="img--bg lazy" data-src="{{asset('assets/img/second-anniversary/gallery-8.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Second Anniversary Event</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_3">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/second-anniversary/gallery-9.jpg')}}" data-fancybox="gallery">
                <img class="img--bg lazy" data-src="{{asset('assets/img/second-anniversary/gallery-9.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Second Anniversary Event</h6></a>
            </div> -->
            <!-- second anniversry gallery end -->

            <!-- Widows gallery start -->
        
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-1.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-1.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-2.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-2.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-3.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-3.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-4.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-4.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-5.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-5.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-6.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-6.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-7.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-7.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>

            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-8.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-8.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-9.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-9.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-10.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-10.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-11.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-11.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-12.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-12.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-13.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-13.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-14.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-14.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-15.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-15.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-16.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-16.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-17.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-17.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_4">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="{{url('assets/img/widows-2020/gallery-18.jpg')}}" data-fancybox="gallery"><img class="img--bg lazy" data-src="{{asset('assets/img/widows-2020/gallery-18.jpg')}}" alt="img"/>
                <h6 class="gallery-masonry__description">Widows empowerment 2020</h6></a>
            </div>
            
            <!-- Widows gallery end -->

            
        </div>
        
    </section>
    <!-- gallery end-->
    <!-- bottom bg start-->
    <section class="bottom-background">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-background__img"><img data-src="{{asset('assets/img/bottom-bg.png')}}" alt="img"/></div>
                </div>
            </div>
        </div>
    </section>
    <!-- bottom bg end-->
</main>
@endsection