@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-md-12">
<form action="/client/b4" method="POST">
{{ csrf_field() }}
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">基本信息</h3>
            </div>
            <div class="box-body">

              <div class="form-group">
                <label>姓名</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-mask="" placeholder="请输入姓名">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>手机</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" placeholder="请输入手机号码">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>贷款金额</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-money"></i>
                  </div>
                  <input type="number" class="form-control" data-mask="" placeholder="请输入贷款金额">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- IP mask -->
              <div class="form-group">
                <label>贷款期限</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="number" class="form-control" placeholder="请输入贷款期限" data-mask="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

               <!-- IP mask -->
              <div class="form-group">
                <label>车产情况</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa fa-car"></i>
                  </div>
                  <input type="number" class="form-control" placeholder="请输入车产情况" data-mask="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->


               <!-- IP mask -->
              <div class="form-group">
                <label>房产情况</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa fa-home"></i>
                  </div>
                  <input type="number" class="form-control" placeholder="请输入房产情况" data-mask="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- IP mask -->
              <div class="form-group">
                <label>社保缴纳</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-credit-card"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="请输入社保缴纳情况" data-mask="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->


              <!-- IP mask -->
              <div class="form-group">
                <label>公积金</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-credit-card"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="请输入公积金情况" data-mask="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <button type="submit" class="btn btn-primary">提交信息</button>
</form>
            </div>
            <!-- /.box-body -->
          </div>
@stop