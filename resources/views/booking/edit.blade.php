@extends('layout')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit data Tamu
                        <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm" >Lihat data Tamu</a>
                    </h6>
                </div>
                <div class="card-body">
                    @if(Session::has('succcess'))
                    <p class="text-success">{{session('success')}}</p>
                    @endif
                    <div class="table-responsive">
                        <form method="post" enctype="multipart/form-data" action="{{url('admin/customer/'.$data->id)}}">
                            @csrf
                            @method('put')
                        <table class="table table-bordered" > 
                            <tr>
                                <th>Pilih tanda pengenal</th>
                                <td>
                                    <select name="tanda_pengenal" class="form-control">
                                        <option value="0">--- Tanda Pengenal ----</option>
                                        <option value="1">KTP</option>
                                        <option value="2">Paspor</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Nomor Tanda Pengenal <span class="text-danger">*</span> </th>
                                <td><input value="{{$data->nomor_pengenal}}" name="no_tanda_pengenal" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap <span class="text-danger">*</span> </th>
                                <td><input value="{{$data->nama}}" name="nama_lengkap" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><input value="{{$data->alamat}}" name="alamat" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon <span class="text-danger">*</span> </th>
                                <td><input value="{{$data->telepon}}" name="telepon" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" /> 
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection 