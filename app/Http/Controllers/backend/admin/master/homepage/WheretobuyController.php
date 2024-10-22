<?php

namespace App\Http\Controllers\backend\admin\master\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Where_to_buy;
use Session;
use Hash;
use Carbon\Carbon;

class WheretobuyController extends Controller
{
    public function index()
    {
        $all_data = Where_to_buy::all();
        return view('backend/admin/master/homepage/where_to_buy/list',compact('all_data'));
    }
    public function add()
    {
        return view('backend/admin/master/homepage/where_to_buy/add');
    }
    public function create(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            "logo_txt" => ['required'],
            "logo_img" => ['required'],
            "status" => ['required']   
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();

        
        $file = $request->file('logo_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'logo-img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/homepage/where_to_buy';
                $file->storeAs($destinationPath, $fileName);
                $credentials['logo_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }
    
        $result = Where_to_buy::insert($credentials);
        // dd($result);
        if($result){
            return redirect()->back()->with('status-s', "Where To Buy added successfully!");
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
        $result = Where_to_buy::find($id)->delete();
        if($result){
            return redirect()->back()->with('status-s', "where_to_buy deleted successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function show($id)
    {

        $all_data = Where_to_buy::find($id);
        return view('backend/admin/master/homepage/where_to_buy/edit', compact('all_data'));
    }
    public function update(Request $request)
    {
        
        $credentials = $request->validate([
            "logo_txt" => ['required'],
            "status" => ['required']   
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
       
        // dd($credentials);
        $file = $request->file('logo_img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            if($data['status']){
                $fileName = 'logo-img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/homepage/where_to_buy';
                $file->storeAs($destinationPath, $fileName);
                $credentials['logo_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['logo_img'] = $request->input('temp_logo_img');
        }

    
       
        // dd($credentials);
        // $result = Categorie::insert($credentials);
        $id = $request->input('id');
        // dd($id);
        $result = Where_to_buy::find($id);
        $result->update($credentials);
        // dd($credentials);
        if($result){
            return redirect()->back()->with('status-s', "Where To Buy updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
