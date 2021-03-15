@extends('home')
@section('title','Airport')
@section('content')
<div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">paket Tables</h3>
                                    </div>
                                    <div class="panel-body">
                                    <a href="{{route('admin.paket.create')}}" style="float:right!important"><button type="button" class="btn btn-success">Tambah</button></a>
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>ID Outlet</th>
                                                    <th>jenis</th>
                                                    <th>Nama paket</th>
                                                    <th>Harga</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($paket as $row)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$row->outlet_id}}</td>
                                                    <td>{{$row->jenis}}</td>
                                                    <td>{{$row->nama_paket}}</td>
                                                    <td>{{$row->harga}}</td>
                                                    <td>
                                                        <a href="{{route('admin.paket.edit',$row->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{url('admin/paket/destroy',$row->id)}}" onclick="return confirm('apa kamu serius?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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