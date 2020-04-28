<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Product;
class IndexController extends Controller
{
    public function index(){
    	$banner_data = Banner::where(['status'=>1])->orderby('sort_order', 'asc')->get();
    	$product_data = Product::where(['status'=>1])->orderby('id', 'asc')->get();
    	return view('vriddhi.index')->with(compact('banner_data', 'product_data'));
    }

    public function about(){
    	return view('vriddhi.about');
    }

    public function fbg(){
    	return view('vriddhi.freeBuyersGuide');
    }

    public function onlineStore(){
    	return view('vriddhi.onlineStore');
    }
}
