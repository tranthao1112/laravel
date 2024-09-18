<?php

namespace App\Http\Controllers;

use App\Http\Requests\CateStoreRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CateController extends Controller
{
    public function danhmuc()
    {
        $sp = DB::table("categories")->get();
        return view("category/danhmuc", compact("sp"));
    }
    public function themcate()
    {
        return view("category/themcate");
    }
    public function savecate(Request $request)
    {
        $name = $request['name'];
        $status = $request['status'];
        
        DB::table('categories')->insert([
            'name' => $name,
            'status' => $status=1,
        ]);
        return redirect()->route('danhmuc');
    }
    public function update($id){
        $sp= Category::find($id);
        return view('category.update',compact('sp'));
    }
    public function update_cate(Request $request)
    {
        $id = $request['id'];
        $name = $request['name'];
        $status = $request['status'];
        DB::table('categories')->where('id', $id)->update([
            'name' => $name,
            'status' => $status=1,
        ]);
        return redirect()->route('danhmuc');

    }
    public function delete($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->route('danhmuc');
    }
    public function xuly(CateStoreRequest $request)
    {
        $email = $request['email'];
        $pswd = ($request['pswd']);
        return view('admin/ketqua', compact('email', 'pswd'));
    }
}
