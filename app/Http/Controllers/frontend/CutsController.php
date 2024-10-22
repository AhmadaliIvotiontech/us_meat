<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Recipe;
use App\Models\admin\Cut;
use App\Models\admin\Cuts_section;
use Illuminate\Support\Facades\DB;
use App\Models\admin\Footer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class CutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_section = Cuts_section::first();
        $cuts = Cut::all();
        $footer = Footer::first();
        // echo "<pre>";print_r($cuts);echo "</pre>";exit;
        return view('frontend/cuts',compact('all_section','cuts','footer'));
    }
    public function fetch($type)
    {
        if ($type == "All") {
            $query = Cut::get();
        }else{
            $query = Cut::where("category", $type)
            ->get();
        }
        $json = json_encode($query, true);
        echo  $json;
        
    }
    public function fetch_v1($type,$part)
    {

        $query = Cut::where("category", $type)
        ->where("sub_category", $part)
        ->get();
        // print_r($query);exit;
        $json = json_encode($query, true);
        echo  $json;
        // echo "<pre>";print_r($query);echo "</pre>";die;
        
    }
    
}
