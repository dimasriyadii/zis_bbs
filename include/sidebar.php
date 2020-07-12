<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/images/avatar0.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p><?php echo $_SESSION['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"><h4><b><center>Menu Utama</center></b></h4></li>
            <li class="active"><a href="home.php"><i class="fa fa-home"></i><span>Beranda</span></a></li>
            <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
          <li><a href="#">Link in level 2</a></li>
          <li><a href="#">Link in level 2</a></li>
        </ul>
      </li>
            <li><a href="zakats.php"><i class="fa fa-user"></i><span>Zakat</span></a></li>
            <li><a href="infaq.php"><i class="fa fa-medkit"></i><span>Infaq</span></a></li>
            <li><a href="sedekah.php"><i class="fa fa-users"></i><span>Sedekah</span></a></li>
            <li><a href="users.php"><i class="fa fa-user"></i><span>User</span></a></li>

          </ul>

          <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
      <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
          <li><a href="#">Link in level 2</a></li>
          <li><a href="#">Link in level 2</a></li>
        </ul>
      </li>
    </ul>
        </section>
    <!-- /.sidebar -->
  </aside>