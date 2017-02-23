@section('content')
<div class="box box-success">
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
                <th>金额</th>
                <th>类型</th>
                <th>文件</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            @foreach($user->loans as $loan)
            <tr>
                <th>{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->phone }}</td>
                <td><span class="glyphicon glyphicon-yen" aria-hidden="true"></span> {{ $loan->amount }}</td>
                <td>{{ $loan->type }}</td>
                <td><img src='{{ $user->file->path }}' width="60"></td>
                <td>
                    <button class='btn-danger' onclick='reject({{ $user->id }}, this)'><span class="fa fa-close" aria-hidden="true"></span> </button>
                </td>
            </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
        <div class="pull-right">
            {!! $users->links() !!}        
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
function reject(id, btn)
{
    $.post('/users/'+id+'/reject', {}, function(result){
        $(btn).closest('tr').css('display', 'none');
        $('#success-div').show();
    });
}
</script>
@stop

@extends('layouts.admin')
