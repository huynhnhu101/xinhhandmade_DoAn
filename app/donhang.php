<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    protected $table ="Donhang";
    
    public function Giaodich(){
    	return $this->belongto('app\giaodich','id-giaodich','id');
    }
    public function Sanpham(){
    	return $this->hasmany('app\sanpham','id-sp','id');
    }
    
}
