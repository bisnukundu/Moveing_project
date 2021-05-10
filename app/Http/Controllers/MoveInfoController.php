<?php

namespace App\Http\Controllers;

use App\Mail\sentInfo;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

class MoveInfoController extends Controller
{
    public function index(){
        return view('front-end.home');
    }
    public function items(Request $request){
        return view('front-end.items',['data'=>$request->input()]);

    }
    public function sendMail(Request $request){
        Mail::to($request->input('email'))->send(new sentInfo($request->input()));
        return redirect('/')->with("message","Your Requested Successfully Done. Very soon we will discuss with you. (For Emergency Call In This Number 0696523555) Thank you.");
    }
}
