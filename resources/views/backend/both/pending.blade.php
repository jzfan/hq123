@extends('layouts.admin')

@section('content')
<div class="box box-warning">
    <div class="box-header">
      <h3 class="box-title">Hover Data Table</h3>
    </div>
@include('layouts.success')
    <div class="box-body">
            
        <table class="table table-bordered table-hover dataTable">
        <thead>
            <tr>
                <th>#</th>
                <th>用户</th>
                <th>电话</th>
                <th>地址</th>
                <th>金额</th>
                <th>职业</th>
                <th>工作起于</th>
                <th>工资</th>
                <th>工资方式</th>
                <th>养老保险</th>
                <th>公积金</th>
                <th>其他保险</th>
                <th>房产</th>
                <th>生意类型</th>
                <th>经营时间</th>
                <th>年营业额</th>
                <th>个人占股</th>
                <th>文件</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        @foreach($applies as $apply)
            <tr>
                <th>{{ $apply->user->id }}</th>
                <td>{{ $apply->user->name }}</td>
                <td>{{ $apply->user->phone }}</td>
                <td>{{ $apply->address }}</td>
                <td><span class="glyphicon glyphicon-yen" aria-hidden="true"></span> {{ $apply->amount }}</td>
                <td>{{ $apply->profession }}</td>
                <td>{{ $apply->worked_since->format('Y-m') }}</td>
                <td>{{ $apply->salary }}</td>
                <td>{{ $apply->paid_by }}</td>
                <td>{{ $apply->yanglaobaoxian }}</td>
                <td>{{ $apply->gongjijin }}</td>
                <td>{{ $apply->qitabaoxian }}</td>
                <td>{{ $apply->fangchan }}</td>
                <td>{{ $apply->shenyileixin }}</td>
                <td>{{ $apply->jinyinshijian }}</td>
                <td>{{ $apply->turnover }}</td>
                <td>{{ $apply->gerenzhangu }}</td>
                <td><img src='{{ $apply->files->first()->path }}' width="60"></td>
                <td>{{ $apply->status }}</td>
                <td>
                    <button class='btn-success' onclick='pass({{ $apply->id }}, this)'><span class="fa fa-check" aria-hidden="true"></span> </button>
                    <button class='btn-danger' onclick='reject({{ $apply->id }}, this)'><span class="fa fa-close" aria-hidden="true"></span> </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <div class="pull-right">
            {!! $applies->appends(['pro' => 'worker'])->links() !!}        
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
function pass(id, btn)
{
    $.post('/applies/'+id+'/pass' ,{}, function(result){
        $('.btn-success').closest('tr').css('display', 'none');
        $('#success-div').show(); 

    });

    $.post('/applies/'+id+'/reject' ,{}, function(result){
        $('.btn-danger').closest('tr').css('display', 'none');
        $('#success-div').show(); 

    });
}
</script>
@stop