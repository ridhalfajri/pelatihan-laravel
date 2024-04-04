<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'customer_id', 'code', 'barang_id', 'kuantitas', 'jumlah'];
    protected $primaryKey = 'id';

    protected $table = 'penjualan';
}
