<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class brandController extends Controller
{
    public function addbrand()
    {
        $this->AdminAuthCheck();
    	return view('admin.add_brand');
    }

    public function savebrand(Request $request)
    {
        $this->AdminAuthCheck();
    	$data = array();
    	$data['name'] = $request->brand_name;
    	$data['eng'] = $request->brand_eng;
    	if($data['eng']==NULL)
    		$data['eng']='';
    	$data['slug'] = $request->brand_slug;
    	$data['feature'] = $request->feature;
    	if($data['feature']==NULL)
    		$data['feature']=0;
    	$image=$request->file('brand_image');
    	if($image)
    	{
    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path, $image_full_name);
    		if($success)
    		{
    			$data['image']=$image_url;
    			DB::table('tbl_brands')->insert($data);
    			return Redirect::to('/add_brand');
    		}
    	}
    	$data['image']='';
    	DB::table('tbl_brands')->insert($data);
    	return Redirect::to('/add_brand');
    }

    public function allbrand()
    {
        $this->AdminAuthCheck();
        return view('admin.all_brand');
    }
    
    public function AdminAuthCheck()
    {
        $admin_id=Session::get('user_id');
        $check_id=DB::table('tbl_users')
                    ->where('user_id', $admin_id)
                    ->get();
        foreach ($check_id as $v_check) {
            if($v_check->user_id==$admin_id)
            {
                return;
            }
            else
            {
                return Redirect::to('/login')->send();
            }
        }
    }
}
