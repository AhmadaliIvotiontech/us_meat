<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Company_detail;
use Session;
use Hash;
use Illuminate\Support\Str;
use Mail;


class ForgotPasswordController extends Controller
{
    public function recoverpassword(Request $request)
    {
        // dd($request->all());   
        $credentials = $request->validate([
            'ForgotEmail' => ['required', 'email']
        ]);
        $check = User::where('email','=',$request->ForgotEmail)->first();
         if(!$check){
                return back()->withErrors([
                    'email' => 'The provided email do not match our records.',
                ]);
         }else{
            $hashed_random_password = Str::random(10);
            $dz = ['email'=>$check->email,'password'=>$hashed_random_password];
            $id =$check->id;
            $hashed_random_password = Hash::make($hashed_random_password);
            $storeData = User::find($id);
            $storeData->password = $hashed_random_password;
            $storeData->update();
            // To trigger email
            $data = recoverpass($dz);
            return back()->withErrors([
                'email-success' => 'Mail sent successfully',
            ]);
   
            
         }
        
        return redirect('/');
    }

}
