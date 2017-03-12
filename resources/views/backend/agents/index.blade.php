@extends('layouts.admin')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm">新增</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">新建一个代理</h4>
      </div>
      <form class="form-horizontal" role="form" action="/agents" method="POST">
        {{ csrf_field() }}
      <div class="modal-body">

<div class="form-group">
    <label for="inputID" class="col-sm-4 control-label">手机号码</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputID" name="phone" placeholder="请输入手机号码">
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="submit" class="btn btn-primary">提交</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
@foreach($agents as $agent)
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h5>姓名：&nbsp;<span class="">{{ $agent->real_name }}</span>&nbsp;<small class="label bg-red">{{ $agent->status }}</small> </h5>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
  <div class="box-body" style="display: block;">

  <div class="box box-widget widget-user">

      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a href="#">手机 <span class="pull-right">{{ $agent->phone }}</span></a></li>
          <li><a href="#">注册于 <span class="pull-right">{{ $agent->created_at->format('Y-m-d') }}</span></a></li>
          <li><a href="###">操作 <span class="pull-right">
            <button class='btn btn-default bg-red btn-xs' onclick="event.preventDefault();
                         document.getElementById('delete-form').submit();">
                         <span class="fa fa-close" aria-hidden="true"></span> 取消
            </button>

            <form id="delete-form" action="/agents/{{ $agent->id }}" method="POST" style="display: none;">
            	<input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
            </form>

          </span></a></li>
        </ul>
      </div>

    </div>

    </div>
    <!-- /.box-body -->

    <!-- /.box-footer -->
    </div>
    <!-- /.widget-user -->
  </div>
@endforeach
</div>
<div class="col-md-12">
<div class="pull-right">
  
  {!! $agents->links() !!} 
</div>
</div>
  </div>

@endsection