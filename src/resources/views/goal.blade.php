@extends('layouts.app') 
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection 

@section('content')
<div>
    <h2>目標体重設定</h2>
    <p><input type="text">kg</p>
    <div>
        <button class="" action="/weight_logs" method="get">戻る</button>
        <button class="" action="" method="post">更新</button>
    </div>
</div>

@endsection
