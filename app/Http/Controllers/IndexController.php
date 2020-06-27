<?php

namespace App\Http\Controllers;

use App\Models\Thesis;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
	    $thesisList=Thesis::with(['uniName','deptName','catName'])->orderBy('id','desc')->take(10)->get();
	    return view('welcome',compact('thesisList'));
    }
}
