<?php

namespace App\Http\Controllers\backend\admin\master\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\About_section;
use Session;
use Hash;
use Carbon\Carbon;

class SectionsController extends Controller
{
    public function index()
    {
        $all_data = About_section::first();
        // echo "<pre>";print_r($all_data);echo "</pre>";exit;
        return view('backend/admin/master/about/sections/edit',compact('all_data'));
    }
    public function checkUploadedFileProperties($extension, $fileSize)
    {
            // dd($extension);
        $valid_extension = array("png", "jpg","jpeg","mp4"); //Only want csv and excel files
        $maxFileSize = 9999097152; // Uploaded file size limit is 2mb
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
            "us_meat_tooltip_txt" => ['required'],
            "us_meat_description" => ['required'],
            "us_beef_tooltip_txt" => ['required'],
            "us_beef_description" => ['required'],
            "us_pork_tooltip_txt" => ['required'],
            "us_pork_description" => ['required'],
            "text_1" => ['required'],
            "text_2" => ['required'],
            "description" => ['required'],
            "btn_txt" => ['required'],
            "btn_link" => ['required'],
            "text_3" => ['required'],
            "text_4" => ['required'],
            "description_1" => ['required'],
            "description_2" => ['required'],            
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
                $fileName = 'banner_img'.time().''.$file->getClientOriginalName();
                $destinationPath = 'backend/about/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['banner_img'] = $request->input('temp_banner_img');
        }
        $file = $request->file('us_meat_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'us_meat_img'.time().''.$file->getClientOriginalName();
                $destinationPath = 'backend/about/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['us_meat_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['us_meat_img'] = $request->input('temp_us_meat_img');
        }
        $file = $request->file('us_beef_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'us_beef_img'.time().''.$file->getClientOriginalName();
                $destinationPath = 'backend/about/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['us_beef_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['us_beef_img'] = $request->input('temp_us_beef_img');
        }
        $file = $request->file('us_pork_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'us_pork_img'.time().''.$file->getClientOriginalName();
                $destinationPath = 'backend/about/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['us_pork_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['us_pork_img'] = $request->input('temp_us_pork_img');
        }
        $file = $request->file('img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'img'.time().''.$file->getClientOriginalName();
                $destinationPath = 'backend/about/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['img'] = $request->input('temp_img');
        }
        $file = $request->file('chart_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'chart_img'.time().''.$file->getClientOriginalName();
                $destinationPath = 'backend/about/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['chart_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['chart_img'] = $request->input('temp_chart_img');
        }

        $file = $request->file('video_link'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'V_'.time().''.$file->getClientOriginalName();
                $destinationPath = 'backend/about/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['video_link'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['video_link'] = $request->input('temp_video_link');
        }
        
       
        // dd($credentials);
        $id = $request->input('id');
        $result = About_section::find($id);
        $result->update($credentials);
        // dd($result);
        if($result){
            return redirect()->back()->with('status-s', "About Sections updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
