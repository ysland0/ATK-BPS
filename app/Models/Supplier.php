<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['kode_supplier', 'nama_supplier', 'nama_pic', 'telp_pic', 'alamat', 'email'];
}
