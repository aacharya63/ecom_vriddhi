<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\User;
use Auth;
class FrontUserController extends Controller
{
    public function lr_front(){
    	return view('vriddhi.users.login_register');
    }

    public function ur(Request $request){
    	
    	if ($request->ismethod('post')) {
    				
    		$this->validate($request,[
    		    'name' => 'required|min:5|max:50',
    		    'email' => 'required|email|unique:users',
    		    'mobile' => 'required|numeric',
    		    'password' => 'required|min:3',
        		'confirm_password' => 'required|min:3|same:password'
    		    
    		],[
    		    'name.required' => 'Please input name first.',
    		    'name.min' => ' Your name must be at least 5 characters.',
    		    'name.max' => 'Your name should not be more than 35 characters.',
    		    'uemail.required' => 'The email field is required.',
    		]);
    		$data = $request->all();
    		$user_count = User::where('email', $data['email'])->count();
    		if ($user_count>0) {
    			Alert::success('This email already exist', 'Error Message');
        		return redirect()->back()->with('fls_err_msg', 'This email already exist');
    		}
    		else{
    			$fu = new User;
	    		$fu->name = $data['name'];
	    		$fu->email = $data['email'];
	    		$fu->password = bcrypt($data['password']);
	    		$fu->mobile = $data['mobile'];
	    		$fu->save();
	    		if (Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])) {
	    			return "redirect to cart";
	    		}
    		}
    		
    	}
    }
}
