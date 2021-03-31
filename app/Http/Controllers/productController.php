<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class productController extends Controller
{
    public function addproduct()
    {
    	return view('admin.add_product');
    }

    public function saveproduct(Request $request)
    {

    	$data = array();
    	$data['category_id'] = $request->category_id;
    	$data['brand_id'] = $request->brand_id;
    	$data['size'] = $request->size;
    	$data['colour'] = $request->colour;
    	$data['title'] = $request->title;
    	$data['eng'] = $request->eng;
    	$data['slug'] = $request->slug;
    	$data['product_code'] = $request->product_code;
    	$data['sell_price'] = $request->sell_price;
    	$data['discount'] = $request->discount;
    	$data['regular_price'] = $request->regular_price;
    	$data['short_description'] = $request->short_description;
    	$data['long_description'] = $request->long_description;
    	$data['meta_description'] = $request->meta_description;
    	$data['meta_keyword'] = $request->meta_keyword;
    	$data['status'] = $request->status;
    	$data['availability'] = $request->availability;

    	$image_c=$request->file('cover_image');
    	if($image_c)
    	{
    		$image_name=str_random(20);
    		$ext=strtolower($image_c->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image_c->move($upload_path, $image_full_name);
    		if($success)
    		{
    			$data['cover_photo']=$image_url;

                $image_1=$request->file('other_image_1');
                if($image_1)
                {
                    $image_name_1=str_random(20);
                    $ext_1=strlower($image_1->getClientOriginalExtension());
                    $image_full_name_1=$image_name_1.'.'.$ext_1;
                    $upload_path_1='image/';
                    $image_url_1=$upload_path_1.$image_full_name_1;
                    $success_1=$image_1->move($upload_path_1,$image_full_name_1);
                    if($success_1)
                    {
                        $data['others_photo_1']=$image_url_1;

                        $image_2=$request->file('other_image_1');
                        if($image_2)
                        {
                            $image_name_2=str_random(20);
                            $ext_2=strlower($image_2->getClientOriginalExtension());
                            $image_full_name_2=$image_name_2.'.'.$ext_2;
                            $upload_path_2='image/';
                            $image_url_2=$upload_path_2.$image_full_name_2;
                            $success_2=$image_2->move($upload_path_2,$image_full_name_2);
                            if($success_2)
                            {
                                $data['others_photo_2']=$image_url_2;

                                DB::table('product')->insert($data);
                                return Redirect::to('/add_product');                                
                            }
                        }
                        $data['others_photo_2']='';
                        DB::table('product')->insert($data);
                        return Redirect::to('/add_product');
                    }
                }
                $data['others_photo_1']='';
                $data['others_photo_2']='';
                DB::table('product')->insert($data);
                return Redirect::to('/add_product');
    		}
	    	$data['cover_photo']='';
            $data['others_photo_1']='';
	    	$data['others_photo_2']='';
            DB::table('product')->insert($data);
	    	return Redirect::to('/add_product');
            
    	}
    }

}
