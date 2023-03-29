<!DOCTYPE HTML>
<html>
@include('views.layouts.header')
<body>
@include('views.layouts.menu')


<section class="site-hero inner-page overlay" style="background-image: url({{asset('images/contact-us.jpg')}})"
         data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Contact</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>&bullet;</li>
                    <li>Contact</li>
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

<section class="section contact-section" id="next">
    <div class="container">
        <div class="row">
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

                <form action="{{route('contact.store')}}" method="post" class="bg-white p-md-5 p-4 mb-5 border">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="first_name">First Name:</label>
                            <input name="first_name" type="text" id="first_name" class="form-control" value="{{ old('first_name') }}" required>
                            @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="last_name">Last Name:</label>
                            <input name="last_name" type="text" id="last_name" class="form-control" value="{{ old('last_name') }}" required>
                            @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="phone">Phone:</label>
                            <input name="phone" type="text" id="phone" class="form-control" value="{{ old('phone') }}" required>
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email:</label>
                            <input name="email" type="email" id="email" class="form-control" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="title">Title:</label>
                            <input name="title" type="text" id="title" class="form-control" value="{{ old('title') }}" required>
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" class="form-control" required>{{ old('message') }}</textarea>
                            @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                   {{-- <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="option">Option:</label>
                            <select name="option" id="option" class="form-control" required>
                                <option value="">Select an option</option>
                                <option value="hotel">Hotel</option>
                                <option value="room">Room</option>
                                <option value="service">Service</option>
                            </select>
                            @error('option')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>--}}
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary text-white font-weight-bold">
                        </div>
                    </div
                </form>

            </div>
            <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-md-10 ml-auto contact-info">
                        <p><span class="d-block">Address:</span>
                            <span> k129/20 Tieu la Street, <br> Hai chau, Da nang</span></p>
                        <p><span class="d-block">Phone:</span> <span> (+84) 931 999 031</span></p>
                        <p><span class="d-block">Email:</span> <span> toilatoi8624@gmail.com</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('views.layouts.index.people')


@include('views.layouts.footer')

</body>

</html>
