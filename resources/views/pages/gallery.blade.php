@extends('layouts.app')
@section('page-title', 'Gallery')
@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Gallery</h2>
                <ul>
                    <li> <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Gallery</li>
                </ul>
            </div>
        </div>
    </div>



    <!--  ************************* Gallery Starts Here ************************** -->
    <div id="portfolio" class="gallery">
        <div class="container">
            <div class="row">
                <div class="gallery-filter d-none d-sm-block">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="hdpe">Tech Mobile</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle">Finance Literacy</button>
                    <button class="btn btn-default filter-button" data-filter="spray"> Classes</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Internship</button>
                </div>
                <br/>

                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                    <img src="{{ asset('images/gallery/inter1.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                    <img src="{{ asset('images/gallery/classo.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="{{ asset('images/gallery/investment.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                    <img src="{{ asset('images/gallery/technico.png') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                    <img src="{{ asset('images/gallery/intern.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                    <img src="{{ asset('images/gallery/typing.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="{{ asset('images/gallery/investment3.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="{{ asset('images/gallery/speak.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter sprinkle">
                    <img src="{{ asset('images/gallery/investment2.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter spray">
                    <img src="{{ asset('images/gallery/micheal.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter spray">
                    <img src="{{ asset('images/gallery/mayclass.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter irrigation">
                    <img src="{{ asset('images/gallery/mornmeeet.jpg') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter hdpe">
                    <img src="{{ asset('images/gallery/techmobile (1).JPG') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter hdpe">
                    <img src="{{ asset('images/gallery/techmobile (2).JPG') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter hdpe">
                    <img src="{{ asset('images/gallery/techmobile (3).JPG') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter hdpe">
                    <img src="{{ asset('images/gallery/techmobile (4).JPG') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter hdpe">
                    <img src="{{ asset('images/gallery/techmobile (5).JPG') }}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter hdpe">
                    <img src="{{ asset('images/gallery/techmobile (6).JPG') }}" class="img-responsive">
                </div>


            </div>
        </div>


    </div>
    <!-- ######## Gallery End ####### -->
@endsection

