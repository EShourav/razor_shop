<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class categoryController extends Controller
{
    public function addcategory()
    {
    	return view('admin.add_category');
    }

    public function savecategory(Request $request)
    {
    	$data = array();
    	$data['parent_id'] = $request->parent_category;
    	if(strpos($data['parent_id'], "Select") !== false)
			$data['parent_id']='';
    	$data['name'] = $request->category_name;
    	$data['eng'] = $request->category_eng;
    	if($data['eng']==NULL)
    		$data['eng']='';
    	$data['slug'] = $request->category_slug;
    	$data['order'] = $request->category_order;
    	$data['menu'] = $request->menu;
    	if($data['menu']==NULL)
    		$data['menu']=0;
    	$data['feature'] = $request->feature;
    	if($data['feature']==NULL)
    		$data['feature']=0;
    	$data['home'] = $request->home;
    	if($data['home']==NULL)
    		$data['home']=0;

    	$image=$request->file('category_image');
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
    			DB::table('tbl_category')->insert($data);
    			return Redirect::to('/add_category');
    		}
    	}
    	$data['image']='';
    	DB::table('tbl_category')->insert($data);
    	return Redirect::to('/add_category');
    }
}
