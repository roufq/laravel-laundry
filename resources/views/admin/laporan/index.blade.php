@extends('home')
@section('title','Laporan')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tables Laporan</h3>
                    </div>
                    <div class="panel-body">

                        <form action="{{route('admin.laporan.index')}}" method="GET">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>tanggal awal </label>
                                    <input type="date" name="datetime" class="colorpicker-default form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>tanggal ahir</label>
                                    <input type="date" name="batas_waktu" class="colorpicker-default form-control">
                                </div>
                                <input type="submit" class="btn btn-light float-right"  value="Cari">
                            </div>
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tanggal Awal</th>
                                        <th>No Transaksi</th>
                                        <th>Paket</th>
                                        <th>Berat</th>
                                        <th>Total Harga</th>
                                        <th>Tanggal ahir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($laporan))
                                    @foreach($laporan as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->datetime}}</td>
                                        <td>{{$row->kode_invoice}}</td>
                                        <td>{{$row->detail_transaksi->paket->nama_paket}}</td>
                                        <td>{{$row->detail_transaksi->qty}}</td>
                                        <td>{{$row->ttl_harga}}</td>
                                        <td>{{$row->batas_waktu}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>

                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- End Row -->
    </div> <!-- container -->
</div>

@endsection
@push('css')
<!-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" /> -->
@endpush
@push('js')
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> -->


@endpush