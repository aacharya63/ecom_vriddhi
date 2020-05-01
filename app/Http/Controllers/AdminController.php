<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class AdminController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data	=	$request->input();
    		if(Auth::attempt(['email'=>$data['username'], 'password'=>$data['password'], 'isAdmin'=> '1'])){
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

    public function logout(Request $request){
        Session::flush();
        return redirect('/admin')->with('successFlushMsg', 'You are logOut successfully');
    }
}
