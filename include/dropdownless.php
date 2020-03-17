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