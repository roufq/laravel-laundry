@extends('home')
@section('title','Airport')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tables Transaksi</h3>
                    </div>
                    <div class="panel-body">
                        <a href="{{route('admin.transaksi.create')}}" style="float:right!important"><button type="button" class="btn btn-success">Tambah</button></a>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Id Outlet</th>
                                    <th>Nama Paket</th>
                                    <th>Kode invoice</th>
                                    <th>Id member</th>
                                    <th>Status</th>
                                    <th>Waktu</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Batas waktu</th>
                                    <th>Biaya Tambahan</th>
                                    <th>Diskon</th>
                                    <th>Pajak</th>
                                    <th>Berat</th>
                                    <th>Total harga</th>
                                    <th>DI Bayar</th>
                                    <th>Id User</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transaksi as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->outlet->nama}}</td>
                                    <td>{{$row->detail_transaksi->paket->nama_paket }}</td>
                                    <td>{{$row->kode_invoice}}</td>
                                    <td>
                                        @if(!empty($row->member->nama))
                                        {{$row->member->nama}}
                                        @else
                                        {{$row->member_id}}
                                        @endif
                                    </td>
                                    <td>{{$row->status}}</td>
                                    <td>{{$row->datetime}}</td>
                                    <td>{{$row->tgl_bayar}}</td>
                                    <td>{{$row->batas_waktu}}</td>
                                    <td>{{$row->biaya_tambahan}}</td>
                                    <td>{{$row->diskon}}</td>
                                    <td>{{$row->pajak}}</td>
                                    <td>{{$row->detail_transaksi->qty}}</td>
                                    <td>{{$row->ttl_harga}}</td>
                                    <td>{{$row->dibayar}}</td>
                                    <td>{{$row->user->name}}</td>
                                    <td>
                                        <a href="{{route('admin.transaksi.edit',$row->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('admin.transaksi.struck',$row->id)}}" target_blank class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('admin.transaksi.destroy',$row->id)}}" onclick="return confirm('apa kamu serius?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div> <!-- End Row -->
    </div> <!-- container -->
</div>

@endsection
@push('js')
<script>
    var table = $('#datatable-responsive').DataTable();

    // #column3_search is a <input type="text"> element
    $(status).on('keyup', function() {
        table
            .columns(3)
            .search(this.value)
            .draw();
    });
</script>
@endpush