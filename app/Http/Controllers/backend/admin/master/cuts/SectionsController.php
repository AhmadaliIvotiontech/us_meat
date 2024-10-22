<?php

namespace App\Http\Controllers\backend\admin\master\cuts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Cuts_section;
use Session;
use Hash;
use Carbon\Carbon;

class SectionsController extends Controller
{
    public function index()
    {
        $all_data = Cuts_section::first();
        // echo "<pre>";print_r($all_data);echo "</pre>";exit;
        return view('backend/admin/master/cuts/sections/edit',compact('all_data'));
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
    
    public function update(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            "text_1" => ['required'],
            "text_2" => ['required'],
            "text_3" => ['required'],
            "text_4" => ['required'],
            "text_5" => ['required'],
            "description" => ['required'],
            "btn_txt" => ['required'],
            "btn_link" => ['required'],
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
       
        // dd($credentials);
        $file = $request->file('banner_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'banner_img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/cuts/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['banner_img'] = $request->input('temp_banner_img');
        }
        $file = $request->file('banner_bg_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'banner_bg_img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/cuts/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_bg_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['banner_bg_img'] = $request->input('temp_banner_bg_img');
        }
        
        // dd($credentials);
        $id = $request->input('id');
        $result = Cuts_section::find($id);
        $result->update($credentials);
        // dd($result);
        if($result){
            return redirect()->back()->with('status-s', "Sections Details updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
