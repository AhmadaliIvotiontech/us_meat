<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('backend.admin.login');
    }
    
    public function authenticate(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $loggedin_user = Auth::User();
            
            $request->session()->put('user', $loggedin_user);
            $request->session()->regenerate();
            $data = $request->session()->all();
            // echo "<pre>";
            // print_r($loggedin_user['role_id']);
            // echo "</pre>";
            // exit();
            if($loggedin_user['role_id'] == 1)
            {
                return redirect(route('masterDashboard'));
            }
            else if($loggedin_user['role_id'] == 2){
                return redirect(route('subadminDashboard'));
            }
            else if($loggedin_user['role_id'] == 3){
                echo "Vendor";
            }
            else {
                echo "customer";
            }
        } 
        
        return back()->withErrors([
            'wrong_creden' => 'The provided credentials do not match our records.',
        ]);
    }
}
