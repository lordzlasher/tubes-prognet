@extends('layout')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Booking
                        <a href="{{url('admin/booking/create')}}" class="float-right btn btn-success btn-sm" >Tambah data Booking</a>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Booking</th>
                                    <th>Tanggal Booking</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                            </tfoot>
                            <tbody>
                                @if($data)
                                    @foreach($data as  $d)
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->kode_booking}}</td>
                                        <td>{{$d->tanggal_booking}}</td>
                                        <td>
                                            <a href="{{url('admin/booking/'.$d->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('admin/booking/'.$d->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Apakah anda yakin untuk menghapus data customer?')" href="{{url('admin/booking/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    @section('scripts')
        <!-- Page level Table -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
            
        <!-- Page level Table scripts -->
        <script src="js/demo/datatables-demo.js"></script>
    
        <!-- Custom styles for table page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    @endsection 

@endsection 