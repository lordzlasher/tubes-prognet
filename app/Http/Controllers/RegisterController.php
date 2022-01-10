<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;


class RegisterController extends Controller
{
    public function register()
    {
        $data=Tamu::all();
        return view('registerGuest',['data'=>$data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|min:5|max:255',
            'email'=>'required|email:dns',
            'password'=>'required|min:5|max:255'
        ]);

        $data=new Tamu;
        $data->nama=$request->nama_lengkap;
        $data->email=$request->email;     
        $data->password=sha1($request->pass); 
        $data->save();
        return redirect('login')->with('success','Data telah ditambahkan');
    }
}
