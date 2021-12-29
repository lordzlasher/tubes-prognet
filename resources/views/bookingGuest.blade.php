@extends('layoutGuest')

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Booking
                        <a href="{{url('admin/booking')}}" class="float-right btn btn-success btn-sm" >Lihat data Booking</a>
                    </h6>
                </div>
                <div class="card-body">

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <p class="text-danger">{{$error}}</p>
                        @endforeach
                    @endif

                    <div class="table-responsive">
                        <form method="post" enctype="multipart/form-data" action="{{url('admin/booking')}}">
                            @csrf
                        <table class="table table-bordered" > 
                            {{-- <tr>
                                <th>Kode Booking</th>
                                <td><input name="kodeBooking" type="text" class="form-control" value="{{$kode}}" readonly/> </td>
                            </tr>
                            <tr>
                                <th>Tamu yang Booking</th>
                                <td>
                                    <select name="idtamu" class="form-control">
                                        <option value="0">Data Tamu</option>
                                        @foreach($idtamu as $tm)
                                        <option value="{{$tm->id}}">{{$tm->nama}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Booking</span> </th>
                                <td> <input id="tanggalBooking" type="date"  class="form-control" name="tanggalBooking" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" required="" readonly ></td> 

                                
                            </tr>
                            <tr>
                                <th>Tanggal Check In <span class="text-danger">*</span> </th>
                                <td><input name="tanggalMulai" type="date" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <th>Tanggal Check Out</th>
                                <td><input name="tanggalAkhir" type="date" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <th>Total Kamar</th>
                                <td><input name="totalKamar" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <th>Tipe Kamar</th>
                                <td>
                                    <select name="idkamarr" class="form-control">
                                        <option value="0">Tipe Kamar</option>
                                        @foreach($idkamar as $tk)
                                        <option value="{{$tk->id}}">{{$tk->tipe}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Status Pembayaran</th>
                                <td>
                                    <select name="statuss" class="form-control">
                                        <option value="0">Status Pembayaran</option>
                                        <option value="1">Belum terbayar</option>
                                        <option value="2">Terbayar</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Total Transaksi</th>
                                <td><input name="totalTransaksi" type="text" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Total Bayar </th>
                                <td><input name="totalBayar" type="text" class="form-control"/> </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" /> 
                                </td> --}}
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