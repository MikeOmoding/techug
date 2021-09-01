<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h2>About Us</h2>
                <p>
                    In Uganda, T.E.C.H for the World, Ltd. is registered as a non-profit company with the sole aim of
                    improving the lives of people in communities through Technology, Education, and Charitable programs.
                </p>
            </div>
            <div class="col-md-4 col-sm-12">
                <h2>Useful Links</h2>
                <ul class="list-unstyled link-list">
                    <li><a class="d-block" href="{{ route('home') }}">Home<i class="fa fa-angle-right"></i></a></li>
                    <li><a class="d-block" href="{{ route('about') }}">About us<i class="fa fa-angle-right"></i></a></li>
                    <li><a class="d-block" href="{{ route('services') }}">Our Cause<i class="fa fa-angle-right"></i></a></li>
                    <li><a class="d-block" href="{{ route('gallery') }}">Gallery<i class="fa fa-angle-right"></i></a></li>
                    <li><a class="d-block" href="{{ route('contact') }}">Contact us<i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 map-img">
                <h2>Contact Us</h2>
                <address class="md-margin-bottom-40">
                    Sserwaniko Road Abbas LC1 zone <br>
                    Luwafu, Makidye Kampala <br>
                    P.O Box 37337, Kampala <br>
                    Phone: +256 (700) 928-767 <br>
                    Email: <a href="mailto:info@anybiz.com" class="">info.ug@techfortheworld.org</a>
                </address>

            </div>
        </div>

    </div>


</footer>
<div class="copy">
    <div class="container d-flex justify-content-center">
        <a>&copy;T.E.C.H For the World 2016 - {{ date('Y') . '.' }} All Rights Reserved</a>
    </div>

</div>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>--}}
<script src="{{ asset('plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('plugins/slider/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/donations.js') }}"></script>
<script src="{{ asset('js/script.min.js') }}"></script>

</html>
