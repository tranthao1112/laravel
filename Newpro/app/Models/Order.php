<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id','name','email','phone','address','status','token','created_at'];

    public function details(){
        return $this->hasMany(OrderDetail::class,'order_id','id');

    }
    public function customer(){
        return $this->belongsTo(Customer::class,'id','customer_id');
    }
    protected $hidden=[
        'update_at',
    ];
    public function totalPrice(){
        $total=0;
        foreach($this->details as $item){
            $total += $item->soluong * $item->gia;
        }
        return $total;
    }
}

