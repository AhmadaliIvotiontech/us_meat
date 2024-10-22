<?php

namespace App\Http\Controllers\backend\admin\master\recipes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Recipe;
use App\Models\admin\Recipes_details_section;
use Session;
use Hash;
use Carbon\Carbon;

class RecipesController extends Controller
{
    public function index()
    {
        $all_data = Recipe::all();
        return view('backend/admin/master/recipes/recipes/list',compact('all_data'));
    }
    public function add()
    {
        return view('backend/admin/master/recipes/recipes/add');
    }
    public function create(Request $request)
    {
        // dd($request->all());
        $Recipe = $request->validate([
            "type" => ['required'],
            // "category" => ['required'],
            // "sub_category" => ['required'],
            "text_1" => ['required'],
            "preparation" => ['required'],
            "serves" => ['required'],
            "button_text" => ['required'],
            // "button_link" => ['required'],
            // "youtube_link" => ['required'],
            // "documentation" => ['required'],
            "status" => ['required'],
            "img" => ['required'],   
            "check" => ['required']   
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $Recipe['created_by'] = $logged_user_id;
        $Recipe['created_at'] = Carbon::now();
        $Recipe['youtube_link'] = $request['YouTubecheck'];
        // dd($Recipe);
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
                $destinationPath = 'backend/recipes/recipes';
                $file->storeAs($destinationPath, $fileName);
                $Recipe['img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }
        
        $Recipe_id = Recipe::insertGetId($Recipe);
        // $Recipe_id = 777;
        $credentials = $request->validate([
            "rd_text_1" => ['required'],
            "text_2" => ['required'],
            "text_3" => ['required'],
        ]);
        
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
                $destinationPath = 'backend/recipes_details/sections';
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
                $destinationPath = 'backend/recipes_details/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_bg_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['banner_bg_img'] = $request->input('temp_banner_bg_img');
        }
        $arr_temp['section_1'] = $credentials;
        $credentials = [];
        if($request->input('YouTubecheck') == 1){
            $credentials = array(
                "video_link" => $request->input('video_link'),
                "video_text_1" => $request->input('video_text_1'),
                "video_text_2" => $request->input('video_text_2'),
                "video_text_description" => $request->input('video_text_description'),                
           );
           $file = $request->file('video_img'); 
            if(!empty($file))
            {
                $document = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileSize = $file->getSize();
                $temppath  = $file->getRealPath();
                $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
                $data = json_decode($is_valid, true); 
                if($data['status']){
                    $fileName = 'video_img'.time().'.'.$file->getClientOriginalName();
                    $destinationPath = 'backend/recipes_details/sections';
                    $file->storeAs($destinationPath, $fileName);
                    $credentials['video_img'] = $fileName;
                }else{
                    // If Uploaded file is invalid
                    return redirect()->back()->with('status-f', $data['message']);
                } 
            }else{
                $credentials['video_img'] = $request->input('temp_video_img');
            }
        }
        $arr_temp['YouTube_section'] = $credentials;
        $credentials = [];
        if($request->input('check') == 1){
            $credentials = array(
                "ingredientes_text_1" => $request->input('ingredientes_text_1'),
                "ingredientes_text_2" => $request->input('ingredientes_text_2'),
                "ingredientes" => $request->input('ingredientes'),
                "preparation_text_1" => $request->input('preparation_text_1'),
                "preparation_text_2" => $request->input('preparation_text_2'),
                "preparation_description" => $request->input('preparation_description'),
                "preparation_description_1" => $request->input('preparation_description_1'),
                "preparation_description_2" => $request->input('preparation_description_2'),
                "preparation_description_3" => $request->input('preparation_description_3'),
                "btn_txt" => $request->input('btn_txt'),
                "btn_link" => $request->input('btn_link'),
            );
            $file = $request->file('ingredientes_img'); 
            if(!empty($file))
            {
                $document = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileSize = $file->getSize();
                $temppath  = $file->getRealPath();
                $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
                $data = json_decode($is_valid, true); 
                if($data['status']){
                    $fileName = 'ingredientes_img'.time().'.'.$file->getClientOriginalName();
                    $destinationPath = 'backend/recipes_details/sections';
                    $file->storeAs($destinationPath, $fileName);
                    $credentials['ingredientes_img'] = $fileName;
                }else{
                    // If Uploaded file is invalid
                    return redirect()->back()->with('status-f', $data['message']);
                } 
            }else{
                $credentials['ingredientes_img'] = $request->input('temp_ingredientes_img');
            }
            $file = $request->file('preparation_img'); 
            if(!empty($file))
            {
                $document = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileSize = $file->getSize();
                $temppath  = $file->getRealPath();
                $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
                $data = json_decode($is_valid, true); 
                if($data['status']){
                    $fileName = 'preparation_img'.time().'.'.$file->getClientOriginalName();
                    $destinationPath = 'backend/recipes_details/sections';
                    $file->storeAs($destinationPath, $fileName);
                    $credentials['preparation_img'] = $fileName;
                }else{
                    // If Uploaded file is invalid
                    return redirect()->back()->with('status-f', $data['message']);
                } 
            }else{
                $credentials['preparation_img'] = $request->input('temp_preparation_img');
            }
            $file = $request->file('preparation_img_full'); 
            if(!empty($file))
            {
                $document = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileSize = $file->getSize();
                $temppath  = $file->getRealPath();
                $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
                $data = json_decode($is_valid, true); 
                if($data['status']){
                    $fileName = 'preparation_img_full'.time().'.'.$file->getClientOriginalName();
                    $destinationPath = 'backend/recipes_details/sections';
                    $file->storeAs($destinationPath, $fileName);
                    $credentials['preparation_img_full'] = $fileName;
                }else{
                    // If Uploaded file is invalid
                    return redirect()->back()->with('status-f', $data['message']);
                } 
            }else{
                $credentials['preparation_img_full'] = $request->input('temp_preparation_img_full');
            }
        }
        $arr_temp['details_section'] = $credentials;        
        $mergedArray = array_merge($arr_temp['section_1'], $arr_temp['YouTube_section'], $arr_temp['details_section']);
        
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $mergedArray['created_by'] = $logged_user_id;
        $mergedArray['created_at'] = Carbon::now();
        $mergedArray['text_1'] = $mergedArray['rd_text_1'];
        $mergedArray['recipe_id'] = $Recipe_id;
        unset($mergedArray['rd_text_1']);
        // dd($mergedArray);
        $Recipe_id = Recipes_details_section::insert($mergedArray);

        if($Recipe_id){
            return redirect()->back()->with('status-s', "Recipe added successfully!");
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
        $result = Recipe::find($id)->delete();
        if($result){
            return redirect()->back()->with('status-s', "Recipe deleted successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function show($id)
    {
        
        $all_data = Recipe::find($id);
        // echo "<pre>";print_r($all_data);echo "</pre>";exit;
        $all_data_rd = Recipes_details_section::where('recipe_id', '=', $id)->first();
        // dd($all_data_rd);
        // echo "<pre>";print_r($all_data_rd);echo "</pre>";exit;
        return view('backend/admin/master/recipes/recipes/edit', compact('all_data','all_data_rd'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            "type" => ['required'],
            "text_1" => ['required'],
            "preparation" => ['required'],
            "serves" => ['required'],
            "button_text" => ['required'],
            // "button_link" => ['required'],
            // "youtube_link" => ['required'],
            "status" => ['required'], 
            "check" => ['required'] 
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
        $credentials['youtube_link'] = $request['YouTubecheck'];
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
                $destinationPath = 'backend/recipes/recipes';
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
        $id = $request->input('id');
        $result = Recipe::find($id);
        $result->update($credentials);


        $credentials = $request->validate([
            "rd_text_1" => ['required'],
            "text_2" => ['required'],
            "text_3" => ['required'],
        ]);
        
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
                $destinationPath = 'backend/recipes_details/sections';
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
                $destinationPath = 'backend/recipes_details/sections';
                $file->storeAs($destinationPath, $fileName);
                $credentials['banner_bg_img'] = $fileName;
            }else{
                // If Uploaded file is invalid
                return redirect()->back()->with('status-f', $data['message']);
            } 
        }else{
            $credentials['banner_bg_img'] = $request->input('temp_banner_bg_img');
        }
        $arr_temp['section_1'] = $credentials;
        $credentials = [];
        if($request->input('YouTubecheck') == 1){
            $credentials = array(
                "video_link" => $request->input('video_link'),
                "video_text_1" => $request->input('video_text_1'),
                "video_text_2" => $request->input('video_text_2'),
                "video_text_description" => $request->input('video_text_description'),                
           );
           $file = $request->file('video_img'); 
            if(!empty($file))
            {
                $document = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileSize = $file->getSize();
                $temppath  = $file->getRealPath();
                $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
                $data = json_decode($is_valid, true); 
                if($data['status']){
                    $fileName = 'video_img'.time().'.'.$file->getClientOriginalName();
                    $destinationPath = 'backend/recipes_details/sections';
                    $file->storeAs($destinationPath, $fileName);
                    $credentials['video_img'] = $fileName;
                }else{
                    // If Uploaded file is invalid
                    return redirect()->back()->with('status-f', $data['message']);
                } 
            }else{
                $credentials['video_img'] = $request->input('temp_video_img');
            }
        }
        $arr_temp['YouTube_section'] = $credentials;
        $credentials = [];
        if($request->input('check') == 1){
            $credentials = array(
                "ingredientes_text_1" => $request->input('ingredientes_text_1'),
                "ingredientes_text_2" => $request->input('ingredientes_text_2'),
                "ingredientes" => $request->input('ingredientes'),
                "preparation_text_1" => $request->input('preparation_text_1'),
                "preparation_text_2" => $request->input('preparation_text_2'),
                "preparation_description" => $request->input('preparation_description'),
                "preparation_description_1" => $request->input('preparation_description_1'),
                "preparation_description_2" => $request->input('preparation_description_2'),
                "preparation_description_3" => $request->input('preparation_description_3'),
                "btn_txt" => $request->input('btn_txt'),
                "btn_link" => $request->input('btn_link'),
            );
            $file = $request->file('ingredientes_img'); 
            if(!empty($file))
            {
                $document = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileSize = $file->getSize();
                $temppath  = $file->getRealPath();
                $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
                $data = json_decode($is_valid, true); 
                if($data['status']){
                    $fileName = 'ingredientes_img'.time().'.'.$file->getClientOriginalName();
                    $destinationPath = 'backend/recipes_details/sections';
                    $file->storeAs($destinationPath, $fileName);
                    $credentials['ingredientes_img'] = $fileName;
                }else{
                    // If Uploaded file is invalid
                    return redirect()->back()->with('status-f', $data['message']);
                } 
            }else{
                $credentials['ingredientes_img'] = $request->input('temp_ingredientes_img');
            }
            $file = $request->file('preparation_img'); 
            if(!empty($file))
            {
                $document = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileSize = $file->getSize();
                $temppath  = $file->getRealPath();
                $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
                $data = json_decode($is_valid, true); 
                if($data['status']){
                    $fileName = 'preparation_img'.time().'.'.$file->getClientOriginalName();
                    $destinationPath = 'backend/recipes_details/sections';
                    $file->storeAs($destinationPath, $fileName);
                    $credentials['preparation_img'] = $fileName;
                }else{
                    // If Uploaded file is invalid
                    return redirect()->back()->with('status-f', $data['message']);
                } 
            }else{
                $credentials['preparation_img'] = $request->input('temp_preparation_img');
            }
            $file = $request->file('preparation_img_full'); 
            if(!empty($file))
            {
                $document = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileSize = $file->getSize();
                $temppath  = $file->getRealPath();
                $is_valid = $this->checkUploadedFileProperties($extension, $fileSize);
                $data = json_decode($is_valid, true); 
                if($data['status']){
                    $fileName = 'preparation_img_full'.time().'.'.$file->getClientOriginalName();
                    $destinationPath = 'backend/recipes_details/sections';
                    $file->storeAs($destinationPath, $fileName);
                    $credentials['preparation_img_full'] = $fileName;
                }else{
                    // If Uploaded file is invalid
                    return redirect()->back()->with('status-f', $data['message']);
                } 
            }else{
                $credentials['preparation_img_full'] = $request->input('temp_preparation_img_full');
            }
        }
        $arr_temp['details_section'] = $credentials;        
        $mergedArray = array_merge($arr_temp['section_1'], $arr_temp['YouTube_section'], $arr_temp['details_section']);
        
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $mergedArray['created_by'] = $logged_user_id;
        $mergedArray['created_at'] = Carbon::now();
        $mergedArray['text_1'] = $mergedArray['rd_text_1'];
        $mergedArray['recipe_id'] = $id;
        unset($mergedArray['rd_text_1']);
        $id = $request->input('rd_id');
        $result = Recipes_details_section::find($id);
        $result->update($mergedArray);
        if($result){
            return redirect()->back()->with('status-s', "recipes updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
