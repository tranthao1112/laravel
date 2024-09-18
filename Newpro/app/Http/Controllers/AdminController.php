<?php

namespace App\Http\Controllers;
use App\Helper\Cart;
use App\Mail\OrderMailable;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;



class AdminController extends Controller
{
    public function ad(){
        return view('admin/thongbao');
    }
    
    
    // public function show(Order $order){
    //     $order=Order::all();
    //     return view('order.index',compact('order'));
    // }
        
}

