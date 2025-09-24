@extends('layouts.app') 
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <style>
        svg.w-5.h-5 {
            /*paginateメソッドの矢印の大きさ調整のために追加*/
            width: 30px;
            height: 30px;
        }
    </style>
@endsection 

@section('content')
<div>
    <table>
        <tr>
            <td>
                <p>目標体重</p>
                <h1>72<span style="font-size:20px;">kg</span></h1>
            </td>
            <td>
                <p>目標まで</p>
                <h1>-5<span style="font-size:20px;">kg</span></h1>
            </td>
            <td>
                <p>最新体重</p>
                <h1>77<span style="font-size:20px;">kg</span></h1>
            </td>
        </tr>
    </table>
</div>
<div>
    <div>
        <form action="/weight_logs/search" method="get">
            <input type="date">
            <span style="margin: 0 8px;">〜</span>
            <input type="date">
            <button type="submit">検索</button>
        </form>
        <button action="/weight_logs/create" method="get">データ追加</button>
    </div>
    <table>
        <tr>
            <th>日付</th>
            <th>体重</th>
            <th>食事摂取カロリー</th>
            <th>運動時間</th>
        </tr>
        @foreach ($weight_logs as $weight_log)
        <tr>
            <td>{{$weight_log->date}}</td>
            <td>{{$weight_log->weight}}<span>kg</span></td>
            <td>{{$weight_log->calories}}<span>cal</span></td>
            <td>{{$weight_log->exercise_time}}</td>
            <td>
                <button></button>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $weight_logs->links() }}
</div>

@endsection
