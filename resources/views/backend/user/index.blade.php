@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

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
                <th>状态</th>
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
                <td>{{ $user->status }}</td>
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
