@extends('layout')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail data Booking
                        <a href="{{url('admin/booking')}}" class="float-right btn btn-success btn-sm" >Lihat data Booking</a>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" > 
                            <tr>
                                <th>Kode Booking</th>
                                <td>{{$detail->Booking->kode_booking}}</td>
                            </tr>
                            <tr>
                                <th>Tamu</th>
                                <td>{{$tamu->nama}}</td>
                            </tr>
                            
                            <tr>
                                <th>Tanggal Booking</th>
                                <td>{{$detail->Booking->tanggal_booking}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Check In</th>
                                <td>{{$detail->tanggal_mulai}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Check Out</th>
                                <td>{{$detail->tanggal_akhir}}</td>
                            </tr>
                            <tr>
                                <th>Tipe Kamar</th>
                                <td>{{$detail->Kamar->tipe}}</td>
                            </tr>
                            <tr>
                                <th>Total Kamar</th>
                                <td>{{$detail->quantity}} Kamar</td>
                            </tr>
                            <tr>
                                <th>Total Transaksi</th>
                                <td>Rp.{{$detail->Booking->total_transaksi}}</td>
                            </tr>
                            <tr>
                                <th>Total Terbayar</th>
                                <td>Rp.{{$detail->Booking   ->total_terbayar}}</td>
                            </tr>
                            <tr>
                                <th>Status Pembayaran</th>
                                <td>{{$detail->status}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection 