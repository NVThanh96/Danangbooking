
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
{{--<script src="{{asset('js/popper.min.js')}}"></script>--}}
<script src="{{asset('js/popper1.min.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>


<script src="{{asset('js/aos.js')}}"></script>

<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/jquery.timepicker.min.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
<script>
    // JavaScript code to show/hide the iframe on button click
    document.getElementById('show-iframe').addEventListener('mouseover', function() {
        document.getElementById('iframe-container').style.display = 'block';
    });

    document.getElementById('close-iframe').addEventListener('mouseover', function() {
        document.getElementById('iframe-container').style.display = 'none';
    });
</script>

<script>
    // JavaScript code to toggle the active class on <li> elements
    var navLinks = document.querySelectorAll('.nav-item');

    for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener('click', function() {
            // Remove the active class from all <li> elements
            for (var j = 0; j < navLinks.length; j++) {
                navLinks[j].classList.remove('active');
            }

            // Add the active class to the parent <li> element of the clicked <a> element
            this.classList.add('active');
        });
    }
</script>

<section class="section bg-image overlay" style="background-image: url({{asset('images/hero_4.jpg')}});">

    <div class="container">
        @include('views.layouts.map')
        <div class="row align-items-center">
            <div class="col-12 col-md-8 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
                <h2 style="margin-left: 12%" class="text-white font-weight-bold">A Best Place To Stay.Reserve Now!</h2>
            </div>
            <div class="col-12 col-md-4 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
                <a style="margin-right: 60%" href="{{route('index.reservation')}}" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve
                    Now</a>
            </div>
        </div>
    </div>
</section>
<footer class="section footer-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-3 mb-5">
                <ul class="list-unstyled link">
                    <li><a href="">About Us</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Hotels</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <ul class="list-unstyled link">
                    <li><a href="#">The Rooms &amp; Suites</a></li>
                    <li><a href="{{route('index.about')}}">About Us</a></li>
                    <li><a href="{{route('index.contact')}}">Contact Us</a></li>
                    <li><a href="#">Restaurant</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5 pr-md-5 contact-info">
                <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
                <p><span class="d-block"><span
                            class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> k129/20 Tieu la Street, <br> Hai chau, Da nang</span></p>
                <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span>
                    <span> (+84) 931 999 031</span>
                </p>
                <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span>
                    <span> toilatoi8624@gmail.com</span>
                </p>
            </div>
            <div class="col-md-3 mb-5">
                <p>Sign up for our newsletter</p>
                <form action="#" class="footer-newsletter">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email...">
                        <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-5">
            <p class="col-md-6 text-left">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                All rights reserved
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>

            <p class="col-md-6 text-right social">
                <a href=""><span class="fa fa-tripadvisor"></span></a>
                <a href="https://www.facebook.com/NguyenVanThanh2902/"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
                <a href="#"><span class="fa fa-vimeo"></span></a>
            </p>
        </div>
    </div>
</footer>
