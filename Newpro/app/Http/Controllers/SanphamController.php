<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SanphamController extends Controller
{
    public function danhsach(){
        // $sp=DB::table("products")
        // // ->select('products.*','categories.name as CateName')
        // // ->join('categories','categories.Id','=','sanpham.CateID')
        // // ->orderBy("Tensp")
        // ->get();
        $sp=Product::all();
         return view("product/dssp",compact("sp"));
     }
    //  public function cate(){
    //     $sp=DB::table("products")
    //     ->select('products.*','categories.name as CateName')
    //     ->join('categories','categories.Id','=','sanpham.CateID')
    //     ->orderBy("Tensp")
    //     ->get();
    //  }
     public function them(){
        $cate=Category::all();
         return view("product/themsp",compact("cate"));
     }
     public function sua($id){
       $sp=Product::find($id);
       $cate=Category::where('status',1)->get();
        return view('product/suasp',compact('sp','cate'));
     }
     public function update(Request $request){
        $id=$request['id'];
        $tensp=$request['tensp'];
        $hinhanh=$request['hinhanh'];
        $giasp=$request['giasp'];
        $mota=$request['mota'];
        $status=$request['status'];
        DB::table('products')->where('id',$id)->update([
            'tensp'=> $tensp,
             'hinhanh'=> $hinhanh,
             'giasp'=> $giasp,
             'mota'=> $mota,
             'status'=> $status,
        ]);
        return redirect()->route('index')->with('thongbao','Cập nhật sản phẩm thành công');
     }
     public function save(Request $request){
         $tensp=$request['tensp'];
         $hinhanh=$request['hinhanh'];
         $giasp=$request['giasp'];
         $mota=$request['mota'];
         $status=$request['status'];
        //  DB::table('products')->insert([
        //      'tensp'=> $tensp,
        //      'hinhanh'=> $hinhanh,
        //      'giasp'=> $giasp,
        //      'mota'=> $mota,
        //      'status'=> $status,
        //  ]);
        $sp = new product();
        $sp->tensp = $tensp;
        $sp->hinhanh = $hinhanh;
        $sp->giasp = $giasp;
        $sp->cate_id=1;
        $sp->mota = $mota;
        $sp->status = 1;
        $sp->save();
         return redirect()->route('index');
     }
     public function deletesp($id){
         DB::table('products')->where('id',$id)->delete();
         return redirect()->route('index');
     }
    //  public function thongke(){
    //      $sp=DB::table("products")
    //      ->select(DB::raw("count(*) as TongSoSP,CateId"))
    //      ->groupBy("CateId")
    //      ->orderBy("Tensp")
    //      ->get();
    //      dd($sp);
    //      return '';
    //  }
  
 }
