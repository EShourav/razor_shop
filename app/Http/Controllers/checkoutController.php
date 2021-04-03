<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class checkoutController extends Controller
{
    public function login()
    {
    	return view('login');
    }

    public function user_register(Request $request)
    {
    	$user_info=DB::table('tbl_users')
    				->get();

    	$data = array();
    	$p=$request->user_password;
    	$pc=$request->user_password_confirmed;
    	if($p!=$pc){
    		Session::put('message','Password Incorrect. Please try again.');
    		return Redirect::to('/login');
    	}
    	$data['user_role_id']=2;
    	$data['user_name']=$request->user_name;
    	$email=$request->user_email;
    	foreach ($user_info as $v_user) {
    		if($v_user->user_email==$email)
    		{
    			Session::put('message', 'Email Already In Use. Please Try Another One.');
    			return Redirect::to('/login');
    		}

    	}
    	$data['user_email']=$email;
    	$data['user_phone']=$request->user_phone;
    	$data['user_address']=$request->user_address;
    	$data['user_password']=md5($p);

    	$image=$request->file('user_image');
    	if($image)
    	{
    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/users/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path, $image_full_name);
    		if($success)
    		{
    			$data['user_image']=$image_url;
    			DB::table('tbl_users')->insert($data);
    			return Redirect::to('/login');
    		}
    	}
    	$data['user_image']='';
    	DB::table('tbl_users')->insert($data);
    	return Redirect::to('/login');
    }

    public function signin(Request $request)
    {
    	$user_email=$request->user_email;
        $user_password=md5($request->user_password);
        $result=DB::table('tbl_users')
                    ->where('user_email',$user_email)
                    ->where('user_password',$user_password)
                    ->get();

        if($result)
        {
        	foreach ($result as $v_user){
        		if(strcmp($v_user->user_role_id, "2")==0){
		            Session::put('user_id', $v_user->user_id);
		            return Redirect::to('/');
        		}
        		else{
	            Session::put('user_id', $v_user->user_id);
	            return Redirect::to('/admin');
        		}
        	}
        }
        else
        {
            return Redirect::to('/login');
        }
    }

    public function logout()
    {
        Session::flush();
        return Redirect::to('/');
    }
}
