<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Competitor;
use App\Models\admin\Experience;
use App\Models\admin\Footer;
use App\Models\admin\Dropdown;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_section = Experience::first();
        $competitor = Competitor::all();
        $footer = Footer::first();
        $dropdown = Dropdown::all();
        // echo "<pre>";print_r($all_section);echo "</pre>";exit;
        return view('frontend/experience',compact('all_section','competitor','footer','dropdown'));
    }
    
}
