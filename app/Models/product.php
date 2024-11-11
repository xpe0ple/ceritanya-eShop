<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'data_barang';
    public $timestamp = true;
    protected $fillable = [
        'sku',
        'nama_product',
        'tipe',
        'kategori',
        'harga',
        'diskon',
        'quantity',
        'foto',
        'is_active',
    ];
    protected $hidden;
}
