<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Tamu::all();
        return view('customer.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

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
            'tanda_pengenal'=>'required',
            'no_tanda_pengenal'=>'required',
            'nama_lengkap'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
        ]);
        

        $data=new Tamu;
        $data->id_pengenal=$request->tanda_pengenal;
        $data->nomor_pengenal=$request->no_tanda_pengenal;
        $data->nama=$request->nama_lengkap;
        $data->alamat=$request->alamat;
        $data->telepon=$request->telepon; 
        $data->email=$request->email;     
        $data->password=sha1($request->pass); 
        $data->save();
        return redirect('admin/customer')->with('success','Data telah ditambahkan');
    }

    public function simpanRegister(Request $request)
    {
        $data=new Tamu;
        $data->nama=$request->nama_lengkap;
        $data->email=$request->email;     
        $data->password=sha1($request->pass); 
        $data->save();
        return redirect('welcome')->with('success','Data telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Tamu::find($id);
        return view('customer.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Tamu::find($id);
        return view('customer.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanda_pengenal'=>'required',
            'no_tanda_pengenal'=>'required',
            'nama_lengkap'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
        ]);
        
        $data=Tamu::find($id);
        $data->id_pengenal=$request->tanda_pengenal;
        $data->nomor_pengenal=$request->no_tanda_pengenal;
        $data->nama=$request->nama_lengkap;
        $data->alamat=$request->alamat;
        $data->telepon=$request->telepon;   
        $data->email=$request->email;     
        $data->password=sha1($request->pass);   
        $data->save();

        return redirect('admin/customer')->with('success','Data telah diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tamu::where('id',$id)->delete();
        return redirect('admin/customer')->with('success','Data telah dihapus');

    }
}
