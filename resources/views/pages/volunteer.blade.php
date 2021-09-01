@extends('layouts.app')
@section('page-title', 'Volunteer')
@section('content')

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Volunteer</h2>
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i>Volunteer</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="p-4 p-md-5 mb-4 text-white animatedParent">
        <div class="col-md-6 px-0 about-title">
            <!--            <h1 class="display-4 fst-italic animated fadeInUp ">About us</h1>-->
        </div>
    </div>
    <!--head section ends here-->
    <div class="container">

        <!--head section ends here-->
        <div class="container ">
            <div class="row pb-5 px-lg-5 ">
                <div class="col-12 col-lg-10 mx-auto animatedParent text-center" data-appear-top-offset='-50'
                     data-sequence='200'>
                    <h3 class="font-weight-bold pb-3 animated fadeInUp big-fonts-headings" data-id='1'>
                        Volunteering at T.E.C.H for the world
                    </h3>
{{--                    <h3 class="animated fadeInUp left-align-text" data-id='2'>--}}
{{--                        We are so glad that you have chosen to volunteer with us. We have hope that together--}}
{{--                        we can make this world a better place.--}}
{{--                    </h3>--}}
{{--                    <h3 class="animated fadeInUp left-align-text" data-id='2'>--}}
{{--                        Please feel free to fill the form below so that we can get to know more about you.--}}
{{--                    </h3>--}}
                </div>
            </div>
{{--            Volunteer form mobile version --}}
            <div class="d-lg-none d-xl-none">
                <h4 class="text-center pb-lg-3 pt-3 pb-3">Volunteer with us</h4>
                <form class="volunteer-form">
                    <div class="form-group">
                        <input type="text" class="form-control mb-3 mt-2" name="name"
                               placeholder="full name" required>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input type="email" class="form-control mt-2"
                                   aria-describedby="emailHelp"
                                   placeholder="email address" required name="email">
                        </div>
                    </div>
                    <div class="form-group   mt-3">
                        <div class="form-group">
                            <input type="text" class="form-control mb-3 mt-2"
                                   placeholder="address for example district" name="address">
                        </div>
                    </div>
                    <div class="form-group  ">
                        <div class="form-group">
                                <textarea class="form-control mb-3 mt-2" rows="5" required
                                          placeholder="How do you want to volunteer?"
                                          name="message"></textarea>
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
                    <button type="submit" class="btn btn-primary px-4 py-2  mb-5 mt-3 volunteer-submit"
                            id="volunteer-submit">Submit
                    </button>
                    <div class="message mt-1">
                        <p class="status"></p>
                    </div>
                </form>
            </div>

            <div class="form-container p-lg-4 px-2 mb-lg-5 my-4 d-none d-lg-block d-xl-block">
                <h4 class="text-center pb-lg-3 pt-3 pb-3">Volunteer with us</h4>
                <form class="volunteer-form">
                    <div class="form-group">
                        <input type="text" class="form-control mb-3 mt-2" name="name"
                               placeholder="full name" required>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input type="email" class="form-control mt-2"
                                   aria-describedby="emailHelp"
                                   placeholder="email address" required name="email">
                        </div>
                    </div>
                    <div class="form-group   mt-3">
                        <div class="form-group">
                            <input type="text" class="form-control mb-3 mt-2"
                                   placeholder="address for example district" name="address">
                        </div>
                    </div>
                    <div class="form-group  ">
                        <div class="form-group">
                                <textarea class="form-control mb-3 mt-2" rows="5" required
                                          placeholder="How do you want to volunteer?"
                                          name="message"></textarea>
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
                    <button type="submit" class="btn btn-primary px-4 py-2  mb-5 mt-3 volunteer-submit
                    px-5"
                            id="volunteer">Submit
                    </button>

                    <div class="message mt-1">
                        <p class="status"></p>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection

