<?php

namespace App\Http\Controllers;
use App\sanpham;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$sp=sanpham::all();
    	print_r($sp);
    	exit;
    	return view('page.trangchu',compact ('sp'));
    }
    public function getSanPham(){
    	return view('page.SanPham');
    }
}
