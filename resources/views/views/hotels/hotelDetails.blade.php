<!DOCTYPE HTML>
<html>
@include('views.layouts.header')
<style>
    .section {
        padding: 1px 0;
    }

    .twelve-point-star {
        width: 60px;
        height: 60px;
        position: absolute;
        background: #db101f;
    }

    .twelve-point-star::before {
        width: 60px;
        height: 60px;
        position: absolute;
        content: "";
        background: #db101f;
        transform: rotate(30deg);
    }

    .twelve-point-star::after {
        width: 60px;
        height: 60px;
        position: absolute;
        content: "";
        background: #db101f;
        transform: rotate(-30deg);
    }

    .fa-star {
        color: #ecd840;
    }

    .slider {
        position: relative;
        max-width: 768px;
        margin: 0 auto;
    }

    .slider img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .slider img.active {
        opacity: 1;
    }

</style>
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

<body>
@include('views.layouts.menu')
@foreach($hotelDetails as $hotelDetail)
    <section class="site-hero inner-page overlay" style="background-image: url({{asset($hotelDetail->image)}})"
             data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <h1 style="color: white;margin-left: 25%;font-size: 46px"
                        class="col-md-6">{{$hotelDetail->name}}</h1>
                    <ul class="custom-breadcrumbs mb-4">
                        <li><a style="font-size: 20px" href="{{route('index')}}">Home</a></li>
                        <li>&bullet;</li>
                        <li><a style="font-size: 20px" href="{{route('index.hotels')}}">Hotels</a></li>
                        <li>&bullet;</li>
                        <li style="font-size: 20px">HotelDetail</li>
                    </ul>
                    <h3 style="color: white">{{$hotelDetail->description}}</h3>
                </div>
            </div>
        </div>
        <a class="mouse smoothscroll" href="#next">
            <div class="mouse-icon">
                <span class="mouse-wheel"></span>
            </div>
        </a>
    </section>
@endforeach


@foreach($hotelDetails as $hotelDetail)
    <div style="padding: 2%" class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="slider-item">
                    <a href="{{$hotelDetail->image}}" data-fancybox="images"
                       data-caption="Caption for this image">
                        <img height="500px" src="{{$hotelDetail->image}}" alt="Image placeholder"></a>
                </div>
                @foreach($allRooms as $key => $room)
                    <div class="slider-item">
                        <a href="{{ asset(asset($room->image)) }}" data-fancybox="images"
                           data-caption="Caption for this image"><img height="500px"
                                                                      src="{{ asset(asset($room->image)) }}"
                                                                      alt="Image placeholder"></a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-1"></div>

        <div style="text-align: center" class="col-md-4">
            @switch($hotelDetail->rate)
                @case(1)
                <p><i class="fa-solid fa-star"></i></p>
                @break

                @case(2)
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                @break

                @case(3)
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i></p>
                @break

                @case(4)
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i></p>
                @break

                @default
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i></p>
                @break

            @endswitch
            <h2>Name: {{$hotelDetail->name}}</h2>
            <h4><i style="color: rgba(227,58,58,0.71)"
                   class="fa-solid fa-location-dot"></i> {{$hotelDetail->location}}</h4>
            <h4><i style="color: rgba(78,167,249,0.75)" class="fa-solid fa-map"></i> {{$hotelDetail->address}}</h4>
            <br>
            <h4 style="text-align: justify"><i style="color: rgba(34,180,51,0.72)"
                                               class="fa-solid fa-circle-info"></i> {{$hotelDetail->description}} {!! lorem(1 ) !!}
            </h4>
        </div>
        @endforeach
    </div>
    {{------------------------------------------------------------------------------------}}
    @if(count($rooms) == 0)

    @else
        <div>
            <section class="section bg-light">
                <div style="margin: 2% 30px 3% 30px">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-7">
                            <h2 class="heading" data-aos="fade">Great Offers</h2>
                            <p data-aos="fade">Far far away, behind the word mountains, far from the countries
                                Vokalia
                                and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                at
                                the
                                coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>
                    @foreach($rooms as $key => $room)

                        @if ($room->type == '%')
                            @php
                                $priceHaveDiscount = $room->price-($room->price*($room->discount)/100);
                            @endphp
                        @else
                            @php
                                $priceHaveDiscount = $room->price-$room->discount;
                            @endphp
                        @endif
                        @if($key%2==0)
                            <div style="position: relative" class="site-block-half d-block d-lg-flex bg-white"
                                 data-aos="fade"
                                 data-aos-delay="100">
                                <span><div class="twelve-point-star"></div></span>
                                <h3 style="position: absolute; top:13px;left: 4px;color: white;font-size: 28px">{{$room->discount}} {{$room->type}}</h3>
                                <a href="#" class="image d-block bg-image-2"
                                   style="background-image: url({{asset($room->image)}});"></a>
                                <div class="text">
                        <span class="d-block mb-4"><span
                                class="display-4 text-primary">$ {{$priceHaveDiscount}}</span> <span
                                class="text-uppercase letter-spacing-2">/ per night</span> </span>
                                    <h4 style="  text-decoration: line-through;">$ {{$room->price}}</h4>
                                    <h2 class="mb-4">{{$room->name}}</h2>
                                    <p>{{$room->content}}</p>
                                    <p><a href="{{route('create.hotels', $room->id)}}"
                                          class="btn btn-primary text-white">Book Now</a></p>
                                </div>
                            </div>
                        @else
                            <div style="position: relative" class="site-block-half d-block d-lg-flex bg-white"
                                 data-aos="fade"
                                 data-aos-delay="200">
                    <span><div style="color:#62e733;position: absolute;right:1px;top: 1px;"
                               class="twelve-point-star"></div></span>

                                <h3 style="color: white;position: absolute;right:2px;top: 13px;font-size: 28px">{{$room->discount}} {{$room->type}}</h3>
                                <a href="#" class="image d-block bg-image-2 order-2"
                                   style="background-image:url({{asset($room->image)}});"></a>
                                <div class="text order-1">
                     <span class="d-block mb-4"><span
                             class="display-4 text-primary">$ {{$priceHaveDiscount}}</span> <span
                             class="text-uppercase letter-spacing-2">/ per night</span> </span>
                                    <h4 style="  text-decoration: line-through;">$ {{$room->price}}</h4>
                                    <h2 class="mb-4">{{$room->name}}</h2>
                                    <p>{{$room->content}}</p>
                                    <p><a href="{{route('create.hotels', $room->id)}}" class="btn btn-primary text-white">Book Now</a></p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </section>
        </div>
    @endif
    <div>
        <section class="section ">
            <div style="margin: 2% 30px 2% 30px">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-7">
                        <h2 class="heading" data-aos="fade">Rooms</h2>
                        <p data-aos="fade">Far far away, behind the word mountains, far from the countries Vokalia
                            and
                            Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                            the
                            coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
                @foreach($allRooms as $key => $room)
                    @if($key%2==0)
                        <div style="position: relative" class="site-block-half d-block d-lg-flex bg-white"
                             data-aos="fade"
                             data-aos-delay="100">
                            <a href="#" class="image d-block bg-image-2"
                               style="background-image: url({{asset($room->image)}});"></a>
                            <div class="text">
                        <span class="d-block mb-4"><span
                                class="display-4 text-primary">$ {{$room->price}}</span> <span
                                class="text-uppercase letter-spacing-2">/ per night</span> </span>
                                <h2 class="mb-4">{{$room->name}}</h2>
                                <p>{{$room->content}}</p>
                                <p><a href="{{route('create.hotels', $room->id)}}" class="btn btn-primary text-white">Book Now</a></p>
                            </div>
                        </div>
                    @else
                        <div style="position: relative" class="site-block-half d-block d-lg-flex bg-white"
                             data-aos="fade"
                             data-aos-delay="200">

                            <a href="#" class="image d-block bg-image-2 order-2"
                               style="background-image:url({{asset($room->image)}});"></a>
                            <div class="text order-1">
                     <span class="d-block mb-4"><span
                             class="display-4 text-primary">$ {{$room->price}}</span> <span
                             class="text-uppercase letter-spacing-2">/ per night</span> </span>
                                <h2 class="mb-4">{{$room->name}}</h2>
                                <p>{{$room->content}}</p>
                                <p><a href="{{route('create.hotels', $room->id)}}" class="btn btn-primary text-white">Book Now</a></p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </div>

    @include('views.layouts.footer')

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Bắt sự kiện click vào button
        $('#show-form').click(function () {
            // Ẩn hoặc hiện form
            $('#form-container').toggle();
        });
    });
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</html>
