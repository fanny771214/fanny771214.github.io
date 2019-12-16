<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    //
    public function index() {
        return view('index');}

    public function about() {
        $name = 'Hello';
        $name1 = 'Welcome';
        $name2 = 'Byebye';

        
        return view('about',compact('name','name1','name2'));}

    public function news() {
        return view('news');}   

    public function product() {
        return view('product');}    
                
    public function contact_us() {
         return view('contact_us');}      
}



