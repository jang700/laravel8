@extends('layouts.template')


@section('css')
<style>
   *{
            box-sizing: border-box;
            border: 0;
            margin: 0;
        }
        body {
            width: 100%;
        }
        .container {
            width: 60%;
            margin: auto;
        }

        h1 {
            padding: 20px 0;
        }

        b {
            color: blue;           
        }

        .line {
            height: 1px;
            width: 100%;
            background-color:gray;
            margin: 20px 0;
        }
        p {
            line-height: 1.8;
            text-align: justify;
        }
        .img{
            width: 60%;    
            height: 200px;
            margin: 20px auto;
            background-size: cover;
        }
</style>
@endsection


@section('main')
<div class="container">
    <div class="img" style="background-image: url({{$news->image_url}})"></div>
    <h2>{{$news->title}}</h2>
    <div class="date"><span>發布日期 : <b>{{$news->date}}</b></span>
        <span>瀏覽次數 :<b>699</b></span>
    </div>
    <hr>
    <p>{{$news->content}}</p>
</div>
@endsection

@section('js')
    
@endsection

