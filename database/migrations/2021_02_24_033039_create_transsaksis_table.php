<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranssaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('outlet_id');
            $table->string('kode_invoice');
            $table->string('member_id');
            $table->string('datetime');
            $table->string('jenis');
            $table->string('batas_waktu');
            $table->string('tgl_bayar');
            $table->string('biaya_tambahan');
            $table->string('diskon');
            $table->string('pajak');
            $table->string('sub_total');
            $table->string('ttl_harga');
            $table->string('status');
            $table->string('dibayar');
            $table->string('kembalian');
            $table->string('kekuragan');
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transsaksis');
    }
}
