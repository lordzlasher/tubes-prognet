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
                                <td>{{$data->kode_booking}}</td>
                            </tr>
                            <tr>
                                <th>Tamu</th>
                                <td>{{$data->NamaTamu->nama}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Booking</th>
                                <td>{{$data->tanggal_booking}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Mulai</th>
                                <td>{{$dataa->tanggal_mulai}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Akhir</th>
                                <td>{{$dataa->tanggal_akhir}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Kamar</th>
                                <td>Kamar {{$dataa->kamar_id}}</td>
                            </tr>
                            <tr>
                                <th>Total Tamu</th>
                                <td>{{$dataa->quantity}} Orang</td>
                            </tr>
                            <tr>
                                <th>Total Transaksi</th>
                                <td>Rp.{{$data->total_transaksi}}</td>
                            </tr>
                            <tr>
                                <th>Total Terbayar</th>
                                <td>Rp.{{$data->total_terbayar}}</td>
                            </tr>
                            <tr>
                                <th>Status Pembayaran</th>
                                <td>{{$dataa->status}}</td>
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