<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'data_barang';
    public $timestamp = true;
    protected $fillable = [
        'nama_cust',
        'code_transaksi',
        'sku_transaksi',
        'total_qty',
        'total_harga',
        'alamat',
        'no_tlp',
        'ekspedisi',
        'is_active',
    ];
    protected $hidden; 
};
