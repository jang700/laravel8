@extends('layouts.template')

@section('css')

    
@endsection

@section('main')
<div class="container">
    <div class="card ml-auto feedback">
        <div class="card-body">
            <form action="{{asset('/news-create')}}" method="POST">
                @csrf
                <h5 class="card-title">聯絡我們</h5>
                <h6 class="card-subtitle mb-2 text-muted">如有任何批評與指教歡迎留下聯絡資料，將會有專人與您聯繫。</h6>
                <div class="my-4">
                    <label for="name" class="form-label">姓名</label>
                    <input type="text" class="form-control mb-3" id="name" name="name" aria-describedby="basic-addon3">
                    <label for="phone" class="form-label">電話</label>
                    <input type="text" class="form-control mb-3" id="phone" name="phone" aria-describedby="basic-addon3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control mb-3" id="email" name="email" aria-describedby="basic-addon3">
                    <label for="content" class="form-label">Message</label>
                    <textarea type="text" rows="4" class="form-control message_textarea" name="content" id="content" 
                        aria-describedby="basic-addon3"></textarea>
                </div>
                <button type="submit" class="btn w-100 px-4 feedback_btn">送出</button>
                <p class="mt-2">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.
                </p>
            </form>
        </div>
    </div>
</div>
    
@endsection

@section('js')
    
@endsection