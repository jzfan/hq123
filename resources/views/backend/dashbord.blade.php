@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">个人用户</div>
                <div class="panel-body">
                       <div class="list-group">
                        @foreach ($users as $user)
                         <a href="#" class="list-group-item">{{ $user->id }} {{ $user->name }}</a>
                        @endforeach
                       </div>
                       <a class="pull-right" href='/users'>>>more</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">机构用户</div>
                <div class="panel-body">
                   dashbord
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                   dashbord
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
