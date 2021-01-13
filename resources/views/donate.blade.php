@extends('layouts.layout')
@section('styles')
<meta name="_token" content="{{ csrf_token() }}">
@endsection
@section('content')
<main class="main">
    <section class="promo-primary promo-primary--elements">
        <picture>
            <source srcset="{{asset('assets/img/about.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('assets/img/about.jpg')}}" alt="img"/>
        </picture>
        <div class="promo-primary__description"> <span>Donate</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Living Proof</span>
                            <h1 class="promo-primary__title"><span>Donate</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section start-->
    <section class="section background--brown">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- checkout start-->
                    <div class="form checkout-form" id="paymentForm">
                        <div class="row">
                            <div class="mx-auto col-lg-7 col-xl-8">
                                <div class="form__fieldset">
                                    <h6 class="form__title">Donations</h6>
                                    <div class="row offset-30">
                                        <div class="col-lg-12">
                                            <input class="form__field" type="email" name="email" placeholder="Email Address *"/>
                                        </div>
                                        <div class="col-lg-12">
                                            <input class="form__field" type="text" name="name" placeholder="Full Name *"/>
                                        </div>
                                        <div class="col-lg-12">
                                            <input class="form__field" type="number" name="amount" min="500"  placeholder="Amount (in naira) *"/>
                                        </div>
                                        <div class="col-lg-4">
                                            <button class="form__submit" onclick="payStackInit()">Donate
                                            </button>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- checkout end-->
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
    
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

@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
   
   function payStackInit(){
            let email =  $('input[name="email"]').val();
            let amount =  $('input[name="amount"]').val();
            if(amount > 0) {
                var handler = PaystackPop.setup({
                    key: '{!! env('PAYSTACK_PUBLIC_KEY') !!}',
                    email: email,
                    amount: amount * 100,
                    currency: "NGN",
                    callback: function (response) {
                        var form = $(document.createElement('form'));
                        $(form).attr('action', "{{ route('donate.paystack.callback') }}");
                        $(form).attr("method", "POST");
                        var _token = $("<input>")
                            .attr("type", "text")
                            .attr("name", "_token")
                            .val($('meta[name="_token"]').attr('content'));
                        var reference = $("<input>")
                            .attr("type", "hidden")
                            .attr("name", "reference_no")
                            .val(response.reference);
                        $(form).append($(reference));
                        $(form).append($(_token));
                        form.appendTo(document.body);
                        $(form).submit();
                    },
                    onClose: function () {
                    }
                });
                handler.openIframe();
            }else {
                swal("Error", "Invalid amount provided", "error");
            }
        }
        </script>
        @if(Session::has('success'))
        <script>
            swal("Donation Successful!", "{!! Session::get('success') !!}.", "success");
         </script>
        @endif
        @if(Session::has('error'))
            <script>
                swal("Error", "{!! Session::get('error') !!}.", "error");
            </script>
        @endif
@endsection