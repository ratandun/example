<?php

namespace App\Http\Controllers\Admin;
use App\Vip_cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VipController extends Controller
{
    public function add() {
    	echo"welcome";
    	       $vips = Vip_cat::get();
       // print_r($vips->toArray());
          return view('admin/add-vip', compact('vips'));
    }
    }

