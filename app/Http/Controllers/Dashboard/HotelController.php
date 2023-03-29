<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Mail\OTPVerification;
use App\Models\Actors\User;
use App\Models\Customer;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {
        $dataAll = [];
        $dataSearch = [];
        $checkin = $request->input('checkin_date');
        $checkout = $request->input('checkout_date');
        $adults = $request->input('adult_number');
        $children = $request->input('child_number');
        $star = $request->input('star');
        $price = $request->input('filter_price');
        $hotels = Hotel::join('rooms', 'hotels.id', '=', 'rooms.idHotel');
        if (empty($checkin) && empty($checkout) && empty($adults) && empty($child)) {
            $hotels
                ->select(
                    'hotels.id',
                    'hotels.image',
                    'hotels.rate',
                    'hotels.name',
                    'hotels.description',
                    'rooms.price'
                )->distinct('hotels.id')
                ->orderBy('rooms.price');
            if (isset($price)) {
                switch ($price) {
                    case 'between100to200':
                        $hotels
                            ->whereBetween('price', [100, 200]);
                        break;
                    case 'between200to300':
                        $hotels->whereBetween('price', [200, 300]);
                        break;
                    case 'higher300':
                        $hotels->where('price', '>=', 300);
                        break;
                };
            } else if (isset($star)) {
                $hotels->where('rate', '=', $star);
            } else if (isset($request->filter)) {
                if ($request->filter == 'ATZ') {
                    $hotels->orderBy('price', 'asc');
                } else if ($request->filter == 'ZTA') {
                    $hotels->orderBy('price', 'desc');
                }
            }
            $hotels = $hotels->paginate(8, ['*'], 'page', $request->input('page'));
            $dataAll['hotels'] = $hotels;
        } else {
            $hotels = DB::table('hotels')
                ->join('rooms', 'hotels.id', '=', 'rooms.idHotel')
                /*->join('bookingDetails', 'hotels.id', '=', 'bookingDetails.idHotel')*/
                ->select(
                    'hotels.id',
                    'hotels.image',
                    'hotels.rate',
                    'hotels.name',
                    'hotels.description',
                    'rooms.price'
                )
                ->where('adultNumber', '=', $adults)
                ->Where('childNumber', '=', $children)
                /*->where('bookingDetail.checkin', '>=', $checkin)
                ->where('bookingDetail.checkout', '<=', $checkout)*/
                ->paginate(8);
            $dataSearch['hotels'] = $hotels;
        }

        $rooms = Room::join('roomCategories', 'rooms.idCategoryRoom', '=', 'roomCategories.id')
            ->join('discounts', 'rooms.idDiscount', '=', 'discounts.id')
            ->select(
                'rooms.id',
                'rooms.price',
                'rooms.image',
                'rooms.content',
                'roomCategories.name',
                'discounts.type',
                'discounts.discount'
            )
            ->get();
        $dataAll['rooms'] = $rooms;

        return view('views\hotels', $dataAll, $dataSearch);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public
    function create($id)
    {
        $data = [];
        $room = Room
            ::with(['discount', 'hotel'])
            ->find($id);
        $data['room'] = $room;
        session(['room' => $room]);
        $user = new User();
        $data['user'] = $user;
        return view('views\booking\booking', $data, compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
    }

    public function ChechOtp(CheckinBeforeCheckout $request)
    {

        return \view();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\c $c
     * @return Application|Factory|View
     */
    public
    function show($id)
    {
        $data = [];
        $hotelDetails = Hotel::where('id', $id)->get();
        $data['hotelDetails'] = $hotelDetails;

        $services = Hotel::join('services', 'hotels.id', '=', 'services.idHotel')
            ->select(
                'hotels.id',
                'services.id',
                'services.name',
                'services.quantity',
                'services.price'
            );
        $services->get();
        $data['services'] = $services;
        $rooms = Room::join('roomCategories', 'rooms.idCategoryRoom', '=', 'roomCategories.id')
            ->join('discounts', 'rooms.idDiscount', '=', 'discounts.id')
            ->join('hotels', 'rooms.idHotel', '=', 'hotels.id')
            ->select(
                'rooms.id',
                'rooms.price',
                'rooms.image',
                'rooms.content',
                'roomCategories.name',
                'discounts.type',
                'discounts.discount'
            )->where('hotels.id', $id)
            ->where('rooms.status', '=', 1)
            ->get();
        $allRooms = Room::join('roomCategories', 'rooms.idCategoryRoom', '=', 'roomCategories.id')
            ->join('hotels', 'rooms.idHotel', '=', 'hotels.id')
            ->select(
                'rooms.id',
                'rooms.price',
                'rooms.image',
                'rooms.content',
                'rooms.status',
                'roomCategories.name'
            )->where('hotels.id', $id)
            ->where('rooms.status', '=', 1)
            ->orderBy('rooms.price', 'asc')
            ->get();
        $data['rooms'] = $rooms;
        $data['allRooms'] = $allRooms;
        return \view('views.hotels.hotelDetails', $data, compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\c $c
     * @return \Illuminate\Http\Response
     */
    public
    function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\c $c
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\c $c
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(c $c)
    {
        //
    }

}
