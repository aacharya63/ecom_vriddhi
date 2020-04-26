<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class IndexController extends Controller
{
    public function index(){
    	$banner_data = Banner::where(['status'=>1])->orderby('sort_order', 'asc')->get();
    	return view('vriddhi.index')->with(compact('banner_data'));
    }
}
