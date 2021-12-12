@extends('layout')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail data Tamu
                        <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm" >Lihat data Tamu</a>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" > 
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{$data->nama}}</td>
                            </tr>
                            <tr>
                                <th>Tanda Pengenal</th>
                                <td>{{$data->id_pengenal}}</td>
                            </tr>
                            <tr>
                                <th>Nomer Tanda Pengenal</th>
                                <td>{{$data->nomor_pengenal}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{$data->alamat}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td>{{$data->telepon}}</td>
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