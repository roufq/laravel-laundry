@extends('home')
@section('title','transaksi')
@section('content')

<!-- Start right Content here -->

<div class="panel-body">

    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">
                <h4 class="pull-right">Order # {{$data->kode_invoice}}</h4>
                <img src="{{asset('images/logo.png')}}" alt="logo" height="36">
            </div>
            <hr>

            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Kode Transaksi</strong><br>
                        {{$data->id}}<br>
                        {{$data->user->name}}
                    </address>
                </div>
                <div class="col-xs-6 text-right">

                    <address>
                        <strong>Tanggal Selesai:</strong><br>
                        {{$data->batas_waktu}}<br><br>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td><strong>Jenis</strong></td>
                                    <td class="text-center"><strong>Nama Paket</strong></td>
                                    <td class="text-center"><strong>Berat</strong>
                                    </td>
                                    <td class="text-center"><strong>pajak</strong>
                                    </td>
                                    <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <tr>
                                    <td>{{$data->detail_transaksi->paket->jenis}}</td>
                                    <td class="text-center">{{$data->detail_transaksi->paket->nama_paket}}</td>
                                    <td class="text-center">{{$data->detail_transaksi->qty}}</td>
                                    <td class="text-center">{{$data->pajak}}</td>
                                    <td class="text-right">{{$data->sub_total}}</td>
                                </tr>
                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="thick-line text-right">{{$data->sub_total}}</td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="no-line text-right">
                                        <h4 class="m-0">{{$data->ttl_harga}}</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="hidden-print">
                        <div class="pull-right">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary waves-effect waves-light">Send</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end row -->
</div> <!-- panel body -->

@endsection