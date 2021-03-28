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
}
