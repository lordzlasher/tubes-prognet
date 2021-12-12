@extends('layout')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Kamar
                        <a href="{{url('admin/room')}}" class="float-right btn btn-success btn-sm" >Lihat Kamar</a>
                    </h6>
                </div>
                <div class="card-body">
                    @if(Session::has('succcess'))
                    <p class="text-success">{{session('success')}}</p>
                    @endif
                    <div class="table-responsive">
                        <form method="post" action="{{url('admin/room/'.$data->id)}}">
                            @csrf
                            @method('put')
                        <table class="table table-bordered" > 
                            <tr>
                                <th>Pilih tipe kamar</th>
                                <td>
                                    <select name="rt_id" class="form-control">
                                        <option value="0">--- Tipe Kamar ----</option>
                                        <option value="1">Standar</option>
                                        <option value="2">Deluxe</option>
                                        <option value="3">Suite</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td><input name="harga" value="{{$data->harga}}" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <th>Stok Kamar</th>
                                <td><input name="stok" value="{{$data->stok_tersedia}}" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>    
                                <th>Fasilitas</th>
                                 <td><textarea name="fasilitas" class="form-control">{{$data->fasilitas}}</textarea></td>
                            </tr>
                            <tr>
                                <th>Foto Kamar</th>
                            <td>
                                <input name="photo" type="file"/>
                                <input type="hidden" name="prev_photo" value="{{$data->photo}}" />
                                <img width="100" src="{{asset('storage/app/'.$data->photo)}}"/> 
                            
                            </td>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" /> 
                                </td>
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