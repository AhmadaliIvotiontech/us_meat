<?php

namespace App\Http\Controllers\backend\admin\master\dropdown;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Dropdown;
use Session;
use Hash;
use Carbon\Carbon;

class DropdownController extends Controller
{
    public function index()
    {
        $all_data = Dropdown::all();
        return view('backend/admin/master/dropdown/list',compact('all_data'));
    }
    public function add()
    {
        return view('backend/admin/master/dropdown/add');
    }
    public function create(Request $request)
    {       
        $credentials = $request->validate([
            "page_name" => ['required'],
            "dropdown_name" => ['required'],
            "dropdown_value" => ['required'],
            "status" => ['required']
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();

        $result = Dropdown::insertGetId($credentials);
        // dd($request->all());
        if($result){
            return redirect()->back()->with('status-s', "Dropdown added successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function checkUploadedFileProperties($extension, $fileSize)
    {
            // dd($extension);
        $valid_extension = array("png", "jpg","jpeg"); //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb
        if (in_array(strtolower($extension), $valid_extension)) {
        if ($fileSize <= $maxFileSize) {
            $valid = array('status' => true,'message'=> '');

             return json_encode($valid);
        } else {
            $valid = array('status' => false,'message'=> 'No file was uploaded');

             return json_encode($valid);
        // throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
        }
        $valid = array('status' => true,'message'=> '');

             return json_encode($valid);
        } else {
            
            $valid = array('status' => false,'message'=> 'Invalid file extension');

             return json_encode($valid);
            // dd($extension);
        // throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
        }
    }
    public function delete($id)
    {
        $result = Dropdown::find($id)->delete();
        if($result){
            return redirect()->back()->with('status-s', "Dropdown deleted successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function show($id)
    {
        
        $all_data = Dropdown::find($id);
        return view('backend/admin/master/dropdown/edit', compact('all_data'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            "page_name" => ['required'],
            "dropdown_name" => ['required'],
            "dropdown_value" => ['required'],
            "status" => ['required']
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
       
        
        $id = $request->input('id');
        $result = Dropdown::find($id);
        // dd($id);
        $result->update($credentials);
        // 
        if($result){
            return redirect()->back()->with('status-s', "Dropdown updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
