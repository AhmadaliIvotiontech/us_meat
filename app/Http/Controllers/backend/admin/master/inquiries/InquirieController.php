<?php

namespace App\Http\Controllers\backend\admin\master\inquiries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Home_banner;
use Session;
use Hash;
use Carbon\Carbon;

class InquirieController extends Controller
{
    public function index()
    {
        $all_banners = Home_banner::all();
        return view('backend/admin/master/inquiries/list',compact('all_banners'));
    }
    public function add()
    {
        return view('backend/admin/master/homepage/banner/add');
    }
    public function create(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            "text_1" => ['required'],
            "text_2" => ['required'],
            "text_3" => ['required'],
            "button_text" => ['required'],
            "button_link" => ['required'],
            "status" => ['required']   
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();

        
        $file = $request->file('bg_image'); 
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
                $destinationPath = 'backend/homepage/banner';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_bg_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }
        $file = $request->file('main_iamge'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'main-img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/homepage/banner';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_main_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }
        $file = $request->file('trademark_image'); 
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
                $destinationPath = 'backend/homepage/banner';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_trademark_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }
        // dd($credentials);
        $result = Home_banner::insert($credentials);
        // dd($result);
        // dd($credentials);
        if($result){
            return redirect()->back()->with('status-s', "Banner added successfully!");
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
        $result = Home_banner::find($id)->delete();
        if($result){
            return redirect()->back()->with('status-s', "Banner deleted successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function show($id)
    {

        $banner = Home_banner::find($id);
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
            "status" => ['required']   
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
       
        // dd($credentials);
        $file = $request->file('bg_image'); 
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
                $destinationPath = 'backend/homepage/banner';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_bg_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['banner_bg_img'] = $request->input('temp_bg_image');
        }

        $file = $request->file('main_iamge'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'main-img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/homepage/banner';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_main_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['banner_main_img'] = $request->input('temp_main_iamge');
        }

        $file = $request->file('trademark_image'); 
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
                $destinationPath = 'backend/homepage/banner';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_trademark_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['banner_trademark_img'] = $request->input('temp_trademark_image');
        }
       
        // dd($credentials);
        // $result = Categorie::insert($credentials);
        $id = $request->input('id');
        // dd($id);
        $result = Home_banner::find($id);
        $result->update($credentials);
        // dd($credentials);
        if($result){
            return redirect()->back()->with('status-s', "Banner updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
