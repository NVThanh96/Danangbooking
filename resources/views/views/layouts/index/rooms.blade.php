<section class="section testimonial-section" style="background: #f2f4fb">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" style="font-family:Castellar;Color: gray" data-aos="fade-up">Rooms</h2>
            </div>
        </div>
        <div style="margin: 0% 5%" class="row">
            <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200" enctype="multipart/form-data">
                @foreach($roomcategories as $roomcategory)
                    <div class="testimonial text-center slider-item">
                        <figure class="img-wrap">
                            <img src="{{$roomcategory->image}}" alt="Free website template"
                                 class="img-fluid">
                        </figure>
                        <h2 style="color: orange">{{$roomcategory->name}}</h2>
                        <p style="font-size: 25px"><em>{{$roomcategory->price}}<br>{{$roomcategory->description }}</em></p>
                    </div>
                @endforeach
            </div>
            <!-- END slider -->

        </div>

</section>
