@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
<style>
    th,td{
        text-align: center;
        vertical-align: middle;
    }
</style>

@section('main')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h2 class="card-header 1h-1">設施介紹管理</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="{{route('facility.create')}}" class="btn btn-success">新增設施</a>
                    {{-- {{ route('facility.create') }}  {{asset('/admin/news/create')}} ('facility.create')--}}
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>標題</th>
                                <th>內容</th>
                                <th width='250'>圖片</th>
                                <th width="120">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facilities as $facility)
                                <tr>
                                    <td>{{$facility->title}}</td>
                                    <td>{{$facility->content}}</td>
                                    <td><img src="{{Storage::url($facility->image_url)}}" alt="" width="200"></td>
                                    <td class=>
                                        <a href="{{ route('facility.edit',['id' => $facility->id])}}" class="btn btn-primary">編輯</a>
                                      
                                        <button class="btn btn-danger delete-btn">刪除</button>
                                        <form class="d-none" action="{{route('facility.destroy' , ['id' => $facility->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    // 初始化DataTable
    $(document).ready( function () {
        $('#my-table').DataTable({
            "order":[],
            language:{
                url: "{{asset('js/datatable-zh.json')}}"
            }
            // language:{
            //         "processing":   "處理中...",
            //         "loadingRecords": "載入中...",
            //         "lengthMenu":   "顯示 MENU 項結果",
            //         "zeroRecords":  "沒有符合的結果",
            //         "info":         "顯示第 START 至 END 項結果，共 TOTAL 項",
            //         "infoEmpty":    "顯示第 0 至 0 項結果，共 0 項",
            //         "infoFiltered": "(從 MAX 項結果中過濾)",
            //         "infoPostFix":  "",
            //         "search":       "搜尋:",
            //         "paginate": {
            //             "first":    "第一頁",
            //             "previous": "上一頁",
            //             "next":     "下一頁",
            //             "last":     "最後一頁"
            //         },
            //         "aria": {
            //             "sortAscending":  ": 升冪排列",
            //             "sortDescending": ": 降冪排列"
            //         }
            //     }
        });
    });

    const deleteElements = document.querySelectorAll('.delete-btn');
    deleteElements.forEach(function(deleteElement){
        deleteElement.addEventListener('click',function () {
            if(confirm('你確定要刪除這筆資料嗎？')){
                this.nextElementSibling.submit();
            }
        });
    });
</script>
@endsection