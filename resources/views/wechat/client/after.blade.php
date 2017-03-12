<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>乾源通管理后台--贷后</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <style>
    .img-wrap{
      display: none;
    }
    .uppercase{
      margin-bottom: 0.5rem;
    }
    .img-wrap img{
      margin-bottom: 0.5rem;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">乾源通后台</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">渠道商</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  渠道商 - 普通管理员
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">主页</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">退出</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>渠道商</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">代理商</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>贷款前</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>贷款中</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>贷款后</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        客户列表
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
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
                <li><a href="#">备注 <span class="pull-right"></span></a></li>
              </ul>
            </div>

          </div>
    
          </div>

          <!-- /.box-body -->
          <div class="box-footer text-center" style="display: block;">
            <a href="javascript:void(0)" class="uppercase">查看图片</a>

            <div class="row img-wrap">
              <div class="col-md-6 col-sm-6">
              <img src="bootstrap/img/d2.png" class="img-responsive img-rounded" alt="Responsive image"></div>
              <div class="col-md-6 col-sm-6"><img src="bootstrap/img/d2.png" class="img-responsive img-rounded" alt="Responsive image"></div>
            </div>

          </div>

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
                <li><a href="#">备注 <span class="pull-right"></span></a></li>
              </ul>
            </div>

          </div>
    
          </div>
          
          <div class="box-footer text-center" style="display: block;">
            <a href="javascript:void(0)" class="uppercase">查看图片</a>

            <div class="row img-wrap">
              <div class="col-md-6 col-sm-6">
              <img src="bootstrap/img/d2.png" class="img-responsive img-rounded" alt="Responsive image"></div>
              <div class="col-md-6 col-sm-6"><img src="bootstrap/img/d2.png" class="img-responsive img-rounded" alt="Responsive image"></div>
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
                <li><a href="#">备注 <span class="pull-right"></span></a></li>
              </ul>
            </div>

          </div>
    
          </div>

          <div class="box-footer text-center" style="display: block;">
            <a href="javascript:void(0)" class="uppercase">查看图片</a>

            <div class="row img-wrap">
              <div class="col-md-6 col-sm-6">
              <img src="bootstrap/img/d2.png" class="img-responsive img-rounded" alt="Responsive image"></div>
              <div class="col-md-6 col-sm-6"><img src="bootstrap/img/d2.png" class="img-responsive img-rounded" alt="Responsive image"></div>
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
                <li><a href="#">备注 <span class="pull-right"></span></a></li>
              </ul>
            </div>

          </div>
    
          </div>

          <div class="box-footer text-center" style="display: block;">
            <a href="javascript:void(0)" class="uppercase">查看图片</a>

            <div class="row img-wrap">
              <div class="col-md-6 col-sm-6">
              <img src="bootstrap/img/d2.png" class="img-responsive img-rounded" alt="Responsive image"></div>
              <div class="col-md-6 col-sm-6"><img src="bootstrap/img/d2.png" class="img-responsive img-rounded" alt="Responsive image"></div>
            </div>

          </div>
          <!-- /.box-body -->
          
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->





      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->



  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="">恩施乾源通</a>.</strong>版权所有
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!-- /.modal弹出框 -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">.col-md-4</div>
          <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
          <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
        </div>
        <div class="row">
          <div class="col-sm-9">
            Level 1: .col-sm-9
            <div class="row">
              <div class="col-xs-8 col-sm-6">
                Level 2: .col-xs-8 .col-sm-6
              </div>
              <div class="col-xs-4 col-sm-6">
                Level 2: .col-xs-4 .col-sm-6
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $('.uppercase').click(function(){
    $('.img-wrap').toggle();
  });
</script>
</body>
</html>
