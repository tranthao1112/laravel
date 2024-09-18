<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function trangchu(){
        $sp=Product::where('id','<','166')->get();
        return view('trangchu.Trangchu',compact('sp'));

    }
    public function index(){
        $sp=Product::all();
        return view('trangchu/Index',compact('sp'));
    }
    // public function layout(){
    //     $sp=Product::all();
    //     return view('trangchu.Trangchu',compact('sp'));
    // }
    public function chitiet($id){
        $sp=Product::find($id);
        return view('trangchu/chitietsp',compact('sp'));
    }
    // public function dmuc($Id){
    //     $sp=Category::find($Id);
    //     return view('trangchu/dmuc',compact('sp'));
    // }
    //
}
