<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmucsanpham extends Model
{
    protected $table ="Danhmucsanpham";
    
    public function Sanpham(){
    	return $this->hasMany('app\sanpham','id-danhmuc','id');
    }
}
