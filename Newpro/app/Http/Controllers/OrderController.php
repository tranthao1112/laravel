<?php

namespace App\Http\Controllers;
use App\Helper\Cart;
use App\Mail\OrderMailable;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class OrderController extends Controller
{
    public function checkout(Cart $cart){
        $customer = auth('cus')->user();
        return view('customer/checkout',compact('cart','customer'));
    }

    public function post_checkout(Request $request,Cart $cart){
        $data= $request->only('name','email','phone','address');
        $data['customer_id'] = auth('cus')->id();
            if($order = Order::create($data)){
                foreach($cart->items as $item){
                    $detail = [
                        'order_id'=>$order->id,
                        'product_id'=>$item->Ma,
                        'gia'=>$item->giasp,
                        'tensp'=>$item->tensp,
                        'soluong'=>$item->Soluong
                    ];
                    OrderDetail::create($detail);
                }
                $cart->clear();
                $order->update(['token'=> Str::random(40)]);
                //gửi mail
                $customer= auth('cus')->user();
                Mail::to($customer->email)->send( new OrderMailable($order,$customer));
                return redirect()->route('order.success');
            }
    }

    public function history(){
        $customer= auth('cus')->user();
        $orders= $customer->orders;
        return view('order_history',compact('customer','orders'));
    }
    
    public function detail(Order $order){
        $customer = auth('cus')->user();
        return view('order_detail',compact('order','customer'));
    }

    public function order_success(){
        return view('order_success');
    }
    public function verify_order($token){
        $order=Order::where('token',$token);
        if($order){
            $order->update(['status'=>1,'token'=>null]);
        }
        return abort(404);
    }
    public function delete($id,OrderDetail $orderDetail){
        OrderDetail::where('order_id',$id)->delete();
        Order::find($id)->delete();
        return redirect()->route('order.history');

    }
    public function detail_admin($id,Order $order){
        $customer = Order::find($id);
        $order = Order::where('id',$id)->first();
    //    $or=Order::where('status',0)->get();
        return view('order/detail',compact('order','id','customer'));
    }
    public function update_admin(Request $request){
        $id=$request->id;
        $status=$request->status;
        DB::table('orders')->where('id',$id)->update([
            'status'=>$status,
        ]);
        return redirect()->route('order.index');

    }
    
    public function admin_history(){
        $order=Order::all();
        return view('order.index',compact('order'));
    }
    public function delete_detail($id){
        DB::table('order_details')->where('order_id',$id)->delete();
        
        return redirect()->route('order.index');

    }
    public function detele_admin($id){
        DB::table('orders')->where('id',$id)->delete();
        return redirect()->route('order.index');
    }
    //
}
