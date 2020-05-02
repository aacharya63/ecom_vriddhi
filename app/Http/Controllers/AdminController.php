<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
Use Alert;
use App\User;
use Image;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
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

    public function admin_edit_profile(Request $request, $id=null){
        $apd = User::where(['id'=>$id, 'isAdmin'=>1])->first();
        //return $apd;
        if($request->isMethod('post')){
            $data = $request->all();
            if ($request->hasfile('profile_img')) {
                echo $img_tmp   =   Request('profile_img');
                if ( $img_tmp->isValid() ) {
                    $extension  =   $img_tmp->getClientOriginalExtension();
                    $filename   =   rand(100,9999).'.'.$extension;
                    $img_path   =   'uploads/profile/'.$filename;
                    Image::make($img_tmp)->resize(500,500)->save($img_path);
                }
            }
            else{
                $filename = $data['current_img'];
            }
            User::where(['id'=>$id])->update(['name'=>$data['name'], 'email'=>$data['email'], 'mobile'=>$data['mobile'], 'img'=>$filename]);
            Alert::success('Profile updated successfully', 'Success Message');
            return redirect()->back();
        }
        return view('admin.editProfile')->with(compact('apd'));
    }

    public function changePassword(Request $request, $id=null){
        $apd = User::where(['id'=>$id, 'isAdmin'=>1])->first();
        
        if($request->isMethod('post')){
            $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Alert::success('Password updated successfully', 'Success Message');
            return redirect()->back();
        
        }
        return view('admin.changePassword')->with(compact('apd'));
    }
}
