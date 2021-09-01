@extends('layouts.app')
@section('page-title', 'Home')
@section('content')

    <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="{{ asset('images/slider/tech1.jpg') }}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Empowering through Technology</h1>
                                    {{--                                    <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>--}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{ asset('images/slider/tech2.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Empowering through Technology</h1>
                                {{--                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{ asset('images/slider/tech3.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Empowering through Technology</h1>
                                {{--                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--  ************************* About Us Starts Here ************************** -->

    <div class="about-us container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 mx-auto">
                    <p class="big-fonts text-center">Our mission is to provide technology solutions in developing
                        communities.</p>

                </div>
            </div>
        </div>
    </div>



    <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="big-fonts-headings text-center font-weight-bold">WHAT WE DO</h2>
                <p class="big-fonts text-center pb-5">Empowering Communities Through Technology</p>
            </div>
            <div class="event-ro row">
                <div class="col-md-6 col-sm-6">
                    <div class="event-box">
                        <img src="{{ asset('images/gallery/van tech.jpg') }}" alt="">
                        <h2 class="pt-3">T.E.C.H-Mobile</h2>
                        <p class="px-lg-5 line-height" style="text-align: left"> Some schools and other
                            organizations do
                            not have
                            the
                            financial
                            capacity to establish and maintain Computer Laboratories for all learners.
                            Therefore, we arrange for Mobile Computer Labs to go directly into local
                            communities. </p>
                        {{--                        <a href="" class="btn btn-success my-2">read more</a>--}}

                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="event-box">
                        <img src="{{ asset('images/gallery/inter1.jpg') }}" alt="">
                        <h2>Student Internships</h2>
                        <p class="px-lg-5 line-height" style="text-align: left">Internships or Industrial training
                            is mandatory for
                            all
                            students at
                            Higher Institutions of Learning in Uganda. We provide a comprehensive and relevant
                            approach to students along this path with consideration of changing Technologies
                            and Market dynamics </p>
{{--                        <a href="{{'/internship?origin=internship'}}" class="btn btn-success my-2 px-5 read-more">Apply</a>--}}
                        <a class="block mx-auto donate-btn btn btn-success text-white px-5 my-3"
                           href="{{'/internship?origin=internship'}}">Apply</a>

                    </div>
                </div>
            </div>
            <div class="event-ro row">
                <div class="col-md-6 col-sm-6">
                    <div class="event-box">
                        <img src="{{ asset('images/gallery/mayclass.jpg') }}" alt="">
                        <h2>Professional Skills Development</h2>
                        <p class="px-lg-5 line-height" style="text-align: left">We provide Practical Hands-on
                            Training and
                            Certificates to all
                            individuals starting from basic Computer skills to Advance concepts such as
                            Applications Development for all age groups.</p>
{{--                        <a href="{{'/internship?origin=skills'}}" class="btn btn-success my-2 px-5 read-more">Apply</a>--}}
                        <a class="block mx-auto donate-btn btn btn-success text-white px-5 my-3"
                           href="{{'/internship?origin=skills'}}">Apply</a>                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="event-box">
                        <img src="{{ asset('images/gallery/investment2.jpg') }}" alt="">
                        <h2>Adult Education</h2>
                        <p class="px-lg-5 line-height" style="text-align: left">We provide individuals with English
                            and Financial
                            Literacy
                            training
                            to help them cope with the ever-increasing financial needs in a county ranked
                            among the poorest in the world.</p>
{{--                        <a href="{{'/internship?origin=adult'}}" class="btn btn-success my-2 px-5 read-more">Apply</a>--}}
                        <a class="block mx-auto donate-btn btn btn-success text-white px-5 my-3"
                           href="{{'/internship?origin=adult'}}">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row big-fonts-headings text-center justify-content-center">
                    <h2 class="big-fonts-headings text-white font-weight-bold">Donate to us</h2>
                    <p class="font-italic big-fonts">"No one has ever become poor by giving." - Anne Frank</p>
                </div>
                <div class="row">
                    <div class="col-sm-12 mx-auto text-center">
                        <p class="mt-4">Your donation will help us expand our T.E.C.H. Centers (the points we establish to
                            allow members of different communities to get training).</p>
                        <p class="line-height">At each T.E.C.H Center, children learn coding, students at higher
                            institutions
                            complete their academic internships, and individuals that did not have the
                            opportunity to attend school acquire basic skills in reading and writing, basic
                            computer use, and financial literacy.</p>
                        <p>We base here to reach out. Your support is also directed towards getting a child to
                            school or purchasing scholastic material.</p>

                        <a class="block mx-auto donate-btn btn btn-success text-white mt-5 px-5" href="{{ route('donate') }}">Donate</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
