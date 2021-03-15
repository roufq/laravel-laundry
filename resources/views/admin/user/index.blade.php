@extends('home')
@section('title','Setatus Pesanan')
@section('content')
<div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">User Tables</h3>
                                    </div>
                                    <div class="panel-body">
                                    <a href="{{route('admin.user.create')}}" style="float:right!important"><button type="button" class="btn btn-success">Tambah</button></a>
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>nama</th>
                                                    <th>email</th>
                                                    <th>Password</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($user as $row)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$row->name}}</td>
                                                    <td>{{$row->email}}</td>
                                                    <td>{{$row->password}}</td>
                                                    <td>
                                                        <a href="{{route('admin.user.edit',$row->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{route('admin.user.destroy',$row->id)}}" onclick="return confirm('apa kamu serius?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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