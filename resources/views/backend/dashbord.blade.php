@extends('layouts.admin')

@section('content')
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="row">
            <div class="col-sm-4">
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

            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">机构用户</div>
                    <div class="panel-body">
                       dashbord
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                       dashbord
                    </div>
                </div>
            </div>

        </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
@endsection
