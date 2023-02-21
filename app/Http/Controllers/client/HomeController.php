<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){

        $mProducts = Product::where('featured',true)->where('category_id',1)->get();
        $wmProducts = Product::where('featured',true)->where('category_id',2)->get();
        $cProducts = Product::where('featured',true)->where('category_id',3)->get();
        $blogs = Blog::orderBy('id','desc')->limit(3)->get();
        return view('client.home', compact('mProducts','wmProducts','cProducts','blogs'));
    }
}
