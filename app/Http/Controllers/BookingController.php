<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Tamu;
use App\Models\Kamar;
use Carbon\Carbon;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail=BookingDetail::all();
        return view('booking.index',compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $getRow = Booking::orderBy('id','DESC')->get();

        $rowCount = $getRow->count();
        
        $lastId = $getRow->first();

        $kode = "BO00001";
        
        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                    $kode = "BO0000".''.($lastId->id + 1);
            } else if ($lastId->id < 99) {
                    $kode = "BO000".''.($lastId->id + 1);
            } else if ($lastId->id < 999) {
                    $kode = "BO00".''.($lastId->id + 1);
            } else if ($lastId->id < 9999) {
                    $kode = "BO0".''.($lastId->id + 1);
            } else {
                    $kode = "BO".''.($lastId->id + 1);
            }
        }
        
        $tamuu=Tamu::all();
        $kamarr=Kamar::all();
        return view('booking.create',['idtamu'=>$tamuu, 'idkamar'=>$kamarr, 'kode'=>$kode]);
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
            'idtamu'=>'required',
            'tanggalMulai'=>'required',
            'tanggalAkhir'=>'required',
            'idkamar'=>'required',
        ]);
        
        $data=new Booking;
        $data->kode_booking=$request->kodeBooking;
        $data->tamu_id=$request->idtamu;
        $data->tanggal_booking=$request->tanggalBooking;
        $data->total_transaksi=$request->totalTransaksi;
        $data->total_terbayar=$request->totalBayar;     
        $data->save();

        $dataa=new BookingDetail;
        $dataa->booking_id=$data->id;
        $dataa->tanggal_mulai=$request->tanggalMulai;
        $dataa->tanggal_akhir=$request->tanggalAkhir;
        $dataa->quantity=$request->totalKamar;
        $dataa->kamar_id=$request->idkamarr;
        $dataa->status=$request->statuss;
        $dataa->save();
        return redirect('admin/booking')->with('success','Data telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail=BookingDetail::find($id);
        $tamu=Tamu::find($id);
        return view('booking.show', compact('detail','tamu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {      
        {
            $booking=Booking::find($id);
            $bookingg=BookingDetail::find($id);
            $tamuu=Tamu::all();
            $kamarr=Kamar::all();
            return view('booking.edit',['idtamu'=>$tamuu, 'kamar'=>$kamarr,'booking'=>$booking,'bookingg'=>$bookingg]);
        }
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
            'idtamu'=>'required',
        ]);
        
        $data=new Booking;
        $data->kode_booking=$request->kodeBooking;
        $data->tamu_id=$request->idtamu;
        $data->tanggal_booking=$request->tanggalBooking;
        $data->total_transaksi=$request->totalTransaksi;
        $data->total_terbayar=$request->totalBayar;     
        $data->save();

        $dataa=new BookingDetail;
        $dataa->booking_id=$data->id;
        $dataa->tanggal_mulai=$request->tanggalMulai;
        $dataa->tanggal_akhir=$request->tanggalAkhir;
        $dataa->quantity=$request->totalKamar;
        $dataa->kamar_id=$request->idkamarr;
        $dataa->status=$request->statuss;
        $dataa->save();
        return redirect('admin/booking')->with('success','Data telah ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::where('id',$id)->delete();
        BookingDetail::where('id',$id)->delete();
        return redirect('admin/booking')->with('success','Data telah dihapus');

    }
}
