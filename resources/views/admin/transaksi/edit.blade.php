@extends('home')
@section('title','transaksi')
@section('content')
<div class="picker-1"></div>
<div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">transaksi Tables</h3>
                                    </div>
                                    <form role="form" action="{{route('admin.transaksi.update',$transaksi->id)}}" method="POST">
                                                    @csrf
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
                                                            <label>invoice</label>
                                                            <div>
                                                                <input data-parsley-type="text" name="kode_invoice" id="kode_invoice" value="{{$transaksi->kode_invoice}}" type="text" class="form-control" required placeholder="Enter number"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama member</label>
                                                            <div>
                                                                <select name="member_id" class="form-control custom-select custom-select-lg mb-3">
                                                                    <option>---Atas Nama---</option>
                                                                    @foreach($member as $row)
                                                                    <option value="{{$row->id}}"> {{$row->nama}}  </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Waktu</label>
                                                            <div>
                                                                <input data-parsley-type="text" id="test1" name="datetime" value="{{$transaksi->datetime}}" type="text" class="form-control" required placeholder="Enter number"/><button id="btn-show" class="btn button-1">Show Picker</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal bayar</label>
                                                            <div>
                                                                <input data-parsley-type="date" name="tgl_bayar" id="tgl_bayar" value="{{$transaksi->tgl_bayar}}" type="date" class="form-control" required placeholder="Enter number"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Batas Waktu</label>
                                                            <div>
                                                                <input data-parsley-type="date" name="batas_waktu" id="batas_waktu" value="{{$transaksi->batas_waktu}}" type="date" class="form-control" required placeholder="Enter number"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Biaya Tambahan</label>
                                                            <div>
                                                                <input data-parsley-type="number" name="biaya_tambahan" id="biaya_tambahan" value="{{$transaksi->biaya_tambahan}}" type="number" class="form-control" required placeholder="Enter number"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>diskon</label>
                                                            <div>
                                                                <input data-parsley-type="number" name="diskon" id="diskon" value="{{$transaksi->diskon}}" type="number" class="form-control" required placeholder="Enter number"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pajak</label>
                                                            <div>
                                                                <input data-parsley-type="number" name="pajak" id="pajak" value="{{$transaksi->pajak}}" type="number" class="form-control" required placeholder="Enter number"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Total Harga</label>
                                                            <div>
                                                                <input data-parsley-type="number" name="ttl_harag" id="ttl_harag" value="{{$transaksi->pajak}}" type="number" class="form-control" required placeholder="Enter number"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>status</label>
                                                            <div>
                                                                <select name="status" class="form-control custom-select custom-select-lg mb-3">
                                                                    <option value="">--Status---</option>
                                                                    <option value="baru">Baru</option>
                                                                    <option value="proses">Proses</option>
                                                                    <option value="selesai">Selesai</option>
                                                                    <option value="diambil">Diambil</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>dibayar</label>
                                                            <div>
                                                                <input data-parsley-type="number" name="dibayar" id="dibayar" type="number" value="{{$transaksi->dibayar}}" class="form-control" required placeholder="Enter number"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama user</label>
                                                            <div>
                                                                <select name="user_id" class="form-control custom-select custom-select-lg mb-3">
                                                                    <option>---Atas Nama---</option>
                                                                    @foreach($user as $row)
                                                                    <option value="{{$row->id}}"> {{$row->name}}  </option>
                                                                    @endforeach
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
@push('js')
<script src="{{asset('dist/simplepicker.js')}}"></script>
<script>
                    let simplepicker1 = new SimplePicker(".picker-1", {
                        zIndex: 999
                    });

                    const $button1 = document.querySelector('#btn-show');
                    $button1.addEventListener('click', (e) => {
                        simplepicker1.open();
                    });

                    simplepicker1.on("submit", function (date, readableDate) {
                        var input = document.querySelector('#test1');
                        input.value = readableDate;
                    });
                </script>
@endpush