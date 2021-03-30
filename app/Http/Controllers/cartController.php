<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Redirect;

class cartController extends Controller
{
    public function addtocart(Request $request)
    {
    	$qty=$request->qty;
    	$product_id=$request->id;
    	$product_info=DB::table('product')
    					->where('id', $product_id)
    					->first();
    	/*print_r($product_info);*/

    	$data['id']=$product_info->id;
    	$data['name']=$product_info->title;
    	$data['qty']=$qty;
    	$data['price']=$product_info->sell_price;
    	$data['weight']=0;
    	$data['options']['image']=$product_info->cover_photo;

    	Cart::add($data);
    	return Redirect::to('/show_cart');
    }

    public function showcart()
    {
    	return view('userview.cart');
    }

    public function updatecart(Request $request)
    {

    	$qty=$request->qty;
        $rowId=$request->rowId;
        Cart::update($rowId, $qty);
        return Redirect::to('/show_cart');
    }

    public function destroycart()
    {
    	Cart::destroy();
    	return Redirect::to('/shop');
    }

    public function removeitem($id)
    {
    	Cart::remove($id);
    	return Redirect::to('show_cart');
    }
}
