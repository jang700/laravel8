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
        margin: auto;
    }
     .wrap {
         width: 80%;
         margin: auto;
         display: flex;
     }
     .container {
         display: flex;
        flex-wrap: wrap;
         justify-content: center;
         align-items: center;
     }
     .item {
         display: flex;
         
     }
     .img {
         width: 40%;
         margin-right: 50px;
         background-color: gray;
    }
    .txt {
        width: 50%;
        text-align: justify;
    }
    .new {
        background-color: blue;
        color: white;
        display: inline-block;
        padding: 3px 10px;
    }
    .line {
        height: 1px;
        width: 100%;
        background-color:gray;
        margin: 20px 0;
    }
    h2 {
        display: inline-block;
        margin-top: 8px;
    }
    .date {
        color: blue;
        display: inline-block;
        margin: 8px 0;
    }
     .news-title {
         margin: 30px auto;
         font-size: 25px;
         font-weight: 600;
    }
    .btn {
        background-color: gray;
        font-size: 18px;
        padding: 5px 10px;
        color: white;
        text-decoration:none;
    }
 </style>
@endsection

@section('main')
<div class="wrap">
    <div class="container">

        <div class="news-title">
           產品指南
        </div>
        <div class="line"></div>

        <div class="item">
            <div class="img"></div>
            <div class="txt">
                <p class="new">熱門產品</p>
                <h2>美食、海洋、陽光，準備好渡假的心情，盡情倘佯在這海角樂園吧！</h2>
                <span class="date">2021-12-13</span>
                <p>境內設置9個國家公園和13個國家風景區，不僅可探訪太魯閣氣勢磅礡的險峻高山峽谷；抑或攀登東北亞第一高峰—玉山，見證雄偉山岳和四季景致之變幻；來到南臺灣的墾丁，濃厚的海洋渡假氣息讓人感到輕鬆自在，享有「亞洲夏威夷」的美譽；日月潭則是一顆耀眼的山中明珠，湖山共融的景色教人嘆絕！而花東縱谷和海岸，保留了東臺灣最純淨的自然氣息；離島的金門與澎湖，則以豐富的地方特色、人文史蹟拼湊出與眾不同的風情……這些都是寶島美麗的召喚與邀約！
                </p>
                <a href="#" class="btn">more</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection