<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function addcategory()
    {
    	return view('admin.add_category');
    }
}
