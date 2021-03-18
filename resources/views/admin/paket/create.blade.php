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
                                    <form role="form" action="{{route('admin.paket.store')}}" method="POST">
                                                    {{csrf_field()}}
                                                        <div class="form-group">
                                                            <label>ID Outlet</label>
                                                            <div>
                                                                <select name="outlet_id" class="form-control custom-select custom-select-lg mb-3">
                                                                    <option>---Atas Nama---</option>
                                                                    @foreach($outlet as $row)
                                                                    <option value="{{$row->id}}"> {{$row->nama}}  </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jenis</label>
                                                            <div>
                                                                <select name="jenis" class="form-control custom-select custom-select-lg mb-3">
                                                                    <option>---Nama Jenis---</option>
                                                                    <option value="kiloan">Kiloan</option>
                                                                    <option value="selimut">Selimut</option>
                                                                    <option value="bad_cover"> Bad Cover</option>
                                                                    <option value="kaos">Kaos</option>
                                                                    <option value="lain">lain</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Paket</label>
                                                            <div>
                                                                <input data-parsley-type="text" type="text" name="nama_paket" id="nama_paket" class="form-control" required placeholder="Enter numbers"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Harga</label>
                                                            <div>
                                                                <input data-parsley-type="number" name="harga" id="harga" type="number" class="form-control" required placeholder="Enter number"/>
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
