
  <!-- start: TOP NAVBAR -->
  <header class="navbar navbar-default navbar-static-top">
    <!-- start: NAVBAR HEADER -->
    <div class="navbar-header">
      <button href="javascript:void(0)" class="menu-mobile-toggler btn no-radius pull-left hidden-md hidden-lg" id="horizontal-menu-toggler" data-toggle="collapse" data-target=".horizontal-menu">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="index.php"> SKSU </a>
      <!-- <a class="navbar-brand navbar-brand-collapsed" href="index.php"> <img src="assets/images/logo-collapsed2.png" alt="" /> </a> -->

      <!-- <button class="btn pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse" data-toggle-class="menu-open">
        <i class="fa fa-folder closed-icon"></i><i class="fa fa-folder-open open-icon"></i><small><i class="fa fa-caret-down margin-left-5"></i></small>
      </button> -->
    </div>
    <!-- end: NAVBAR HEADER -->
    <!-- start: NAVBAR COLLAPSE -->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-left hidden-sm hidden-xs">
        <li class="sidebar-toggler-wrapper">
          <div>
            <button href="javascript:void(0)" class="btn sidebar-toggler visible-md visible-lg">
              <i class="fa fa-bars"></i>
            </button>
          </div>
        </li>
        <li>
          <form role="search" class="navbar-form main-search">
            <div class="form-group">
              <input type="text" placeholder="Enter search text here..." class="form-control">
              <button class="btn search-button" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </form>
        </li>
      </ul>
      <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
      <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
        <div class="arrow-left"></div>
        <div class="arrow-right"></div>
      </div>
      <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
    </div>
    <!-- end: NAVBAR COLLAPSE -->
  </header>
  <!-- start: HORIZONTAL MENU -->
  <div class="navbar navbar-default horizontal-menu collapse">
    <div class="horizontal-menu-wrapper">
      <div class="horizontal-nav-container">
        <ul class="nav navbar-nav no-border">
          <li class="<? echo $active_dashboard ?>">
            <a href="index.php"> <span class="fa fa-home"></span> <span> Dashboard </span> </a>
          </li>
          <li class="<? echo $active_evaluation ?>">
            <a href="evaluation.php"> <span class="fa fa-tasks"></span> <span> Evaluation </span> </a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle nav-user-wrapper" data-toggle="dropdown"> <img alt="" src="assets/images/avatar-1.jpg"> <span><? echo $_usersData['firstname'].' '.$_usersData['lastname'] ?></span> <span class="caret"></span> </a>

            <ul class="dropdown-menu pull-right animated fadeInRight">
              <li>
                <a href="#"> My Profile </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="logout.php"> Log Out </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
      <div class="close-handle visible-xs-block visible-sm-block menu-toggler" data-toggle="collapse" data-target=".horizontal-menu">
        <div class="arrow-left"></div>
        <div class="arrow-right"></div>
      </div>
      <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
    </div>
  </div>
  <!-- end: HORIZONTAL MENU -->
  <!-- end: TOP NAVBAR -->
