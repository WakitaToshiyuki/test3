<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\Weight_logRequest;
use App\Http\Requests\Weight_targetRequest;
use App\Models\User;
use App\Models\Weight_log;
use App\Models\Weight_target;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function step1(){
        return view('register__step1');
    }

    public function create1(UserRequest $request){
        $user = $request -> only(['name','email','password']);
        User::create($user);
        return redirect('/register/step2');
    }

    public function step2(){
        return view('register__step2');
    }

    // public function create2(Weight_logRequest $request){
    //     $weight_log = $request -> only(['weight']);
    //     Weight_log::create($weight_log);

    //     $weight_target = $request -> only(['target_weight']);
    //     Weight_target::create($weight_target);

    //     return redirect('/weight_logs');
    // }

    public function create2(Request $request){
        // バリデーション（任意）
        $validated = $request->validate([
            'weight' => 'required|numeric|regex:/^\d{4}$/|regex:/^\d+(\.\d{1})?$/',
            // 'required','numeric','regex:/^\d{4}$/','regex:/^\d+(\.\d{1})?$/'
            'target_weight' => 'required|regex:/^\d{4}$/|regex:/^\d+(\.\d{1})?$/',
            // 'required','regex:/^\d{4}$/','regex:/^\d+(\.\d{1})?$/'
        ],[
            'weight.required'=>'体重を入力してください',
            'weight.numeric'=>'数字で入力してください',
            'weight.regex:/^\d{4}$/'=>'4桁までの数字で入力してください',
            'weight.regex:/^\d+(\.\d{1})?$/'=>'小数点は1桁で入力してください',
            'target_weight.required'=>'目標の体重を入力してください',
            'target_weight.regex:/^\d{4}$/'=>'4桁までの数字で入力してください',
            'target_weight.regex:/^\d+(\.\d{1})?$/'=>'小数点は1桁で入力してください',
        ]);

        // モデルへの保存
        Weight_log::create(['weight' => $validated['weight']]);
        Weight_target::create(['target_weight' => $validated['target_weight']]);

        return redirect('/weight_logs');
    }
}
