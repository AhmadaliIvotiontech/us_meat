<?php

namespace App\Http\Controllers\backend\admin\subadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Session;
use Hash;
use Carbon\Carbon;

class ProfileController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = session()->get('user'); 
        $id =   $data['id'];

        $data = User::find($id);
        $data = json_decode($data, true);

        // echo "<pre>";
        // print_r($data);
        // echo "<pre>";
        // exit();
        return view('backend.admin.subadmin.profile',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        if(!empty($request))
        {
            $id = $request->post('id');
            // echo $id;
            $storeData = User::find($id);
            $storeData->name = $request->post('UserName');
            $storeData->email =$request->post('UserEmail');
            $storeData->updated_by = $id;
            $storeData->updated_at = Carbon::now();
            $storeData->update();
            
            // echo $storeData;
            if($storeData)
            {
                $user_data['id'] = $id;
                $user_data['name'] = $request->post('UserName');
                $user_data['email'] = $request->post('UserEmail');
                $request->session()->put('user', $user_data);
                $request->session()->regenerate();
                // $data = $request->session()->all();
                // Session::put('user', $user_data);
                // dd($user_data);
                Session::put('success', 'Record Update Successfully');
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changepassword(Request $request)
    {

        // echo "hello ";
        // exit();
         $credentials = $request->validate([
            'Password' => ['required','regex:/([a-z].*[A-Z])|([A-Z].*[a-z])|([0-9])+([!,%,&,@,#,$,^,*,?,_,~])/'],
            'ConfrimPassword' => ['required', 'same:Password'],
        ]);

        $id = $request->post('id');
        $Password = $request->post('Password');
        $Password = Hash::make($Password);
        $storeData = User::find($id);
        $storeData->password = $Password;
        $storeData->update();
        
        if($storeData)
            {
                Session::put('success', 'Your password successfully changed');
                return redirect()->back();
            }

    }
}
