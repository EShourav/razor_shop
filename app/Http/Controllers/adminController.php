<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class adminController extends Controller
{
    public function dashboard()
    {
    	$this->AdminAuthCheck();
    	return view('admin.dashboard');
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
