<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class homeController extends Controller
{
    public function index()
    {
    	return view('userview.homepage');
    }

    public function viewbycategory($name)
    {
    	$all_cat_info=DB::table('tbl_category')
    					->where('tbl_category.name',$name)
    					->first();
    	$cat_id=$all_cat_info->id;
    	$productByCategory=DB::table('product')
                        ->join('tbl_category','product.category_id', '=', 'tbl_category.id')
                        ->select('product.*','tbl_category.name')
                        ->where('product.status',1)
                        ->where('product.category_id',$cat_id)
                        ->limit(20)
                        ->get();
        $manage_productByCategory=view('userview.viewcategory')
                ->with('productByCategory',$productByCategory);
        return view('layout')
                ->with('userview.viewcategory',$manage_productByCategory);
    }

    public function viewbyparentcategory($name)
    {
    	$productByCategory=DB::table('product')
    				->join('tbl_category','product.category_id','=','tbl_category.id')
    				->where('tbl_category.parent_id',$name)
    				->select('product.*')
    				->get();
    	$manage_productByCategory=view('userview.viewcategory')
    			->with('productByCategory',$productByCategory);
    	return view('layout')
    			->with('userview.viewcategory',$manage_productByCategory);
    }
}
