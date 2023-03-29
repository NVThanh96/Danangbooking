    <section class="section" style="padding-bottom: 10px;">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12">
                <h2 class="heading" style="font-family:Castellar;Color: gray" data-aos="fade-up">Hotels</h2>
                <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                    Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>

        <div class="row">
            @foreach($hotels as $hotel)
                <div class="col-md-5 col-lg-3 text-center" data-aos="fade-up" enctype="multipart/form-data">
                    <a href="{{ route('show.hotels', $hotel->id) }}" class="room">
                        <img src="{{$hotel->image}}" alt="Free website template"
                             class="justify-center">
                        <div class="p-2 text-center room-info">
                            @switch($hotel->rate)
                                @case(1)
                                <p><i class="fa-solid fa-star"></i></p>
                                @break

                                @case(2)

                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                @break

                                @case(3)
                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                @break

                                @case(4)
                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                @break

                                @default
                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                            @endswitch
                            <h2>{{$hotel->name}}</h2>
                            <p style="font-size: 30px">{{$hotel->description}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
            <div style="margin-left: 43%">{{ $hotels->links() }}</div>
        </div>
    </section>





