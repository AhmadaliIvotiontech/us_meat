<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Home_banner;
use App\Models\admin\Meat_slider;
use App\Models\admin\Home_section;
use App\Models\admin\Testimonial;
use App\Models\admin\Where_to_buy;
use App\Models\admin\Footer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_banners = Home_banner::all();
        $all_meat_slider = Meat_slider::all();
        $all_section = Home_section::first();
        $all_testimonial = Testimonial::all();
        $all_where_to_buy = Where_to_buy::all();
        $footer = Footer::first();
        // dd($all_where_to_buy);
        return view('frontend/home',compact('all_banners','all_meat_slider','all_section','all_testimonial','all_where_to_buy','footer'));
    }
    
}
