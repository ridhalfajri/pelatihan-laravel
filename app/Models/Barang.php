<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;


    //deklarasikan atribute table yang boleh diisi
    protected $fillable = ['id', 'nama', 'harga', 'satuan'];

    //deklarasikan atribute yang tidak boleh diisi
    // protected $guarded = [''];


    //deklarasi primarykey
    protected $primaryKey = 'id';

    //deklarasi nama tabel
    protected $table = 'barang';
}
