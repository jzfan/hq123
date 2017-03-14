@extends('layouts.admin')

@section('content')
      <div class="row">
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h5>客户姓名：&nbsp;<span class="">张泉志</span>&nbsp;<small class="label bg-yellow">待签约</small> </h5>
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
                <li><a href="#">手机 <span class="pull-right">1378999280</span></a></li>
                <li><a href="#">贷款额度 <span class="pull-right">100(万)</span></a></li>
                <li><a href="#">期限<span class="pull-right">36(月) </span></a></li>
                <li><a href="#">应还本金<span class="pull-right">3000(月)</span></a></li>
                <li><a href="#">应还利息<span class="pull-right">200(月)</span></a></li>
                <li><a href="#">应还本息合计<span class="pull-right">3200(月)</span></a></li>
                <li><a href="###">审批操作 <span class="pull-right">
                <button type="button" class="btn btn-default bg-green btn-xs"><i class="fa fa-check"></i>通过</button>
                <button type="button" class="btn btn-default bg-blue btn-xs"><i class="fa fa-star"></i>已签约</button>
                <button type="button" class="btn btn-default bg-red btn-xs"><i class="fa  fa-close "></i>拒绝</button>
                </span></a></li>
                <li><a href="#">备注 <span class="pull-right">{{ $model->loan->mark }}</span></a></li>
              </ul>
            </div>

          </div>
    
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center" style="display: block;">
            <a href="javascript:void(0)" class="uppercase">查看图片</a>
          </div>
          <!-- /.box-footer -->
          </div>
          <!-- /.widget-user -->
        </div>




        <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h5>姓名：&nbsp;<span class="">张泉志</span>&nbsp;<small class="label bg-green">通过</small> </h5>
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
                <li><a href="#">手机 <span class="pull-right">1378999280</span></a></li>
                <li><a href="#">贷款额度 <span class="pull-right">100(万)</span></a></li>
                <li><a href="#">期限<span class="pull-right">36(月) </span></a></li>
                <li><a href="#">应还本金<span class="pull-right">3000(月)</span></a></li>
                <li><a href="#">应还利息<span class="pull-right">200(月)</span></a></li>
                <li><a href="#">应还本息合计<span class="pull-right">3200(月)</span></a></li>
                <li><a href="###">审批操作 <span class="pull-right">
                <button type="button" class="btn btn-default bg-green btn-xs"><i class="fa fa-check"></i>待签约</button>
                <button type="button" class="btn btn-default bg-blue btn-xs"><i class="fa fa-star"></i>已签约</button>
                <button type="button" class="btn btn-default bg-red btn-xs"><i class="fa  fa-close "></i>拒绝</button>
                </span></a></li>
                <li><a href="#">备注 <span class="pull-right">{{ $model->loan->mark }}</span></a></li>
              </ul>
            </div>

          </div>
    
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center" style="display: block;">
            <a href="javascript:void(0)" class="uppercase">查看图片</a>
          </div>
          <!-- /.box-footer -->
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->



        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h5>姓名：&nbsp;<span class="">张泉志</span>&nbsp;<small class="label bg-red">拒绝</small> </h5>
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
                <li><a href="#">手机 <span class="pull-right">1378999280</span></a></li>
                <li><a href="#">贷款额度 <span class="pull-right">100(万)</span></a></li>
                <li><a href="#">期限<span class="pull-right">36(月) </span></a></li>
                <li><a href="#">应还本金<span class="pull-right">3000(月)</span></a></li>
                <li><a href="#">应还利息<span class="pull-right">200(月)</span></a></li>
                <li><a href="#">应还本息合计<span class="pull-right">3200(月)</span></a></li>
                <li><a href="###">审批操作 <span class="pull-right">
                <button type="button" class="btn btn-default bg-green btn-xs"><i class="fa fa-check"></i>通过</button>
                <button type="button" class="btn btn-default bg-blue btn-xs"><i class="fa fa-star"></i>已签约</button>
                <button type="button" class="btn btn-default bg-yellow btn-xs"><i class="fa  fa-close "></i>待签约</button>
                </span></a></li>
                <li><a href="#">备注 <span class="pull-right">{{ $model->loan->mark }}</span></a></li>
              </ul>
            </div>

          </div>
    
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center" style="display: block;">
            <a href="javascript:void(0)" class="uppercase">查看图片</a>
          </div>
          <!-- /.box-footer -->
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->

        

        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h5>姓名：&nbsp;<span class="">张泉志</span>&nbsp;<small class="label bg-green">已签约</small> </h5>
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
                <li><a href="#">手机 <span class="pull-right">1378999280</span></a></li>
                <li><a href="#">贷款额度 <span class="pull-right">100(万)</span></a></li>
                <li><a href="#">期限<span class="pull-right">36(月) </span></a></li>
                <li><a href="#">应还本金<span class="pull-right">3000(月)</span></a></li>
                <li><a href="#">应还利息<span class="pull-right">200(月)</span></a></li>
                <li><a href="#">应还本息合计<span class="pull-right">3200(月)</span></a></li>
                <li><a href="###">审批操作 <span class="pull-right">
                <button type="button" class="btn btn-default bg-green btn-xs"><i class="fa fa-check"></i>通过</button>
                <button type="button" class="btn btn-default bg-yellow btn-xs"><i class="fa fa-star"></i>待签约</button>
                <button type="button" class="btn btn-default bg-red btn-xs"><i class="fa  fa-close "></i>拒绝</button>
                </span></a></li>
                <li><a href="#">备注 <span class="pull-right">{{ $model->loan->mark }}</span></a></li>
              </ul>
            </div>

          </div>
    
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center" style="display: block;">
            <a href="javascript:void(0)" class="uppercase">查看图片</a>
          </div>
          <!-- /.box-footer -->
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->





      </div>
@stop