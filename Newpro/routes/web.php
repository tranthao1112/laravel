<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CateController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CustomerMiddleware;
use GuzzleHttp\Middleware;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

// Route::get('/',function(){
//     return view('admin/AdminMaster');
// });
Route::get('/',[AdminController::class,'ad'])->middleware('auth')->name('ad');
// Route::group(['prefix' => 'admin','middleware'=>'auth'], function(){
//     Route::get('/',function(){
//         return view('admin/AdminMaster');
//     });
// });

Route::prefix('product')->group(function () {
    Route::get('danh-sach', [SanphamController::class, 'danhsach'])->name('danhsach');
    Route::get('them', [SanphamController::class, 'them'])->name('them');
    Route::post('save', [SanphamController::class, 'save'])->name('save');
    Route::delete('xoa/{id}', [SanphamController::class, 'deletesp'])->name('deletesp');
    Route::get('sua/{id}', [SanphamController::class, 'sua'])->name('sua');
    Route::put('update', [SanphamController::class, 'update'])->name('update');
});
Route::prefix('layout')->group(function(){
    Route::get('trangchu',[IndexController::class,'trangchu'])->name('trangchu.Trangchu');
    Route::get('sanpham', [IndexController::class, 'index'])->name('index');
    Route::get('chi-tiet/{id}', [IndexController::class, 'chitiet'])->name('chitiet');
    Route::get('danhmuc',[IndexController::class,'dmuc'])->name('dmuc');
});
Route::prefix('user')->group(function (){
    Route::get('user',[UserController::class,'user'])->name('user.index');
    Route::get('add',[UserController::class,'add'])->name('user.add');
    Route::post('saveadd',[UserController::class,'saveadd'])->name('saveadd');
    Route::delete('delete/{id}',[UserController::class,'delete'])->name('user.delete');
    Route::get('update/{id}',[UserController::class,'update'])->name('user.update');
    Route::put('update_user',[UserController::class,'update_user'])->name('user.up');
});
Route::prefix('admin')->group(function () {
    Route::get('order',[OrderController::class,'admin_history'])->name('order.index');
    Route::get('order_detail/{id}',[OrderController::class,'detail_admin'])->name('detail');
    Route::put('order_update',[OrderController::class,'update_admin'])->name('adupdate');
    Route::delete('detail_delete/{id}',[OrderController::class,'delete_detail'])->name('de_delete');
    Route::delete('order_delete/{id}',[OrderController::class,'detele_admin'])->name('addelete');
    

});

Route::prefix('category')->group(function () {
    Route::get('danh-muc', [CateController::class, 'danhmuc'])->name('danhmuc');
    Route::get('themcate', [CateController::class, 'themcate'])->name('themcate');
    Route::post('savecate', [CateController::class, 'savecate'])->name('savecate');
    Route::get('update/{Id}',[CateController::class,'update'])->name('category.update');
    Route::put('update',[CateController::class,'update_cate'])->name('cate.up');
    Route::delete('xoa/{id}', [CateController::class, 'delete'])->name('delete');
});

Route::prefix('cart')->group(function(){
    Route::get('view',[CartController::class,'inde'])->name('view.cart');
    Route::get('add/{id}',[CartController::class,'addcart'])->name('add.cart');
    Route::get('xoa/{id}',[CartController::class,'delete_cart'])->name('delete.cart');
    Route::put('capnhat',[CartController::class,'update'])->name('update.cart');
    Route::put('huydon',[CartController::class,'clear_cart'])->name('clear.cart');
    
});

Route::group(['prefix'=>'customer'],function(){
    Route::get('login',[CustomerController::class,'login'])->name('customer.login');
    Route::get('logout',[CustomerController::class,'logout'])->name('customer.logout');
    Route::post('login',[CustomerController::class,'post_login']);
    Route::get('register',[CustomerController::class,'register'])->name('customer.register');
    Route::post('register',[CustomerController::class,'post_register']);
    
});

Route::prefix('order')->middleware([CustomerMiddleware::class])->group(function(){
    Route::get('checkout',[OrderController::class,'checkout'])->name('order.checkout');
    Route::post('checkout',[OrderController::class,'post_checkout']);
    Route::get('order-success',[OrderController::class,'order_success'])->name('order.success');
    Route::get('history',[OrderController::class,'history'])->name('order.history');
    Route::get('detail/{order}',[OrderController::class,'detail'])->name('order.detail');
    Route::get('verify-order/{token}',[OrderController::class,'verify_order'])->name('order.verify_order');
    Route::get('delete_order/{id}',[OrderController::class,'delete'])->name('order.delete');

});
Route::prefix('Mails')->group(function(){
    Route::get('contact',[HomeController::class,'contact'])->name('home.contact');
    Route::post('contact',[HomeController::class,'send_contact']);
});
Route::get('test',[HomeController::class,''])->name('');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
