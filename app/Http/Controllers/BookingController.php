<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Tamu;
use App\Models\Kamar;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Booking::all();
        $dataa=BookingDetail::all();
        return view('booking.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tamuu=Tamu::all();
        $kamarr=Kamar::all();
        return view('booking.create',['idtamu'=>$tamuu, 'idkamar'=>$kamarr]);
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
            'kodeBooking'=>'required',
        ]);
        
        $data=new Booking;
        $data->kode_booking=$request->kodeBooking;
        $data->tamu_id=$request->idtamu;
        $data->tanggal_booking=$request->tanggalBooking;
        $data->total_transaksi=$request->totalTransaksi;
        $data->total_terbayar=$request->totalBayar;     
        $data->save();

        $dataa=new BookingDetail;
        $dataa->booking_id=$request->id;
        $dataa->tanggal_mulai=$request->tanggalMulai;
        $dataa->tanggal_akhir=$request->tanggalAkhir;
        $dataa->quantity=$request->totalTamu;
        $dataa->kamar_id=$request->idkamarr;
        $dataa->status=$request->statuss;
        $dataa->save();

        return redirect('admin/booking/create')->with('success','Data telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Booking::find($id);
        $dataa=BookingDetail::find($id);
        return view('booking.show',['data'=>$data, 'dataa'=>$dataa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
