<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    //deklarasikan atribute table yang boleh diisi
    protected $fillable = ['id', 'nama'];
    //deklarasi primarykey
    protected $primaryKey = 'id';

    //deklarasi nama tabel
    protected $table = 'customer';
}
