@extends('layouts.layout')
@section('content')
<main class="main"><img class="img--bg" src="{{asset('assets/img/404.jpg')}}" alt="img"/>
    <section class="section error">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <div class="align-container">
                        <div class="align-container__item">
                            <h1 class="error__title">404</h1>
                            <h3 class="error__subtitle">Page not found</h3>
                            <p class="error__text">Looks like something went wrong. Please ensure you typed in the correct URL. </p><a class="button button--primary" href="{{url('/')}}">Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection