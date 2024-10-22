<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Competitor;
use App\Models\admin\Recipe;
use App\Models\admin\Recipes_details_section;
use App\Models\admin\Footer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class RecipesDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // echo "<pre>";print_r($request->all());echo "</pre>";exit;
        $recipes = Recipe::where('id', $request['key'])->first();
        $all_section = Recipes_details_section::where('recipe_id', $request['key'])->get();
        $all_section = $all_section[0];
        $competitor = Competitor::latest()->take(3)->get();
        $footer = Footer::first();
        
        return view('frontend/recipes-details',compact('all_section','competitor','footer','recipes'));
    }
    
}
