<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    protected $fillable = [
        'transaksi_id','paket_id','qty','keterangan',
    ];

    public function paket()
    {
        return $this->hasOne(Paket::class, 'id' ,'paket_id' );
    }
}
