@extends('layout')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Kamar
                        <a href="{{url('admin/room')}}" class="float-right btn btn-success btn-sm" >Lihat Room</a>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" > 
                            <tr>
                                <th>Nomer Kamar</th>
                                <td>Kamar {{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Tipe Kamar</th>
                                <td>{{$data->tipe}}</td>
                            </tr>
                            <tr>
                                <th>Harga Kamar</th>
                                <td>Rp.{{$data->harga}}</td>
                            </tr>
                            <tr>
                                <th>Stok Kamar</th>
                                <td>{{$data->stok_tersedia}}</td>
                            </tr>
                            <tr>
                                <th>Fasilitas Kamar</th>
                                <td>{{$data->fasilitas}}</td>
                            </tr>
                            <tr>
                                <th>Foto Kamar</th>
                                <td> <img width="100" src="{{asset($data->foto_kamar)}}"/> </td>
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