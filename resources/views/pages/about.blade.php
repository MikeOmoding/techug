@extends('layouts.app')

@section('page-title', 'About Us')

@section('content')


    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>About Tech for the World</h2>
                <ul>
                    <li> <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>


    <!--  ************************* About Us Starts Here ************************** -->

    <div class="about-us container-fluid">
        <div class="container">

            <div class="row natur-row no-margin w-100">
                <div class="col-lg-10 col-md-12 big-fonts mx-lg-auto">
                    <h3 class="text-center line-height left-align-text">In Uganda, T.E.C.H for the World, Ltd. is
                        registered as a
                        non-profit company
                        with the sole aim of improving the lives of people in communities through
                        Technology, Education, and Charitable programs. </h3>
                </div>
            </div>
        </div>
    </div>


    <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">

            <div class="event-row row">
                <div class="col-lg-9 col-sm-12 col-md-12 mx-lg-auto my-5 big-fonts">
                    <h4 class="text-center line-height">Technology, Education, and Charitable Help (T.E.C.H.) For
                        the World--that's who we are! We're a team of
                        compassionate technology and business professionals that seek to apply their trade
                        skills to make a better world .</h4>
                </div>
            </div>

            <div class="event-ro row justify-content-center">
                <div class="col-md-6 col-sm-12">
                    <div class="event-box">
                        <img src="{{ asset('images/causes/technology.jpg') }}" alt="">
                        <h4 class="big-fonts">Adapting Technology</h4>
                        <p class="desic">We know that Technology allows for Creativity, Freedom of expression, and Problem-solving. With this in mind, we are determined to expose possibilities to different communities.</p>
                        <p class="desic"> The current state of affairs in the world due to the Covid-19 pandemic has caused great damage to the lives of many individuals and businesses.</p>
                        <p class="desic"> Ideas like online school and online shopping, among others, are new, unfamiliar trends in our country. Unfortunately, a large percentage of people in Uganda lack exposure to basic computer technologies.</p>
                        <p class="desic"> We are here to fill this gap.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="event-box">
                        <img src="{{ asset('images/causes/education.png') }}" alt="">
                        <h4 class="big-fonts">Education</h4>

                        <p class="desic">Education is a right to all humans, but some individuals are not privileged to attend school.</p><p class="desic"> Therefore, sending a child to school is one sure way of breaking limitations. In addition, providing educational material and scholastic items like books, sanitary supplies, and shoes is a sure win in our pursuit to empower communities in Uganda.</p><p class="desic"> We don't want to see children on the streets.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-md-5">
                    <div class="event-box">
                        <img src="{{ asset('images/causes/employment.jpg') }}" alt="">
                        <h4 class="big-fonts">Youth Employment</h4>
                        <p class="desic line-height">Youth unemployment is one of the challenges our country is
                            struggling with.</p><p class="desic">
                            But, unfortunately, this comes with many other problems to communities, including Gambling, Drug abuse, and Crime, among others.</p>
                        <p class="desic">We believe that creating awareness about the importance and use of Technology is one sure way to open up plenty of employment opportunities for the people of Uganda.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-md-5">
                    <div class="event-box">
                        <img src="{{ asset('images/causes/skills.jpg') }}" alt="">
                        <h4 class="big-fonts line-height">Professional Skills</h4>
                        <p class="desic">Our minds are assured that practical professional skills are an indispensable ideal in all forms of modern development.</p><p class="desic">With this, we are determined to enhance individuals and teams across various professional disciplines.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!--################### Our Team Starts Here #######################--->
    <section class="our-team team-11">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="big-fonts-headings font-weight-bold">Meet the Team</h2>
                <p class="big-fonts text-center line-height">We are blessed with a Team of loving and gifted
                    professionals.
                    With their invaluable experience, the efforts to reach the underserved is always
                    guaranteed.</p>
            </div>
            <div class="row team-row justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="{{ asset('images/team/moses.webp') }}" alt="">
                        <div class="det-o">
                            <h4>Moses Tugume</h4>
                            <i>President </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="{{ asset('images/team/christopher.webp') }}" alt="">
                        <div class="det-o">
                            <h4>Christopher Tamale</h4>
                            <i>Vice President</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="{{ asset('images/team/isaac.webp') }}" alt="">
                        <div class="det-o">
                            <h4>Isaac Kahinda</h4>
                            <i>General Secretary</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="{{ asset('images/team/mellisa.webp') }}" alt="">
                        <div class="det-o">
                            <h4>Mellisa Tugume</h4>
                            <i>Treasurer</i>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="{{ asset('images/team/grace.webp') }}" alt="">
                        <div class="det-o">
                            <h4>Grace Tamale</h4>
                            <i>Director</i>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="{{ asset('images/profile.png') }}" alt="">
                        <div class="det-o">
                            <h4>Barnaba Asingya</h4>
                            <i>Head Research & Innovation</i>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="{{ asset('images/profile.png') }}" alt="">
                        <div class="det-o">
                            <h4>Edward Mutesasira</h4>
                            <i>Development Lead</i>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <div>
                            <div class="card america">
                                <img class="img-fluid" src="{{ asset('images/america.jpg') }}" alt="America">
                                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                    <p class="subsidiary px-3 py-5 text-white">
                                        T.E.C.H For The World is a subsidiary for
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="det-o">
                            <h4><a class="text-uppercase text-white" href="https://www.techfortheworld.org/about_us">T.e.c.h For the World USA</a></h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection

