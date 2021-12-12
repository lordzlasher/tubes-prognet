@extends('layout')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Tamu
                        <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm" >Lihat data tamu</a>
                    </h6>
                </div>
                <div class="card-body">

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <p class="text-danger">{{$error}}</p>
                        @endforeach
                    @endif

                    <div class="table-responsive">
                        <form method="post" enctype="multipart/form-data" action="{{url('admin/customer')}}">
                            @csrf
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
                                <td><input name="no_tanda_pengenal" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap <span class="text-danger">*</span> </th>
                                <td><input name="nama_lengkap" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <th>Alamat <span class="text-danger">*</span> </th>
                                <td><input name="alamat" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <th>Nomer Telepon <span class="text-danger">*</span>  </th>
                                <td><input name="telepon" type="text" class="form-control"/> </td>
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