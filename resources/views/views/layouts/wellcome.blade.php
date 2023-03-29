<section class="py-5 bg-light">
    <div style="margin: 0 10%" class="">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                <img src="{{ asset('images/du-lich-da-nang.jpg') }}" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                <h3 class="heading">Wellcome To Da Nang!</h3>
                <p style="font-size: 25px" class="mb-4">Da Nang is a beautiful coastal city located in central Vietnam. With its stunning natural scenery, rich history and culture, and modern amenities, Da Nang has become a popular destination for both domestic and international tourists.</p>
                <p><a id="show-iframe" class="btn btn-primary text-white py-2 mr-3">Learn More</a>
                    <span style="font-size: 25px" class="mr-3 font-family-serif"><em>or</em></span>
                    <a style="font-size: 25px" href="https://www.youtube.com/watch?v=B_mKsTBFYiU" data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
                <div id="iframe-container" style="display:none;font-size: 28px">
                    <button id="close-iframe"><i class="fa-solid fa-x" ></i></button>
                    <iframe id="iframe" src="{{ url(route('details')) }}"  style="background-color: transparent;" allowtransparency="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
