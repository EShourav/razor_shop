<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();


class shopController extends Controller
{
    public function index()
    {
    	$all_products=DB::table('product')
    					->where('product.status',1)
    					->get();

    	$manage_published_products=view('userview.shop')
    			->with('all_products',$all_products);
    	return view('layout')
    			->with('userview.shop',$manage_published_products);
    }

    public function singleproduct($id)
    {
    	$product_details=DB::table('product')
                        ->join('tbl_category','product.category_id', '=', 'tbl_category.id')
                        ->join('tbl_brands','product.brand_id','=','tbl_brands.id')
                        ->select('product.*','tbl_category.name','tbl_brands.name')
                        ->where('product.id', $id)
                        ->first();
        $manage_product_details=view('userview.view_product')
                ->with('product_details',$product_details);
        return view('layout')
                ->with('userview.view_product',$manage_product_details);
    }
}
