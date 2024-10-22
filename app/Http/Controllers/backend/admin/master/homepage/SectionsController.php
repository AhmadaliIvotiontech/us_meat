<?php

namespace App\Http\Controllers\backend\admin\master\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Home_section;
use Session;
use Hash;
use Carbon\Carbon;

class SectionsController extends Controller
{
    public function index()
    {
        $all_data = Home_section::first();
        // echo "<pre>";print_r($all_data);echo "</pre>";exit;
        return view('backend/admin/master/homepage/sections/edit',compact('all_data'));
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
        $result = Home_section::find($id)->delete();
        if($result){
            return redirect()->back()->with('status-s', "Banner deleted successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function show($id)
    {

        $banner = Home_section::find($id);
        // dd($user);
        return view('backend/admin/master/homepage/banner/edit', compact('banner'));
    }
    public function update(Request $request)
    {
        
        $credentials = $request->validate([
            "text_1" => ['required'],
            "text_2" => ['required'],
            "text_3" => ['required'],
            "button_text" => ['required'],
            "button_link" => ['required'],
            "description_1" => ['required'],
            "description_2" => ['required']
            // "status" => ['required']   
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
       
        // dd($credentials);
        $id = $request->input('id');
        // dd($id);
        $result = Home_section::find($id);
        $result->update($credentials);
        // dd($credentials);
        if($result){
            return redirect()->back()->with('status-s', "Section updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
