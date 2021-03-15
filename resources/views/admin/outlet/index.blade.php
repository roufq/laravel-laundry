@extends('home')
@section('title','Airport')
@section('content')
<div class="content">
<div class="col-xs-6 col-sm-3 m-t-30 m-b-15" style="float:right!important">
                            <div class="text-center">
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal">Tambah</button>
                            </div>
                            <!-- sample modal content -->
                            <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none">
                                <div class="modal-dialog" style="width:55%">
                                    <div class="modal-content">
                                                <h3 class="header-title m-t-0"><small>Tambah Membaer</small></h3>
                                                <div class="m-t-20">
                                                <form role="form" action="{{route('admin.outlet.store')}}" method="POST">
                                                    {{csrf_field()}}
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <div>
                                                                <input data-parsley-type="text" type="text" name="nama" class="form-control" required placeholder="Enter only digits"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <div>
                                                                <input data-parsley-type="text" name="alamat" type="text" class="form-control" required placeholder="Enter only numbers"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>No telepon</label>
                                                            <div>
                                                                <input data-parsley-type="number" name="tlp" type="text" class="form-control" required placeholder="Enter only numbers"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                    Submit
                                                                </button>
                                                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div> 
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Outlet Tables</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>nama</th>
                                                    <th>alamat</th>
                                                    <th>NO Telapon</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($outlet as $row)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$row->nama}}</td>
                                                    <td>{{$row->alamat}}</td>
                                                    <td>{{$row->tlp}}</td>
                                                    <td>
                                                        <a href="{{route('admin.outlet.edit',$row->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{url('admin/outlet/destroy',$row->id)}}" onclick="return confirm('apa kamu serius?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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