<?php

namespace App\Http\Controllers\backend\admin\master\experience;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Experience;
use Session;
use Hash;
use Carbon\Carbon;

class SectionsController extends Controller
{
    public function index()
    {
        $all_data = Experience::first();
        // echo "<pre>";print_r($all_data);echo "</pre>";exit;
        return view('backend/admin/master/experience/sections/edit',compact('all_data'));
    }
    
    public function checkUploadedFileProperties($extension, $fileSize)
    {
            // dd($extension);
        $valid_extension = array("mp4","png", "jpg","jpeg"); //Only want csv and excel files
        $maxFileSize = 9992097152; // Uploaded file size limit is 2mb
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
        $result = Experience::find($id)->delete();
        if($result){
            return redirect()->back()->with('status-s', "Banner deleted successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function show($id)
    {

        $banner = Experience::find($id);
        // dd($user);
        return view('backend/admin/master/experience/banner/edit', compact('banner'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            "text" => ['required'],
            "text_description" => ['required'],
            "text_1" => ['required'],
            "text_2" => ['required'],
            "description" => ['required'],
            "participants" => ['required'],
            "participants_description" => ['required'],
            "form_description" => ['required'],
            // "status" => ['required']   
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
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
                $destinationPath = 'backend/experience/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['banner_img'] = $request->input('temp_banner_img');
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
                $fileName = 'Img'.time().''.$file->getClientOriginalName();
                $destinationPath = 'backend/experience/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['img'] = $request->input('temp_img');
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
                $destinationPath = 'backend/experience/sections';
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
        // dd($id);
        $result = Experience::find($id);
        $result->update($credentials);
        // dd($credentials);
        if($result){
            return redirect()->back()->with('status-s', "Section updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
