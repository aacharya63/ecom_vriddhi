<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Image;
//use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function add(Request $request){
    	if ($request->isMethod('post')) {
    		$data	=	$request->all();

    		$product 	=	new Product();
    		$product->name 	=	$data['product_name'];
    		$product->code 	=	$data['product_code'];
    		$product->color 	=	$data['product_color'];
    		$product->price 	=	$data['product_price'];
    		if (!empty($data['product_desciption'])) {
    			$product->desciption 	=	$data['product_desciption'];
    		}else{
    			$product->desciption 	=	'';
    		}
    		if ($request->hasfile('product_img')) {
    			echo $img_tmp	=	Request('product_img');
    			if ( $img_tmp->isValid() ) {
    				# code...
    			
    			$extension	=	$img_tmp->getClientOriginalExtension();
    			$filename	=	rand(100,9999).'.'.$extension;
    			$img_path	=	'uploads/products/'.$filename;

    			Image::make($img_tmp)->resize(500,500)->save($img_path);
    			$product->img 	=	$filename;
    			}
    		}
    		$product->save();
    		return redirect('/admin/addProduct')->with('flsMsgSuc', 'Product Added Successfully');
    	}
    	return view('admin.product.addProduct');
    }
}
