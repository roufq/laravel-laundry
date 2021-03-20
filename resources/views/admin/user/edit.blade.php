@extends('home')
@section('title','Paket')
@section('content')
<div class="picker-1"></div>
<div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Paket Tables</h3>
                                    </div>
                                    <form role="form" action="{{route('admin.user.update',$user->id)}}" method="POST">
                                                    @csrf
                                                        <div class="form-group">
                                                            <label>nama</label>
                                                            <div>
                                                            <input data-parsley-type="text" name="name" id="name" type="text" class="form-control" required value="{{$user->name}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>email</label>
                                                            <div>
                                                                <input data-parsley-type="text" name="email" id="email" type="text" class="form-control" required value="{{$user->email}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>password</label>
                                                            <div>
                                                                <input data-parsley-type="password" type="password" name="password" id="password" class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Role</label>
                                                            <div>
                                                                <select name="user" id="user" class="form-control custom-select custom-select-lg mb-3">
                                                                    <option value="admin">Admin</option>
                                                                    <option value="kasir">Kasir</option>
                                                                    <option value="outlet">Outlet</option>
                                                                </select>
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
                            </div>
                        </div> <!-- End Row -->
                    </div> <!-- container -->
                </div>
                
@endsection
