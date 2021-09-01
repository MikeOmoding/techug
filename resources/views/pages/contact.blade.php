@extends('layouts.app')

@section('page-title', 'Contact Us')
@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact Us</li>
                </ul>
            </div>
        </div>
    </div>



    <!--  ************************* Contact Us Starts Here ************************** -->


    <div style="margin-top:0;" class="row no-margin">

        {{--        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" style="border:0" allowfullscreen></iframe>--}}

        <iframe class="w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.546905840323!2d32.58589479999999!3d0.27172340000000644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbda96c817b93%3A0x6bea7cdd80635728!2sMakindye%2C%20Kampala!5e0!3m2!1sen!2sug!4v1628157228753!5m2!1sen!2sug"
                height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
                <div style="padding:20px" class="col-sm-7 mx-auto">
                    <h2>Contact Form</h2> <br>
                    <form class="contact-form">
                        <div class='form-body'>
                            <div class="row cont-row">
                                <div class="col-sm-3"><label for="name">Enter Name </label><span>:</span>
                                </div>
                                <div class="col-sm-8"><input type="text" placeholder="Fulll name" name="name"
                                                             class="form-control input-sm" id="name"></div>
                                <input type="text" name="subject" hidden value="contact">
                            </div>
                            <div class="row cont-row">
                                <div class="col-sm-3"><label for="email">Email Address </label><span>:</span>
                                </div>
                                <div class="col-sm-8"><input type="text" name="email" placeholder="Email
                        Address" class="form-control input-sm" id="email"></div>
                            </div>
                            <div class="row cont-row">
                                <div class="col-sm-3"><label for="phone">Mobile Number</label><span>:</span>
                                </div>
                                <div class="col-sm-8"><input type="text" name="phone" placeholder="
                        +256701256356"
                                                             class="form-control input-sm" id="phone"></div>
                            </div>
                            <div class="row cont-row">
                                <div class="col-sm-3"><label for="message">Enter Message</label><span>:</span>
                                </div>
                                <div class="col-sm-8">
                            <textarea rows="5" placeholder="Your Message" id="message"
                                      class="form-control input-sm" name="message"></textarea>
                                </div>
                            </div>
                            <div class="progress col-sm-8 offset-3 hidden">
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
                                    <button class="btn btn-primary px-5" id="send-contact-message">Send
                                        Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
{{--                <div class="col-sm-5">--}}

{{--                    <div style="margin:50px" class="serv">--}}


{{--                        <h2 style="margin-top:10px;">Address</h2>--}}

{{--                        Sserwaniko Road Abbas LC1 zone, <br>--}}
{{--                        Luwafu, Makidye Kampala<br>--}}
{{--                        P.O Box 37337, Kampala<br>--}}
{{--                        Phone: +256 (700) 928-767<br>--}}
{{--                        Email: info.ug@techfortheworld.org<br>--}}

{{--                    </div>--}}


{{--                </div>--}}

            </div>
        </div>

    </div>
@endsection

