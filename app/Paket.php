<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $fillable = [
        'outlet_id','jenis','nama_paket','harga',
    ];
}
