<header class="main-header">
  <!-- Logo -->
  <div class="logo">
<span class="logo-mini"><img src="../assets/images/logo.png" class="img-circle" alt="Logo" height="50" width="50"></span>
<span class="logo-lg"><b>ZIS Babussalam</b></span>
</div>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">

	<img src="../assets/images/avatar0.jpg" class="user-image" alt="images">
  <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
	              <img src="../assets/images/avatar0.jpg" class="img-circle" alt="images">
                <p style="text-transform:capitalize;">Hi <?php echo $_SESSION['username'];?></p>
                <p>Welcome To RekamMedis</p>
             </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-danger btn-danger">Log out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>