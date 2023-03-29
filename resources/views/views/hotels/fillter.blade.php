<div class="col-md-3"></div>

<div class="col-md-2">
    <div class="row">
        <div class="field-icon-wrap">
            <select style="text-align: center" name="filter_price" id="price" class="form-control">
                <option style="justify-content: center" value="">--Choice Price--</option>
                <option value="between100to200">100$ to 200$</option>
                <option value="between200to300">200$ to 300$</option>
                <option value="higher300">Higher than 300$</option>
            </select>
        </div>
    </div>
</div>

<div style="" class="col-md-2 mb-3 mb-md-0 col-lg-1">
    <div style="margin-top: 10px" class="field-icon-wrap">
        <a href="{{ route('index.hotels', ['filter' => 'ATZ']) }}"> <i style="font-size: 30px"
                                                                       class="fa-solid fa-arrow-down-a-z"></i></a>
    </div>
</div>
<div class="col-md-2 mb-3 mb-md-0 col-lg-1">
    <div style="margin-top: 10px" class="field-icon-wrap">
        <a href="{{ route('index.hotels', ['filter' => 'ZTA']) }}"> <i style="font-size: 30px"
                                                                       class="fa-solid fa-arrow-up-a-z"></i></a>
    </div>
</div>
<div class="col-md-3 mb-3 mb-md-0 col-lg-3">
    <div class="row">
        <div class="field-icon-wrap">
            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
            <select name="star" id="star" class="form-control">
                <option value="">All</option>
                <option value="3">3 stars</option>
                <option value="4">4 stars</option>
                <option value="5">5 stars</option>
            </select>
        </div>
    </div>
</div>
<br>
<div style="margin: 1% 0 0 45%" class="col-md- col-lg-3 align-self-end ">
    <button class="btn btn-primary  text-white"><i class="fa-solid fa-arrows-rotate"></i></button>
</div>
