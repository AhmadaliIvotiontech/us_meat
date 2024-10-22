<?php

namespace App\Http\Controllers\backend\admin\master\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Meat_slider;
use Session;
use Hash;
use Carbon\Carbon;

class MeatSliderController extends Controller
{
    public function index()
    {
        $all_data = Meat_slider::all();
        return view('backend/admin/master/homepage/meat_slider/list',compact('all_data'));
    }
    public function add()
    {
        return view('backend/admin/master/homepage/meat_slider/add');
    }
    public function create(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            "slider_name" => ['required'],
            "button_text" => ['required'],
            "button_link" => ['required'],
            "status" => ['required']   
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();

        
        $file = $request->file('slider_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'slider-img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/homepage/meat_slider';
                $file->storeAs($destinationPath, $fileName);
                $credentials['slider_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }
        $file = $request->file('trademark_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'trademark-img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/homepage/meat_slider';
                $file->storeAs($destinationPath, $fileName);
                $credentials['trademark_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }
        // dd($credentials);
        $result = Meat_slider::insert($credentials);
        // dd($result);
        // dd($result);
        if($result){
            return redirect()->back()->with('status-s', "Slider added successfully!");
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
        $result = Meat_slider::find($id)->delete();
        if($result){
            return redirect()->back()->with('status-s', "Slider deleted successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function show($id)
    {

        $banner = Meat_slider::find($id);
        // dd($user);
        return view('backend/admin/master/homepage/meat_slider/edit', compact('banner'));
    }
    public function update(Request $request)
    {
        
        $credentials = $request->validate([
            "slider_name" => ['required'],
            "button_text" => ['required'],
            "button_link" => ['required'],
            "status" => ['required']   
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
       
        // dd($credentials);
        $file = $request->file('slider_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'bg-img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/homepage/meat_slider';
                $file->storeAs($destinationPath, $fileName);
                $credentials['slider_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['slider_img'] = $request->input('temp-slider_img');
        }

        $file = $request->file('trademark_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'trademark-img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/homepage/meat_slider';
                $file->storeAs($destinationPath, $fileName);
                $credentials['trademark_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['trademark_img'] = $request->input('temp-trademark_img');
        }
       
        // dd($credentials);
        // $result = Categorie::insert($credentials);
        $id = $request->input('id');
        // dd($id);
        $result = Meat_slider::find($id);
        $result->update($credentials);
        // dd($credentials);
        if($result){
            return redirect()->back()->with('status-s', "Slider updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
