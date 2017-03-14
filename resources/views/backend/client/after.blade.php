@extends('layouts.admin')

@section('content')
      <div class="row">
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h5>客户姓名：&nbsp;<span class="">张泉志</span>&nbsp;<small class="label bg-green">正常</small> </h5>
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
                <li><a href="#">应还本息合计<span class="pull-right">3200(月)</span></a></li>
                <li><a href="#">还款日期<span class="pull-right">6号(月)</span></a></li>

                <li><a href="###">还款状态 <span class="pull-right">
                <button type="button" class="btn btn-default bg-green btn-xs"><i class="fa fa-check"></i>正常</button>
                <button type="button" class="btn btn-default bg-red btn-xs"><i class="fa  fa-close "></i>逾期</button>
                </span></a></li>
                <li><a href="#">备注 <span class="pull-right">{{ $model->loan->mark }}</span></a></li>
              </ul>
            </div>

          </div>
    
          </div>
          <!-- /.box-body -->
          
          </div>
          <!-- /.widget-user -->
        </div>




        <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h5>姓名：&nbsp;<span class="">张泉志</span>&nbsp;<small class="label bg-red">逾期</small> </h5>
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
                <li><a href="#">应还本息合计<span class="pull-right">3200(月)</span></a></li>
                <li><a href="#">还款日期<span class="pull-right">6号(月)</span></a></li>

                <li><a href="###">还款状态 <span class="pull-right">
                <button type="button" class="btn btn-default bg-green btn-xs"><i class="fa fa-check"></i>正常</button>
                <button type="button" class="btn btn-default bg-red btn-xs"><i class="fa  fa-close "></i>逾期</button>
                </span></a></li>
                <li><a href="#">备注 <span class="pull-right">{{ $model->loan->mark }}</span></a></li>
              </ul>
            </div>

          </div>
    
          </div>
          <!-- /.box-body -->
          
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->



         <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h5>姓名：&nbsp;<span class="">张泉志</span>&nbsp;<small class="label bg-red">逾期</small> </h5>
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
                <li><a href="#">应还本息合计<span class="pull-right">3200(月)</span></a></li>
                <li><a href="#">还款日期<span class="pull-right">6号(月)</span></a></li>

                <li><a href="###">还款状态 <span class="pull-right">
                <button type="button" class="btn btn-default bg-green btn-xs"><i class="fa fa-check"></i>正常</button>
                <button type="button" class="btn btn-default bg-red btn-xs"><i class="fa  fa-close "></i>逾期</button>
                </span></a></li>
                <li><a href="#">备注 <span class="pull-right">{{ $model->loan->mark }}</span></a></li>
              </ul>
            </div>

          </div>
    
          </div>
          <!-- /.box-body -->
          
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        

         <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h5>姓名：&nbsp;<span class="">张泉志</span>&nbsp;<small class="label bg-red">逾期</small> </h5>
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
                <li><a href="#">应还本息合计<span class="pull-right">3200(月)</span></a></li>
                <li><a href="#">还款日期<span class="pull-right">6号(月)</span></a></li>

                <li><a href="###">还款状态 <span class="pull-right">
                <button type="button" class="btn btn-default bg-green btn-xs"><i class="fa fa-check"></i>正常</button>
                <button type="button" class="btn btn-default bg-red btn-xs"><i class="fa  fa-close "></i>逾期</button>
                </span></a></li>
                <li><a href="#">备注 <span class="pull-right">{{ $model->loan->mark }}</span></a></li>
              </ul>
            </div>

          </div>
    
          </div>
          <!-- /.box-body -->
          
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->

@endsection