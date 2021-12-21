@extends('layouts.template')
@section('css')
 <style>
     main{
         padding: 50px 0;
     }
     .img {
         width: 100%;
         height: 100%;
         background-size: cover;
         background-position: center;
     }
     .card-body{
         min-height: 250px;
     }
     .room {
         text-align: center
     }

 </style>
@endsection

@section('main')

<div class="container">
    <h3 class="room">設施介紹</h3>
    @foreach ($facilities as $facility )
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
              <div class="img" style="background-image: url('{{Storage::url($facility->image_url)}}')" class="img-fluid rounded-start" alt="...">
              </div>
            {{-- <img src="" class="img-fluid rounded-start" alt="..."> --}}
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$facility->title}}</h5>
              <p class="card-text">{{!!$facility->content!!}}</p>
             
            </div>
          </div>
        </div>
      </div>
    @endforeach
    
</div>

    
@endsection

@section('js')
    
@endsection