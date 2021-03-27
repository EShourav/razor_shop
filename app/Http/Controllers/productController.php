<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function addproduct()
    {
    	return view('admin.add_product');
    }
}
