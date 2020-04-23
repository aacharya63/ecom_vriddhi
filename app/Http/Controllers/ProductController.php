<?php

namespace App\Http\Controllers;
Use Alert;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Image;
//use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function add(Request $request){
    	if ($request->isMethod('post')) {

    		$this->validate($request,[
    			'product_name' => 'required|min:5|max:35',
    			'product_code' => 'required|unique:products,code',
    			'product_color' => 'required|min:5|max:35',
    			'product_actual_price' => 'required|numeric',
    			'product_discount' => 'required|numeric',
    			'product_price' => 'required|numeric',
    			'product_img' => 'required',
    			'product_desciption'	=> 'required|min:5|max:35',
    		],[
    			'product_name.required' => ' The Product name field is required.',
    			'product_name.min' => ' The Product name must be at least 5 characters.',
    			'product_name.max' => ' The Product name may not be greater than 35 characters.',
    			'product_code.required' => ' The Product code field is required.',
    			'product_code.unique' => ' This Product code has already been taken.',
    			'product_color.required' => ' The Product color field is required.',
    			'product_color.min' => ' The Product color must be at least 5 characters.',
    			'product_color.max' => ' The Product color may not be greater than 35 characters.',
    			'product_desciption.required' => ' The Product discription field is required.',
    			'product_desciption.min' => ' The Product discription must be at least 5 characters.',
    			'product_desciption.max' => ' The Product discription may not be greater than 35 characters.',
    			'product_actual_price.required' => ' The Product actual price field is required.',
    			'product_actual_price.numeric' => ' The Product actual price must be numric.',
    			'product_discount.required' => ' The Product discount field is required.',
    			'product_discount.numeric' => ' The Product discount must be numric.',
    			'product_price.required' => ' The Product selling price field is required.',
    			'product_price.numeric' => ' The Product selling price must be numric.',
    			
    			'product_img.required' => ' The Product image must be uploaded.',
    			
    		]);

    		$data	=	$request->all();

    		$product 	=	new Product();
            $product->categoryId  =   $data['uc'];
    		$product->name 	=	$data['product_name'];
    		$product->code 	=	$data['product_code'];
    		$product->color 	=	$data['product_color'];
    		$product->actualPrice =	$data['product_actual_price'];
    		$product->discount =	$data['product_discount'];
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
    		return redirect('/admin/viewProduct')->with('flsMsgSuc', 'Product Added Successfully');
    	}
        $category = Category::where(['parentId'=>0])->get();
        $catDdl =   "<option value='' selected='selected' disabled='disabled'>--Select--</option>";
        foreach ($category as $cat) {
           $catDdl.="<option value='".$cat->id."'>".$cat->name."</option>"; 
           $subCat = Category::where(['parentId'=>$cat->id])->get();
           foreach ($subCat as $sc) {
               $catDdl.="<option value='".$sc->id."'>".$sc->name."</option>";
           }
        }
    	return view('admin.product.addProduct')->with(compact('catDdl'));
    }

    public function view(Request $request){
    	$viewProduct =	Product::get();
    	return view('admin.product.viewProduct')->with(compact('viewProduct', $viewProduct));
    }

    public function edit(Request $request, $id=null){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		if ($request->hasfile('product_img')) {
    			echo $img_tmp	=	Request('product_img');
    			if ( $img_tmp->isValid() ) {
	    			$extension	=	$img_tmp->getClientOriginalExtension();
	    			$filename	=	rand(100,9999).'.'.$extension;
	    			$img_path	=	'uploads/products/'.$filename;
	    			Image::make($img_tmp)->resize(500,500)->save($img_path);
    			}
    		}
    		else{
				$filename = $data['current_img'];
			}
			if (empty($data['product_desciption'])) {
				$data['product_desciption'] = '';
			}
			Product::where(['id'=>$id])->update(['name'=>$data['product_name'], 'code'=>$data['product_code'], 'color'=>$data['product_color'], 'desciption'=>$data['product_desciption'], 'actualPrice'=>$data['product_actual_price'], 'discount'=>$data['product_discount'], 'price'=>$data['product_price'], 'categoryId'=>$data['uc'], 'img'=>$filename]);
			return redirect('admin/viewProduct')->back()->with('fls_suc_msg_ep', 'Product updated successfully');
    	}
    	$product_dtl =	Product::where(['id'=>$id])->first();
        $category = Category::where(['parentId'=>0])->get();
        $catDdl =   "<option value='' selected='selected' disabled='disabled'>--Select--</option>";
        foreach ($category as $cat) {
           if ($cat->id==$product_dtl->categoryId) {
               $selected = "selected";
           }else{
               $selected = "";
           }
           $catDdl.="<option value='".$cat->id."'".$selected.">".$cat->name."</option>";
        }
        $sc = Category::where(['parentId'=>$cat->id])->get();
        foreach ($sc as $s) {
            if ($cat->id==$product_dtl->categoryId) {
                $selected = "selected";
            }else{
                $selected = "";
            }
            $catDdl.="<option value='".$sc->id."'".$selected.">".$sc->name."</option>";
        }
    	return view('admin.product.editProduct')->with(compact('product_dtl', 'catDdl'));
    }
        public function delete(Request $request, $id=null){
        	$product_delete	= Product::where('id',$id)->delete();
        	Alert::success('Product deleted successfully', 'Success Message');
        	return redirect()->back()->with('fls_suc_msg_dp', 'Product deleted successfully');
        }
        
        public function ups(Request $request)
        {
            $products = Product::find($request->id);
            $products->status = $request->status;
            $products->save();
      
            return response()->json(['success'=>'Status change successfully.']);
        }
}
