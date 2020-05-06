<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\FrontPages;
use App\Category;
use App\UserContact;
use App\Banner;
use App\Product;
use App\Blog;
class IndexController extends Controller
{
    public function index(){
    	$banner_data = Banner::where(['status'=>1])->orderby('sort_order', 'asc')->get();
    	$product_data = Product::where(['status'=>1])->orderby('id', 'asc')->get();
    	return view('vriddhi.index')->with(compact('banner_data', 'product_data'));
    }

    public function about(){
        $FrontPages = FrontPages::where(['id'=>1,'status'=>1])->orderby('id', 'asc')->get();
        return view('vriddhi.about')->with(compact('FrontPages'));
    }

    public function fbg(){
        $FrontPages = FrontPages::where(['id'=>4,'status'=>1])->orderby('id', 'asc')->get();
        return view('vriddhi.freeBuyersGuide')->with(compact('FrontPages'));
    }

    public function onlineStore(){
    	return view('vriddhi.onlineStore');
    }

    public function rh(){
    	$FrontPages = FrontPages::where(['id'=>3,'status'=>1])->orderby('id', 'asc')->get();
        return view('vriddhi.radioHire')->with(compact('FrontPages'));
    }

    public function ln(Request $request){
        $blog_data = Blog::paginate(3);
        return view('vriddhi.latestNews')->with(compact('blog_data'));
    }

    public function frb(){
        $category_data = Category::where(['status'=>1])->orderby('id', 'asc')->get();
        return view('vriddhi.findRadioBy')->with(compact('category_data'));
    }

    public function contact(){
    	return view('vriddhi.contact');
    }

    public function userContact(Request $request){
    		if ($request->isMethod('post')) {

    			$this->validate($request,[
    				'name' => 'required|min:5|max:35',
    				'comp_name' => 'required|min:5|max:35',
    				'uemail' => 'required|email',
    				'phone' => 'required|numeric',
    				'start_date' => 'required',
    				'end_date' => 'required',
    				'postal_addr' => 'required|min:5',
    				'extra_info' => 'required|min:5',
    			],[
    				'name.required' => 'The Name field is required.',
    				'name.min' => ' The Name must be at least 5 characters.',
    				'name.max' => ' The Name may not be greater than 35 characters.',
    				'comp_name.required' => 'The company name field is required.',
    				'comp_name.min' => ' This company name must be atleast 5 characters long.',
    				'comp_name.max' => ' The company name may not be greater than 35 characters.',
    				'uemail.required' => 'The Email field is required',
    				'uemail.email' => 'Please input correct email.',
    				'phone.required' => ' The phone number field is required.',
    				'phone.numeric' => ' The Phone number must be numeric.',
    				
    				'start_date.required' => ' The start date must be selected.',
    				'end_date.required' => ' The end date field must be selected.',
    				'postal_addr.required' => 'The postal address field must be filled.',
    				'postal_addr.min' => 'The postal address field must be more than 5 charcters',
    				'extra_info.required' => 'The extra information field must be filled.',
    				'extra_info.min' => 'The extra information field must be more than 5 charcters.',
    				
    			]);

    			$data	=	$request->all();
    			

    			$uc 	=	new UserContact();
    	        $uc->name  =   $data['name'];
    			$uc->company_name 	=	$data['comp_name'];
    			$uc->email 	=	$data['uemail'];
    			$uc->contact 	=	$data['phone'];
    			$uc->start_date =	$data['start_date'];
    			$uc->end_date =	$data['end_date'];
    			$uc->postal_addr 	=	$data['postal_addr'];
    			$uc->extra_info =	$data['extra_info'];
    			
    			
    			$uc->save();
    			Alert::success('Your query Successfully submitted. We will contact you soon. Thank you.', 'Success Message');
    			return redirect()->back();
    			// return redirect('/admin/viewProduct')->with('flsMsgSuc', 'Product Added Successfully');
    		}
    }
}
