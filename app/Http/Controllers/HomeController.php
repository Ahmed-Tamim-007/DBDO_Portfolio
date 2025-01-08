<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Global_info;
use App\Models\Navbar;
use App\Models\HomeHeader;
use App\Models\HomeSecOne;
use App\Models\Stat;
use App\Models\Sub_Port;
use App\Models\Products;
use App\Models\Teams;
use App\Models\Reviews;

class HomeController extends Controller
{
    // Viewing function for the pages
    public function index()
    {
        $data = Global_info::first();
        $home_h = HomeHeader::first();
        $home_sec_1 = HomeSecOne::first();
        $stats = Stat::first();
        $s_p = Sub_Port::first();
        $reviews = Reviews::all();
        return view('home.index', compact('data', 'home_h', 'home_sec_1', 'stats', 's_p', 'reviews'));
    }

    public function about()
    {
        $data = Global_info::first();
        $home_h = HomeHeader::first();
        $stats = Stat::first();
        $teams = Teams::all();
        $reviews = Reviews::all();
        return view('home.about', compact('data', 'home_h', 'teams', 'reviews'));
    }

    public function services()
    {
        $data = Global_info::first();
        $home_h = HomeHeader::first();
        $products = Products::all();
        return view('home.service', compact('data', 'home_h', 'products'));
    }

    public function contact()
    {
        $data = Global_info::first();
        $home_h = HomeHeader::first();
        $stats = Stat::first();
        $s_p = Sub_Port::first();
        return view('home.contact', compact('data', 'home_h', 'stats', 's_p'));
    }
    // END of viewing function

    // Returning back function
    public function back() {
        return redirect()->back();
    }
}
