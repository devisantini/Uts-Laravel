<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    protected $table='penjual';
    protected $primaryKey='id_penjual';
    protected $fillable=['nama_penjual','alamat_penjual','no_hp'];
}
