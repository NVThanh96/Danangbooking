<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Checkout example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .container {
            max-width: 960px;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
    @include('views.layouts.header')
</head>
<body class="bg-light">
@include('views.layouts.menu')
<section class="site-hero inner-page overlay" style="margin: 0;background-image: url({{asset($room->image)}})"
         data-stellar-background-ratio="0.5">

    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 style="color: white;margin-left: 25%;font-size: 46px"
                    class="col-md-6">Checkin</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a style="font-size: 20px" href="{{route('index')}}">Home</a></li>
                    <li>&bullet;</li>
                    <li><a style="font-size: 20px"
                           href="{{route('show.hotels', $room->id)}}">{{$room->hotel->name}}</a></li>
                    <li>&bullet;</li>
                    <li style="font-size: 20px">Checkin</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div style="margin: 5% 15%">
    <div class="row g-5">
        @include('views/booking/cart')
        <div class="col-md-7 col-lg-8">
            <form method="POST" action="{{route('enter-otp')}}">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input name="first_name" type="text" class="form-control" id="firstName" placeholder="Thanh"
                               value="{{Route::has('login') && auth()->check() ?auth()->user()->name:''}}" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input name="last_name" type="text" class="form-control" id="lastName" placeholder="Enter your last name"
                               value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>


                    <div class="col-12">
                        <label for="email" class="form-label">Email <span
                                class="text-muted">(Optional)</span></label>
                        <input name="email" type="email" class="form-control" id="email" value="{{Route::has('login') && auth()->check()?auth()->user()->email:''}}"
                               placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="phone" class="form-label">Phone</label>
                        <input name="phone" type="text" class="form-control" id="phone"
                               placeholder="+84 xxx xxx xxxx" required>
                        <div class="invalid-feedback">
                            Please enter your phone number.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="checkin" class="form-label">Checkin</label>
                        <input name="checkin" type="date" class="form-control" id="checkin" placeholder="" required
                               value="{{ \Carbon\Carbon::now()->format('Y/m/d') }}">
                        <div class="invalid-feedback">
                            Checkin is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="checkout" class="form-label">Checkout</label>
                        <input name="checkout" type="date" class="form-control" id="checkout" placeholder=""
                               value="{{ \Carbon\Carbon::now()->addDays(1)->format('Y/m/d') }}">
                        <div class="invalid-feedback">
                            Checkout must be higher than checkin
                        </div>
                    </div>

                    {{--Payment--}}
                    {{--<div style="margin-top: 25px" class="container text-center">
                        <a style="cursor: pointer;background: none;border: none" class="" id="show-form">
                            <i class="fa-sharp fa-regular fa-credit-card"></i>Payment
                        </a>
                    </div>

                    <div id="form-container" style="display:none;margin-top: 20px" class="container payment">
                        <div class="row ">
                            @include('views/booking/payment')
                        </div>
                    </div>--}}
                    {{--end payment--}}

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                </div>
            </form>
        </div>
    </div>

</div>

@include('views.layouts.footer')
<script>
    $(document).ready(function () {
        // Bắt sự kiện click vào button
        $('#show-form').click(function () {
            // Ẩn hoặc hiện form
            $('#form-container').toggle();
        });
    });

    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
