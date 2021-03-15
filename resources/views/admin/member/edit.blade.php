@extends('home')
@section('title','Schedulle')
@section('content')
<div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Schedulle Tables</h3>
                                    </div>
                                    <form role="form" action="{{route('admin.member.update',$member->id)}}" method="POST">
                                        @csrf
                                                        <div class="form-group">
                                                            <label>nama</label>
                                                            <div>
                                                                <input data-parsley-type="text" name="nama" value="{{$member->nama}}" id="nama" type="text" class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <div>
                                                                <input data-parsley-type="text" name="alamat" value="{{$member->alamat}}" id="alamat" type="text" class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jenis kelamin</label>
                                                            <div>
                                                                 <select name="jenis_kelamin" class="form-control custom-select custom-select-lg mb-3">
                                                                    <option>----Jenis Kelamin---</option>
                                                                    <option value="L">laki-laki</option>
                                                                    <option value="P">Perempuan</option>                                                                      
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>No Telepon</label>
                                                            <div>
                                                                <input data-parsley-type="number" value="{{$member->tlp}}" type="number" name="tlp" id="tlp" class="form-control" required placeholder="Enter numbers"/>
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
                        </div> <!-- End member -->
                    </div> <!-- container -->
                </div>
@endsection