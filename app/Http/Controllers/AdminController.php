<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data	=	$request->input();
    		if(Auth::attempt(['email'=>$data['username'], 'password'=>$data['password']])){
    			return redirect('admin/dashboard');
    		}else{
    			return redirect('/admin')->with('error_flash_msg', 'Invalid username or password');
    		}
    	}
    	return view('admin.admin_login');
    }

    public function dashboard(Request $request){
    	return view('admin.dashboard');
    }
}
