<!DOCTYPE HTML>
<html>
@include('views.layouts.header')
<body>
@include('views.layouts.menu')

<section class="site-hero overlay" style="background-image: url({{asset('images/du-lich-da-nang.jpg')}})"
         data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade-up">
                <span style="font-size: 25px" class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To DaNang Booking</span>
                <h1 class="heading">A Best Place Rest At DaNang</h1>
            </div>
        </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
            <span class="mouse-wheel"></span>
        </div>
    </a>
</section>
<!-- END section -->
@include('views.layouts.search')
@include('views.layouts.wellcome')
@include('views.layouts.index.hotels')
@include('views.layouts.index.Rooms')
@include('views.layouts.index.showSlide')
@include('views.layouts.index.content')
@include('views.layouts.index.people')
@include('views.layouts.index.events')
@include('views.layouts.footer')
</body>

</html>
