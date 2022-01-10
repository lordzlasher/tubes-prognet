<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tamu;

class TamuController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function register()
    {
        return view('registerGuest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $data=new Tamu;
        $data->nama_lengkap=$request->nama_lengkap;
        $data->email=$request->email;
        $data->password=sha1($request->pass);
        $data->save();
        return redirect('welcome')->with('success','Data telah ditambahkan');
    }

}
