<div class="col-md-5 col-lg-4 order-md-last">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your booking</span>

    </h4>
    <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 style="font-size: 20px" class="my-0"><b>{{$room->hotel->name}}</b></h6>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0"><i style="color: rgba(227,58,58,0.71)"
                                    class="fa-solid fa-location-dot"></i> {{$room->hotel->location}}</h6>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0"><i style="color: rgba(78,167,249,0.75)"
                                    class="fa-solid fa-map"></i> {{$room->hotel->address}}</h6>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0"><i style="color: rgba(34,180,51,0.72)"
                                    class="fa-solid fa-circle-info"></i> {{$room->hotel->description}}</h6>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <img height="200px" width="300px" src="{{$room->image}}">
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6>Room Number: {{$room->roomNumber}}</h6>
                <h6>Adult Number: {{$room->adultNumber}}</h6>
                <h6>Adult Number: {{$room->childNumber}}</h6>
                <h6>{{$room->content}}</h6>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
                <h6 class="my-0">Price</h6>
            </div>
            <span class="text-success">${{$room->price}}</span>
        </li>

        @php
            $discount =0;
            if (isset($room->discount)){
                if ($room->discount->type == '%'){
                    $discount = $room->price*($room->discount->discount)/100;
                }else{
                     $discount = $room->discount->discount;
                }
            }
            $priceHaveDiscount = $room->price-$discount;
        @endphp
        @if(empty($room->discount))
        @else
            @if ($room->discount->type == '%')
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                    </div>
                    <span class="text-success">- {{$room->discount->discount}} %</span>
                </li>
            @else
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                    </div>
                    <span class="text-success">− ${{$room->discount->discount}}</span>
                </li>
            @endif
        @endif
        <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$ {{$priceHaveDiscount}}</strong>
        </li>
    </ul>

</div>
