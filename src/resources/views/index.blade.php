@extends('layouts.app') 
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
        @
        <tr>
            <td>{{""}}</td>
            <td>{{""}}<span>kg</span></td>
            <td>{{""}}<span>cal</span></td>
            <td>{{""}}</td>
            <td>
                <button></button>
            </td>
        </tr>
    </table>
</div>

@endsection
