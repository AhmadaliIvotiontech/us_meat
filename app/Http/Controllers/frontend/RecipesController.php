<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Recipe;
use App\Models\admin\Recipes_section;
use App\Models\admin\Where_to_buy;
use Illuminate\Support\Facades\DB;
use App\Models\admin\Footer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_section = Recipes_section::first();
        $all_where_to_buy = Where_to_buy::all();
        $recipe = Recipe::all();
        $footer = Footer::first();
        
        $minutes  = []; $m = 0;
        $persons  = []; $p = 0;
        foreach ($recipe as $key) {
            $minutes[$m] = $key['preparation']; $m++;
            $persons[$m] = $key['serves']; $m++;
        }
        asort($minutes);
        $minutes = array_unique($minutes);
        asort($persons);
        $persons = array_unique($persons);
        // echo "<pre>";print_r($persons);echo "</pre>";exit;
        return view('frontend/recipes',compact('all_section','recipe','all_where_to_buy','minutes','persons','footer'));
    }
    public function fetch($radio,$d1,$d2)
    {

        if ($radio == 'Us Beef') {
            
            if ($d1 == 0 && $d2 == 0) {
                $query = Recipe::where("type", 'Us Beef')
                ->get();
            }elseif($d1 == 0){
                $query = Recipe::where("type", 'Us Beef')
                ->where("serves", $d2)
                ->get();
            }elseif($d2 == 0){
                $query = Recipe::where("type", 'Us Beef')
                ->where("preparation", $d1)
                ->get();
            }else {
                $query = Recipe::where("type", 'Us Beef')
                ->where("preparation", $d1)
                ->where("serves", $d2)
                ->get();
            }
        }elseif($radio == 'Us Pork'){
            if ($d1 == 0 && $d2 == 0) {
                $query = Recipe::where("type", 'Us Pork')
                ->get();
            }elseif($d1 == 0){
                $query = Recipe::where("type", 'Us Pork')
                ->where("serves", $d2)
                ->get();
            }elseif($d2 == 0){
                $query = Recipe::where("type", 'Us Pork')
                ->where("preparation", $d1)
                ->get();
            }else {
                $query = Recipe::where("type", 'Us Pork')
                ->where("preparation", $d1)
                ->where("serves", $d2)
                ->get();
            }
        }else{
            if ($d1 == 0 && $d2 == 0) {
                $query = Recipe::get();
            }elseif($d1 == 0){
                $query = Recipe::where("serves", $d2)
                ->get();
            }elseif($d2 == 0){
                $query = Recipe::where("preparation", $d1)
                ->get();
            }else {
                $query = Recipe::where("preparation", $d1)
                ->where("serves", $d2)
                ->get();
            }
        }
        // print_r($query);exit;
        $json = json_encode($query, true);
        echo  $json;
        // echo "<pre>";print_r($query);echo "</pre>";die;
        
    }
    
}
