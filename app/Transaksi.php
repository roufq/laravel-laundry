<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Paket;
use App\outlet;
use App\Member;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    
    protected $fillable = [
        'id','outlet_id','kode_invoice','member_id','datetime','jenis','sub_total','batas_waktu','tgl_bayar','ttl_harga','biaya_tambahan','diskon','pajak','status','dibayar', 'kembalian', 'kekuragan','user_id',
    ];
    public function member()
    {
        return $this->belongsTo(outlet::class, 'member_id', 'id' );
    }

    public function detail_transaksi()
    {
        return $this->hasOne(detail_transaksi::class, 'transaksi_id', 'id' );
    }

    public function outlet()
    {
        return $this->belongsTo(outlet::class, 'outlet_id', 'id' );
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id' ,'id' );
    }
}