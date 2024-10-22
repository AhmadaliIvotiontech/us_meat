<?php

namespace App\Http\Controllers\backend\admin\master\experience;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Competitor;
use Session;
use Hash;
use Carbon\Carbon;

class CompetitorsController extends Controller
{
    public function index()
    {
        $all_data = Competitor::all();
        return view('backend/admin/master/experience/competitors/list',compact('all_data'));
    }
    public function add()
    {
        return view('backend/admin/master/experience/competitors/add');
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
            "preparation" => ['required'],
            "serves" => ['required'],
            "status" => ['required'],
            "img" => ['required']   
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();

        
        $file = $request->file('img'); 
        if(!empty($file))
        {
            $document = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $temppath  = $file->getRealPath();
            $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
            $data = json_decode($is_valid, true); 
            // dd($data);
            if($data['status']){
                $fileName = 'img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/experience/competitors';
                $file->storeAs($destinationPath, $fileName);
                $credentials['img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }
        // dd($request->all());
        $result = Competitor::insert($credentials);
        // dd($result);
        if($result){
            return redirect()->back()->with('status-s', "Competitor added successfully!");
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
        $result = Competitor::find($id)->delete();
        if($result){
            return redirect()->back()->with('status-s', "Competitor deleted successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function show($id)
    {

        $all_data = Competitor::find($id);
        return view('backend/admin/master/experience/competitors/edit', compact('all_data'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            "text_1" => ['required'],
            "text_2" => ['required'],
            "text_3" => ['required'],
            "button_text" => ['required'],
            "button_link" => ['required'],
            "preparation" => ['required'],
            "serves" => ['required'],
            "status" => ['required']
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
       
        // dd($credentials);
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
                $fileName = 'Img'.time().'.'.$file->getClientOriginalName();
                $destinationPath = 'backend/experience/competitors';
                $file->storeAs($destinationPath, $fileName);
                $credentials['img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['img'] = $request->input('temp_img');
        }

    
       
        // dd($credentials);
        // $result = Categorie::insert($credentials);
        $id = $request->input('id');
        // dd($id);
        $result = Competitor::find($id);
        $result->update($credentials);
        // dd($credentials);
        if($result){
            return redirect()->back()->with('status-s', "Competitors updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
