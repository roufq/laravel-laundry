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
                    <form role="form" action="{{route('admin.transaksi.store')}}" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-2">
                                <label>invoice</label>
                                <div>
                                    <input data-parsley-type="text" name="kode_invoice" id="kode_invoice" type="text" class="form-control" required value="<?php echo  'INV-' . date('is') . '-' . $invNo; ?>" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Nama Outlet</label>
                                <div>
                                    <select name="outlet_id" class="form-control custom-select custom-select-lg mb-3">
                                        <option>---Atas Nama---</option>
                                        @foreach($outlet as $row)
                                        <option value="{{$row->id}}"> {{$row->nama}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Waktu</label>
                                <div>
                                    <input data-parsley-type="text" name="datetime" id="datetime" type="text" class="form-control" value="<?php $tgl = date('Y/m/d');
                                                                                                                                            echo $tgl; ?>" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Tanggal bayar</label>
                                <div>
                                    <input data-parsley-type="date" name="tgl_bayar" id="tgl_bayar" type="date" class="form-control" required placeholder="Enter number" />
                                </div>
                            </div>
                            <div class="col-md-2">

                                <label>Member</label>
                                <div>
                                    <select class="form-control custom-select custom-select-lg mb-3 member">
                                        <option>---Atas Nama---</option>
                                        <option value="bukan_member" name="bukan_member" id="bukan_member">Bukan Member</option>
                                        <option value="member" name="member" id="member">Member</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2" id="member_id">
                                <label>Nama member</label>
                                <div>
                                    <select name="member_id" id="member_id" onkeyup="NM()" class="form-control custom-select custom-select-lg mb-3">
                                        <option value="bukan_member">---Atas Nama---</option>
                                        @foreach($member as $row)
                                        <option value="{{$row->id}}"> {{$row->nama}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Batas Waktu</label>
                                <div>
                                    <input data-parsley-type="date" name="batas_waktu" id="batas_waktu" type="date" class="form-control" required placeholder="Enter number" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>jenis</label>
                                <div>
                                    <select name="jenis" id="jenis" class="form-control custom-select custom-select-lg mb-3">
                                        <option>---Atas Nama---</option>
                                        @foreach($paket as $row)
                                        <option value="{{$row->id}}"> {{$row->jenis}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Nama Paket</label>
                                <div>
                                    <select name="paket_id" id="paket_id" class="form-control custom-select custom-select-lg mb-3">
                                        <option>---Atas Nama---</option>
                                        @foreach($paket as $row)
                                        <option value="{{$row->id}}"> {{$row->nama_paket}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Harga</label>
                                <div>
                                    <input data-parsley-type="text" name="harga_paket" id="harga_paket" type="text" class="form-control" disabled required placeholder="Enter number" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Berat</label>
                                <div>
                                    <input data-parsley-type="number" name="qty" id="qty" type="number" class="form-control" required placeholder="Enter number" />
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Sub Total</label>
                                <div>
                                    <input data-parsley-type="number" name="sub_total" id="sub_total" type="number" class="form-control disabled" required placeholder="Enter number" />
                                    <input data-parsley-type="number" id="tambah" hidden disabled type="number" class="form-control" value="0" />
                                </div>
                            </div>
                            <div style="margin-top:2.7%;">
                                <a href="" type="submit"></a>
                                <button class="btn btn-danger" id="idTombolPlus">+</button>
                            </div>
                        </div>
                        <br>
                        <table id="idtable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Jenis</th>
                                    <th>Nama Paket</th>
                                    <th>Harga</th>
                                    <th>Berat</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                        </table>
                        <br>
                        <div class="row">
                            <div class="col-md-2" id="diskon">
                                <label>diskon</label>
                                <div class="input-group m-b-15">
                                    <input data-parsley-type="number" name="diskon" id="diskon" type="number" class="form-control diskon" placeholder="Enter number" />
                                    <span class="input-group-addon">%</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Pajak</label>
                                <div class="input-group m-b-15">
                                    <input data-parsley-type="text" name="pajak" id="pajak" type="text" class="form-control" value="10" required placeholder="Enter number" />
                                    <span class="input-group-addon">%</span>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Biaya Tambahan</label>
                                <div>
                                    <input data-parsley-type="number" name="biaya_tambahan" id="biaya_tambahan" type="number" class="form-control" required placeholder="Enter number" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>dibayar</label>
                                <div>
                                    <input data-parsley-type="number" name="dibayar" id="dibayar" type="number" class="form-control" required placeholder="Enter number" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Total Harga</label>
                                <div>
                                    <input data-parsley-type="number" name="ttl_harga" id="ttl_harga" value="0" type="number" class="form-control disabled tambah" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Kembalian</label>
                                <div>
                                    <input data-parsley-type="number" name="kembalian" id="kembalian" value="0" type="number" class="form-control disabled " />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Kekurangan</label>
                                <div>
                                    <input data-parsley-type="number" name="kekuragan" id="kekuragan" value="0" type="number" class="form-control disabled kk" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Nama user</label>
                                <div>
                                    <select name="user_id" class="form-control custom-select custom-select-lg mb-3">
                                        <option option>---Atas Nama---</option>
                                        @foreach($user as $row)
                                        <option value="{{$row->id}}"> {{$row->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('.member').on('change', function() {
        var tbmember = $(this).val();
        if (tbmember == 'bukan_member') {
            $("#member_id").hide();
            $("#diskon").hide();

        } else if (tbmember == 'member') {
            $("#member_id").show();
            $("#diskon").show();

        }
    });
</script>
<script>
    $('#idTombolPlus').on('click', function() {
        var _kode_invoice = $('input[name="kode_invoice"]').val();
        var _jenis = $('select[name="jenis"]').val();
        var _paket_id = $('select[name="paket_id"]').val();
        var _harga_paket = $('input[name="harga_paket"]').val();
        var _qty = $('input[name="qty"]').val();
        var _sub_total = $('input[name="sub_total"]').val();

        var _tr = '<tr> <td>' + _kode_invoice + '</td> <td>' + _jenis + '</td> <td>' + _paket_id + '</td> <td>' + _harga_paket + '</td> <td>' + _qty + '</td> <td>' + _sub_total + '</td> </tr>';

        $('#idtable').append(_tr);
    });
</script>

<script>
    $('document').ready(function() {
        $('#paket_id').on('change', function() {
            var paket_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ route('admin.paket.data') }}/" + paket_id,
                success: function(data) {
                    console.log(data);
                    $('#harga_paket').val(data.harga);
                }
            });
        })

        $('#qty').on('keyup', function() {
            var harga_paket = $('#harga_paket').val();
            var qty = $(this).val();

            var sub_total = parseInt(harga_paket) * parseInt(qty);
            $('#sub_total').val(sub_total);
        })

        $('#idTombolPlus').on('click', function() {
            var sub_total = $('#sub_total').val();
            var ttl_harga = $('#tambah').val();
            var pajak = $('#pajak').val();
            // console.log(sub_total + ' - ' + ttl_harga);
            var anjim = parseInt(sub_total) + parseInt(ttl_harga);
            var ttl = parseInt(sub_total) * parseInt(pajak) / 100;
            var pjk = parseInt(anjim) + parseInt(ttl);
            $('#tambah').val(pjk);
            $('#ttl_harga').val(pjk);
        })

        $('.diskon').on('change', function() {
            var ttl_harga = $('#ttl_harga').val();
            var diskon = $(this).val();

            var jumlah = parseInt(ttl_harga) - parseInt(diskon);
            $('#ttl_harga').val(jumlah);
        })

        $('#biaya_tambahan').on('change', function() {
            var ttl_harga = $('#ttl_harga').val();
            var biaya_tambahan = $(this).val();

            var jumlah = parseInt(ttl_harga) + parseInt(biaya_tambahan);
            $('#ttl_harga').val(jumlah);
        })

        $('#dibayar').on('change', function() {
            var ttl_harga = $('#ttl_harga').val();
            var dibayar = $(this).val();
            var jumlah = parseInt(ttl_harga) ;
            if (dibayar > jumlah) {
                var kembalian = parseInt(dibayar) - parseInt(ttl_harga);
                $('#kembalian').val(kembalian);
            } else {
                var jumlah = parseInt(ttl_harga) - parseInt(dibayar);
                $('.kk').val(jumlah);
            }

        })
    });
</script>
@endpush