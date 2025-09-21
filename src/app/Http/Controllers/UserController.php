<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('register__step1');
    }

    public function step1(){
        return view('register__step1');
    }

    public function create1(Request $request){
        $user = $request -> only(['name','email','password']);
        User::create($user);
        return redirect('/register/step2');
    }

    public function step2(){
        return view('register__step2');
    }

    public function create2(Request $request){
        $weight_log = $request -> only(['weight']);
        Weight_log::create($weight_log);

        $weight_target = $request -> only(['target_weight']);
        Weight_target::create($weight_target);

        return redirect('/weight_logs');
    }
}
