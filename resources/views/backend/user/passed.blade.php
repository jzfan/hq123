@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="alert alert-success" id='success-div' role="alert" style="display: none">操作成功！</div>
<div class="col-md-12">
    <table class='table table-responsive table-hover'>
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
                <td><span class="glyphicon glyphicon-yuan" aria-hidden="true"></span>{{ $loan->amount }}</td>
                <td>{{ $loan->type }}</td>
                <td><img src='{{ $user->file->path }}' width="60"></td>
                <td>
                    <button class='btn-danger' onclick='reject({{ $user->id }}, this)'>&chi;</button>
                </td>
            </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
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
