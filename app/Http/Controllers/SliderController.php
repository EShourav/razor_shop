<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class SliderController extends Controller
{
    public function index()
    {
    	return view('admin.slider');
    }

    public function addsliderpage()
    {
    	return view('admin.add_slider');
    }

    public function saveslider(Request $request)
    {
    	$data = array();
    	$data['status'] = $request->status;
    	if($data['status']==NULL)
    		$data['status']=0;
    	$data['place'] = $request->position;
    	if($data['place']=="Main Slider")
    		$data['place']=1;
    	else if($data['place']=="Right Upper Position")
    		$data['place']=2;
    	else if($data['place']=="Right Lower Position")
    		$data['place']=3;
    	$image=$request->file('slider_image');
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
    			DB::table('sliders')->insert($data);
    			return Redirect::to('/slider');
    		}
    	}
    	$data['image']='';
    	DB::table('sliders')->insert($data);
    	return Redirect::to('/slider');
    }

    public function sizeindex()
    {
        return view('admin.size');
    }

     public function addsizepage()
    {
        return view('admin.add_size');
    }

    public function savesize(Request $request)
    {
        $data = array();
        $data['size'] = $request->size;
        DB::table('size')->insert($data);
        return Redirect::to('/size');
    }

}
