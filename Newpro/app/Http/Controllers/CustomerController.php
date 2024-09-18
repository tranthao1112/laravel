<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function login()
    {
        return view('customer/login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('customer.login');
    }
    public function post_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $login_data = [
            'email' => $email,
            'password' => $password
        ];
        $check_login = Auth::guard('cus')->attempt($login_data);
        if($check_login){
            
            return redirect()->route('order.checkout');
        }else{
            return "Dương đẹp trai";
        }
        
        
    }
    public function register()
    {
        return view('customer.register');
    }
    public function post_register(Request $request)
    {
        $name= $request->name;
        $email=$request->email;
        $phone=$request->phone;
        $address=$request->address;
        $password=$request->password;
        
        $rules = [
            'name' => 'required|max:100',
            'email' => 'required|unique:customers|max:100',
            'phone' => 'required|min:10|max:10',
            'address' => 'required|max:200',
            'password' => 'required|min:6|max:12',
            'password_confirmation' => 'required|same:password',

        ];
        $message = [
            // 'name.required' => 'Vui lòng nhập họ tên'
        ];
        $request->validate($rules,$message);
        // Lưu thông in vào bảng customer
        $add = Customer::create([
            'name' => $name,
            'email' => $email,
            'phone'=>$phone,
            'address' => $address,
            'password' => $password
        ]);
        // kiểm tra thêm mới thành công hay không
        if($add==false){
            return redirect()->back()->with('error','Đăng ký không thành công vui lòng thử lại');
        }
        return redirect()->route('customer.login');
    
    
    }
   
    //
}
