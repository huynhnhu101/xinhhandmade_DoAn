<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giaodich extends Model
{
    protected $table ="Giaodich";
    public function Donhang(){
    	return $this->hasmany('app\donhang','id-giaodich','id');
    }
    
}
