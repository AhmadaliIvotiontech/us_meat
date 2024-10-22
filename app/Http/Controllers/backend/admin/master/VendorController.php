<?php

namespace App\Http\Controllers\backend\admin\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Vendor;
use Session;
use Hash;
use Carbon\Carbon;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();
        $vendors = json_encode($vendors, true);
        return view('backend/admin/master/vendor/add', compact('vendors'));
    }

    public function create(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required','unique:Vendors,email'],
            'password' => ['required'],
            'status' => ['required'],
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['password'] = Hash::make($request->input('password'));
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
        $result = Vendor::create($credentials);
        // dd($credentials);
        if($result){
            return redirect()->back()->with('status-s', "Vendor added successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function list()
    {
        $Vendors = Vendor::all();
        // $Vendors = json_encode($Vendors, true);
        return view('backend/admin/master/vendor/list', compact('Vendors'));
    }
    public function delete($id)
    {
        // echo $id;
        $result = Vendor::find($id)->delete();
        
        // $result = delete($Vendors);
        if($result){
            return redirect()->back()->with('status-s', "Vendor deleted successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
        // // $Vendors = json_encode($Vendors, true);
        // return view('backend/admin/master/Vendor/list', compact('Vendors'));
    }

    public function show($id)
    {
        $vendor = Vendor::find($id);
        $vendor_all = Vendor::all();
        // dd($Vendor);
        return view('backend/admin/master/vendor/edit', compact('vendor','vendor_all'));
    }

    public function update(Request $request)
    {
        ;
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'status' => ['required'],
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['password'] = Hash::make($request->input('password'));
        $credentials['updated_by'] = $logged_user_id;
        $credentials['updated_at'] = Carbon::now();
        $id = $request->input('id');
        $VendorData = Vendor::find($id);
        $VendorData->update($credentials);
        // dd($request->all());
        // $result = Vendor::create($credentials);
        // dd($credentials);
        if($VendorData){
            return redirect()->back()->with('status-s', "Vendor updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
