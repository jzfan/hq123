@extends('layouts.admin')

@section('content')


<div class="row">
@foreach($models as $model)
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h5>姓名：&nbsp;<span class="">{{ $model->user->real_name }}</span>&nbsp;<small class="label bg-green">{{ $model->status }}</small> </h5>
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
          <li><a href="#">手机 <span class="pull-right">{{ $model->user->phone }}</span></a></li>
          <li><a href="#">贷款额度 <span class="pull-right"><span class="glyphicon glyphicon-yen" aria-hidden="true"></span> {{ $model->loan }}</span></a></li>
          <li><a href="#">期限<span class="pull-right">{{ $model->duration }}(月) </span></a></li>
          <li><a href="#">估价 <span class="pull-right">{{ $model->assess }}</span></a></li>
          <li><a href="#">购买日期 <span class="pull-right">{{ $model->bought_at }}</span></a></li>
          <li><a href="#">付款方式 <span class="pull-right">{{ $model->paid_by }}</span></a></li>
          <li><a href="###">审批操作 <span class="pull-right">
            <button class='btn btn-default bg-blue btn-xs' onclick='unpass({{ $model->id }}, this)'><span class="fa fa-reply" aria-hidden="true"></span> 待审</button>
            <button class='btn btn-default bg-red btn-xs' onclick='reject({{ $model->id }}, this)'><span class="fa fa-close" aria-hidden="true"></span> 拒绝</button>
          </span></a></li>
          <li><a href="#">备注 <span class="pull-right"></span></a></li>
        </ul>
      </div>

    </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center" style="display: block;">
        @foreach($model->files as $file)
            @if($loop->first)
                <a href="/imagecache/large/{{ $file->path }}" data-lightbox="roadtrip{{ $model->id }}">查看图片</a>
            @endif
                <a href="/imagecache/large/{{ $file->path }}" data-lightbox="roadtrip{{ $model->id }}"></a>
        @endforeach
    </div>
    <!-- /.box-footer -->
    </div>
    <!-- /.widget-user -->
  </div>
@endforeach
<div class="col-md-12">
<div class="pull-right">
  
  {!! $models->links() !!} 
</div>
</div>
  </div>

@endsection

@section('js')
<script>
function unpass(id, btn)
{
    $.post('/businesses/'+id+'/unpass' ,{}, function(result){
        $(btn).closest('.col-md-4').css('display', 'none');
        $('#success-div').show(); 
    });
}

function reject(id, btn)
{
    $.post('/businesses/'+id+'/reject', {}, function(result){
        $(btn).closest('.col-md-4').css('display', 'none');
        $('#success-div').show();
    });
}
</script>
@stop