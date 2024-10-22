<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Home_banner;
use App\Models\admin\Meat_slider;
use App\Models\admin\Home_section;
use App\Models\admin\Testimonial;
use App\Models\admin\Where_to_buy;
use App\Models\admin\About_section;
use App\Models\admin\Footer;
use App\Models\admin\Dropdown;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_section = About_section::first();
        $footer = Footer::first();
        $dropdown = Dropdown::all();
        // dd($dropdown);
        return view('frontend/about',compact('all_section','footer','dropdown'));
    }
    
}
