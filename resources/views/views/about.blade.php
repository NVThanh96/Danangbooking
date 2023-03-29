<!DOCTYPE HTML>
<html>

@include('views.layouts.header')


<body>
@include('views.layouts.menu')

    <section class="site-hero inner-page overlay" style="background-image: url({{ asset('images/about-us.jpg') }})"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <h1 class="heading mb-3">About Us</h1>
                    <ul class="custom-breadcrumbs mb-4">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>&bullet;</li>
                        <li>About</li>
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

    @include('views.layouts.wellcome')

    <div class="container section">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7 mb-5">
                <h2 class="heading" data-aos="fade-up">Leadership</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="block-2">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../../public/images/person_3.jpg);">
                            <div class="box">
                                <h2>Will Peters</h2>
                                <p>President</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text by the name of
                                    Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="{{ asset('images/du-lich-da-nang.jpg') }}" alt="">
                                </div>
                                <div class="name align-self-center">Will Peters <span
                                        class="position">President</span></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .flip-container -->
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="block-2">
                    <!-- .hover -->
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../../public/images/person_1.jpg);">
                            <div class="box">
                                <h2>Jane Williams</h2>
                                <p>Business Manager</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text by the name of
                                    Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/person_1.jpg" alt="">
                                </div>
                                <div class="name align-self-center">Jane Williams <span class="position">Business
                                        Manager</span></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .flip-container -->
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="block-2">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../../public/images/person_2.jpg);">
                            <div class="box">
                                <h2>Jeffrey Neddery</h2>
                                <p>Marketing Director</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text by the name of
                                    Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="../../../public/../../../public/images/person_2.jpg" alt="">
                                </div>
                                <div class="name align-self-center">Jeffrey Neddery <span class="position">Marketing
                                        Director</span></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .flip-container -->
            </div>
        </div>
    </div>
    <!-- END .block-2 -->

<section class="section slider-section bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Photos</h2>
                <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                    Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="slider-item">
                        <a href="{{ asset('images/slider-1.jpg') }}" data-fancybox="images"
                           data-caption="Caption for this image"><img src="{{ asset('images/slider-1.jpg') }}"
                                                                      alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ asset('images/slider-2.jpg') }}" data-fancybox="images"
                           data-caption="Caption for this image"><img src="{{ asset('images/slider-2.jpg') }}"
                                                                      alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ asset('images/slider-3.jpg') }}" data-fancybox="images"
                           data-caption="Caption for this image"><img src="{{ asset('images/slider-3.jpg') }}"
                                                                      alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ asset('images/slider-4.jpg') }}" data-fancybox="images"
                           data-caption="Caption for this image"><img src="{{ asset('images/slider-4.jpg') }}"
                                                                      alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ asset('images/slider-5.jpg') }}" data-fancybox="images"
                           data-caption="Caption for this image"><img src="{{ asset('images/slider-5.jpg') }}"
                                                                      alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ asset('images/slider-6.jpg') }}" data-fancybox="images"
                           data-caption="Caption for this image"><img src="{{ asset('images/slider-6.jpg') }}"
                                                                      alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ asset('images/slider-7.jpg') }}" data-fancybox="images"
                           data-caption="Caption for this image"><img src="{{ asset('images/slider-7.jpg') }}"
                                                                      alt="Image placeholder" class="img-fluid"></a>
                    </div>
                </div>
                <!-- END slider -->
            </div>

        </div>
    </div>
</section>
<!-- END section -->

    @include('views.layouts.footer')
</body>

</html>
