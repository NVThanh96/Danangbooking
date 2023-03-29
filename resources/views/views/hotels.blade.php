<!DOCTYPE HTML>
<html>
@include('views.layouts.header')
<body>
<style>
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
</style>
@include('views.layouts.menu')

<!-- END head -->

<section class="site-hero inner-page overlay" style="background-image: url({{asset('images/phongngu.jpg')}})"
         data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Hotels</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>&bullet;</li>
                    <li>Hotel</li>
                </ul>
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

<div id="form-container" style="display:none;margin-top: 20px" class="container">
    <form id="my-form">
        <div class="row ">
            @include('views.hotels.fillter')
        </div>
    </form>
</div>
{{--------------------------nút ẩn hiện fillter---------------------------------------}}
<div style="margin-top: 25px" class="container text-center">
    <button style="background: none;border: none" class="" id="show-form">
        <i style="font-size: 25px;color: black" class="fa-solid fa-filter"></i> Fillter
    </button>
</div>
{{----------------------------------------------------------------------------------}}

@if(isset($hotels))
    <section class="section">
        <div class="row">
            @foreach($hotels as $hotel)
                <div class="col-md-5 col-lg-3" data-aos="fade-up" enctype="multipart/form-data">
                    <a href="{{ route('show.hotels', $hotel->id) }}" class="room">
                        <figure style="justify-content: center;text-align: center" class="img-wrap">
                            <img src="{{$hotel->image}}" alt="Free website template"
                                 class="img-fluid">
                        </figure>
                        <div class="p-2 text-center room-info">
                            @switch($hotel->rate)
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
                            @endswitch
                                <p style="font-size: 30px">{{$hotel->price}} $</p>
                                <h2>{{$hotel->name}}</h2>
                            <h3>{{$hotel->description}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div style="margin-left: 46%;margin-top: 3%">{{ $hotels->appends(request()->except('page'))->links() }}</div>
    </section>
@endif
<section class="section bg-light">
    <div style="margin: 0 10%">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade">Great Offers</h2>
                <p style="font-size: 23px" data-aos="fade">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
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
                <div style="position: relative" class="site-block-half d-block d-lg-flex bg-white" data-aos="fade"
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
                        <p><a href="{{route('create.hotels',$room->id)}}" class="btn btn-primary text-white">Book Now</a></p>
                    </div>
                </div>
            @else
                <div style="position: relative" class="site-block-half d-block d-lg-flex bg-white" data-aos="fade"
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
                        <p><a href="{{route('create.hotels',$room->id)}}" class="btn btn-primary text-white">Book Now</a></p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>

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
</script>

</html>
