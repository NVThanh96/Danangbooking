<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomCategory;
use Illuminate\Http\Request;
use App\Models\Hotel;

/**
 * Class Dashboard
 * @package App\Http\Controllers
 */
class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $roomcategories = RoomCategory::get();
        $hotels = Hotel::paginate(8);
        return view('views\index', compact('hotels','roomcategories'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function details()
    {
        return view('views\layouts\details');
    }

}
