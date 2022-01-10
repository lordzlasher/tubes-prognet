<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Kamar::all();
        return view('room.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgPath=$request->file('photo')->store('imgs');

        $data=new Kamar;
        $data->tipe=$request->tipe_kamar;
        $data->harga=$request->harga;
        $data->stok_tersedia=$request->stok;
        $data->fasilitas=$request->fasilitas;
        $data->foto_kamar=$imgPath;
        $data->save();

        return redirect('admin/room')->with('success','Data telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Kamar::find($id);
        return view('room.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Kamar::find($id);
        return view('room.edit',['data'=>$data]);
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

        if($request->hasFile('photo')){
            $imgPath=$request->file('photo')->store('imgs');
        }else{
            $imgPath=$request->prev_photo;
        }

        $data=Kamar::find($id);
        $data->tipe=$request->rt_id;
        $data->harga=$request->harga;
        $data->stok_tersedia=$request->stok;
        $data->fasilitas=$request->fasilitas;
        $data->foto_kamar=$imgPath;
        $data->save();

        return redirect('admin/room/'.$id.'/edit')->with('success','Data telah diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kamar::where('id',$id)->delete();
        return redirect('admin/room')->with('success','Data telah dihapus');

    }
}
