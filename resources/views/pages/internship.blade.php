@extends('layouts.app')
@section('page-title', 'Internship')
@section('content')

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>{{ $originPageValue }}</h2>
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> {{ $originPageValue }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
                @if ($origin == 'internship')
                    <div class="col-12 col-md-5">
                        <h4 class="py-5 line-height">Internships or Industrial training is mandatory for all
                            students at
                            Higher Institutions of
                            Learning in Uganda. We provide a comprehensive and relevant approach to students
                            along this
                            path
                            with consideration of changing Technologies and Market dynamics.</h4>

                        <h4 class="font-weight-bold">We offer: </h4>

                        <h4>
                            <ul>
                                <li>Website Development.</li>
                                <li>Mobile Applications Development.</li>
                                <li>Graphics Design.</li>
                            </ul>
                        </h4>
                    </div>
                @endif

                @if ($origin == 'skills')
                    <div class="col-12 col-md-5">
                        <h4 class="py-5 line-height">We provide Practical Hands-on Training and Certificates
                            to all
                            individuals starting from basic Computer skills to Advance concepts such as
                            Applications
                            Development for all age groups.</h4>

                        <h4 class="font-weight-bold">We offer: </h4>

                        <h4>
                            <ul>
                                <li>Website Development.</li>
                                <li>Mobile Applications Development.</li>
                                <li>Graphics Design.</li>
                            </ul>
                        </h4>
                    </div>
                @endif

                @if ($origin == 'adult')
                    <div class="col-12 col-md-5">
                        <h4 class="py-5 line-height">We provide individuals with English and Financial
                            Literacy training
                            to
                            help them cope with the ever-increasing financial needs in a county ranked among
                            the poorest
                            in
                            the world.</h4>

                        <h4 class="font-weight-bold">We offer: </h4>

                        <h4>
                            <ul>
                                <li>Financial Literacy</li>
                                <li>Computer Literacy</li>
                                <li>Literacy Lessons (Reading and writing)</li>
                            </ul>
                        </h4>
                    </div>
                @endif

                <div class="col-md-7 py-5">
                    <h2 class="text-center">Application form</h2> <br>
                    <form class="contact-form">
                        <div class="row cont-row justify-content-center">
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name"
                                                         class="form-control input-sm" required></div>
                        </div>
                        <div class="row cont-row justify-content-center">
                            <div class="col-sm-8"><input type="text" name="email"
                                                         placeholder="Enter Email Address"
                                                         class="form-control input-sm" required></div>
                        </div>

                        <div class="row cont-row justify-content-center">
                            <div class="col-sm-8"><input type="text" name="subject"
                                                         value="{{ $originPageValue }}"
                                                         class="form-control input-sm" hidden></div>
                        </div>

                        <div class="row cont-row justify-content-center">
                            <div class="col-sm-8"><input type="text" name="phone"
                                                         placeholder="Enter Mobile Number"
                                                         class="form-control input-sm" required></div>
                        </div>
                        <div class="row cont-row justify-content-center">

                            <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message"
                                      class="form-control input-sm" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="progress col-sm-8 offset-2 hidden">
                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                 role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 100%"></div>
                        </div>
                        <div class='alert alert-success hidden col-sm-8 offset-3' role='alert'>
                            A simple success alert—check it out!
                        </div>
                        <div class='alert alert-danger hidden col-sm-8 offset-3' role='alert'>
                            A simple danger alert—check it out!
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button class="btn btn-primary px-5" id="submit-application">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

