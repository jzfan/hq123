  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ \Auth::user()->name }}</p>
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
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> <span>控制台</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>用户</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/users/pending"><i class="fa fa-circle-o text-yellow"></i> 待审</a></li>
            <li><a href="/users/passed"><i class="fa fa-circle-o text-green"></i> 通过</a></li>
            <li><a href="/users"><i class="fa fa-circle-o text-aqua"></i> 一览</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-star"></i> <span>AAAA</span></a></li>
        <li><a href="#"><i class="fa fa-asterisk"></i> <span>BBBB</span></a></li>
        <li><a href="#"><i class="fa fa-heart"></i> <span>CCCC</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>