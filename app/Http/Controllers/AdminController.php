<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //Login
    function login(){
        return view('loginGuest');
    }

    //check login
    function check_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        $admin=Admin::where(['username'=>$request->username,'password'=>sha1($request->password)])->count();
        if($admin>0){
            $adminData=Admin::where(['username'=>$request->username,'password'=>sha1($request->password)])->get();
            session(['adminData'=>$adminData]);
            return redirect('admin');
        }else{
            return redirect('login')->with('msg','Username/Password salah!!');
        }
    }

    //Logout
    function logout(){
        session()->forget(['adminData']);
        return redirect('welcome');
    }
}
