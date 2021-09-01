@extends('layouts.app')
@section('page-title', 'Donate')
@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Donate</h2>
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Donate</li>
                </ul>
            </div>
        </div>
    </div>


    <!--  ************************* Contact Us Starts Here ************************** -->

    <div class="row contact-rooo no-margin mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-6 paypal-col mx-auto">
                    <div class="section-title" data-aos="fade-up">
                        <img src="{{asset('images/paypal.png')}}" alt="" style="width: 50%" class="mx-auto
                        d-block">
                    </div>
                    <form method="get" role="form" id="contact-form" action="{{'/paypal'}}">
                        <div class="form-group">
                            <input type="number" class="form-control" name="amount" style="height: 50px"
                                   placeholder="Amount in US dollars" required>
                        </div>
                        <div class="text-center mb-5">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Donate now
                            </button>
                            {{--                        <button type="submit" class="btn btn-primary">Primary</button>--}}
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection

