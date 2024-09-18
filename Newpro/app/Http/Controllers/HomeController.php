<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contact(){
        return view('contact');
    }

    public function send_contact(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
        ]);
        $name= $request->name;
        $email= $request->email;
        $phone= $request->phone;
        $message= $request->message;
        Mail::to('bachthao111205@gmail.com')
            ->send(new ContactMailable($name,$email,$phone,$message));
            return redirect()->back()->with('ok','Gửi mail thành công');
        }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
