<?php

namespace App\Http\Controllers\backend\admin\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Session;
use Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $users = json_encode($users, true);
        return view('backend/admin/master/user/add', compact('users'));
    }

    public function create(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required','unique:users,email'],
            'password' => ['required'],
            'role_id' => ['required'],
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['password'] = Hash::make($request->input('password'));
        $credentials['created_by'] = $logged_user_id;
        $credentials['created_at'] = Carbon::now();
        $result = User::create($credentials);
        // dd($credentials);
        if($result){
            return redirect()->back()->with('status-s', "User added successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
    public function list()
    {
        $users = User::all();
        // $users = json_encode($users, true);
        return view('backend/admin/master/user/list', compact('users'));
    }
    public function delete($id)
    {
        // echo $id;
        $result = User::find($id)->delete();
        
        // $result = delete($users);
        if($result){
            return redirect()->back()->with('status-s', "User deleted successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
        // // $users = json_encode($users, true);
        // return view('backend/admin/master/user/list', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        $user_all = User::all();
        // dd($user);
        return view('backend/admin/master/user/edit', compact('user','user_all'));
    }

    public function update(Request $request)
    {
        ;
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'role_id' => ['required'],
        ]);
        $sessiondata = session()->get('user'); 
        $logged_user_id = $sessiondata['id'];
        $credentials['password'] = Hash::make($request->input('password'));
        $credentials['updated_by'] = $logged_user_id;
        $credentials['updated_at'] = Carbon::now();
        $id = $request->input('id');
        $userData = User::find($id);
        $userData->update($credentials);
        // dd($request->all());
        // $result = User::create($credentials);
        // dd($credentials);
        if($userData){
            return redirect()->back()->with('status-s', "User updated successfully!");
        }else{
            return redirect()->back()->with('status-f', 'Something went wrong!');
        }
    }
}
