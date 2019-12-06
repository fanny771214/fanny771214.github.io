<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Frontcontroller extends Controller
{
    //
    public function index()
    {


        return view('front.index');
    }

    public function news()
        {
            $news = DB::table('news')->get();

            return view('front.news', compact('news'));
        }

        public function products()
        {
            $pics = DB::table('products')->get();

            return view('front.products', compact('pics'));
        }

        public function products_detail($id)
        {
            $product = DB::table('products')->where('id',$id)->get();

            return view('front.products_detail',compact('product'));
        }
    }





