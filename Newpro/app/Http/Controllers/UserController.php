<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        $user=User::all();
        return view('user.index',compact('user'));
    }
    public function add(){
        return view('user.add');
    }
    public function saveadd(Request $request){
        $name= $request->name;
        $email=$request->email;
        $password=$request->password;
        
        $rules = [
            'name' => 'required|max:100',
            'email' => 'required|unique:customers|max:100',
            'password' => 'required|min:6|max:12',
        ];
        $request->validate($rules);

        $add = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
        if($add==false){
            return redirect()->back()->with('error','Thêm tài khoản không thành công vui lòng thử lại');
        }
        return redirect()->route('user.index');
    }
    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('user.index');
    }
    public function update($id){
        $user=User::find($id);
        return view('user.update',compact('user'));
    }
    public function update_user(Request $request){
        $id=$request['id']; 
        $name= $request['name'];
        $email=$request['email'];
        $password=$request['password'];
        
        DB::table('users')->where('id',$id)->update([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);
        return redirect()->route('user.index');

    }
    //
}
