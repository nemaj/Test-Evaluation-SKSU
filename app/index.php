

<?php include'php_con/db_connect.php' ?>


<!DOCTYPE html>
<!-- Template Name: Packet - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" ng-app>
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Packet - Responsive Admin Template</title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->

		<?php include'php_assets/css.php' ?>
	

	</head>
	<!-- end: HEAD -->
	<body ng-cloak>

		<?php include'php_assets/angular.php' ?>

		<div id="app" class="lyt-4">
			<!-- sidebar -->
			<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">
					<div>
						<!-- start: SEARCH FORM -->
						<div class="search-form hidden-md hidden-lg">
							<a class="s-open" href="#"> <i class="ti-search"></i> </a>
							<form class="navbar-form" role="search">
								<a class="s-remove" href="#" target=".navbar-form"> <i class="ti-close"></i> </a>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Enter search text here...">
									<button class="btn search-button" type="submit">
										<i class="ti-search"></i>
									</button>
								</div>
							</form>
						</div>
						<!-- end: SEARCH FORM -->
						<!-- start: USER OPTIONS -->
						<div class="nav-user-wrapper">
							<div class="media">
								<div class="media-left">
									<a class="profile-card-photo" href="#"><img alt="" src="assets/images/avatar-1.jpg"></a>
								</div>
								<div class="media-body">
									<span class="media-heading text-white">Peter Clark</span>
									<div class="text-small text-white-transparent">
										UI Designer
									</div>
								</div>
								<div class="media-right media-middle">
									<div class="dropdown">
										<button href class="btn btn-transparent text-white dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-caret-down"></i>
										</button>
										<ul class="dropdown-menu animated fadeInRight pull-right">
											<li>
												<a href="#"> My Profile </a>
											</li>
											<li>
												<a href="#"> My Calendar </a>
											</li>
											<li>
												<a href="#"> My Messages (3) </a>
											</li>
											<li>
												<a href="#"> Lock Screen </a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#"> Log Out </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- end: USER OPTIONS -->
						<nav>
							<!-- start: MAIN NAVIGATION MENU -->
							<div class="navbar-title">
								<span>Main Navigation</span>
							</div>
							<ul class="main-navigation-menu">
								<li class="active open">
									<a href="index.html">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Dashboard" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div> </a>
								</li>
								<li>
									<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Page Layouts" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Page Layouts </span><i class="icon-arrow"></i>
										</div>
									</div> </a>
									<ul class="sub-menu">
										<li>
											<a href="page_layouts_fixed_header.html"> <span class="title"> Fixed Header </span> </a>
										</li>
										<li>
											<a href="page_layouts_fixed_sidebar.html"> <span class="title"> Fixed Sidebar </span> </a>
										</li>
										<li>
											<a href="page_layouts_fixed_header_sidebar.html"> <span class="title"> Fixed Header &amp; Sidebar </span> </a>
										</li>
										<li>
											<a href="page_layouts_fixed_footer.html"> <span class="title"> Fixed Footer </span> </a>
										</li>
										<li>
											<a href="page_layouts_boxed_page.html"> <span class="title"> Boxed Page </span> </a>
										</li>
									</ul>
								</li>
								<li>
									<a href="layouts.html">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Layouts" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Layouts </span>
										</div>
									</div> </a>
								</li>
								<li>
									<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="UI Elements" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> UI Elements </span><i class="icon-arrow"></i>
										</div>
									</div> </a>
									<ul class="sub-menu">
										<li>
											<a href="ui_elements.html"> <span class="title"> Elements </span> </a>
										</li>
										<li>
											<a href="ui_buttons.html"> <span class="title"> Buttons </span> </a>
										</li>
										<li>
											<a href="ui_links.html"> <span class="title"> Link Effects </span> </a>
										</li>
										<li>
											<a href="ui_icons.html"> <span class="title"> Font Awesome Icons </span> </a>
										</li>
										<li>
											<a href="ui_line_icons.html"> <span class="title"> Linear Icons </span> </a>
										</li>
										<li>
											<a href="ui_letter_icons.html"> <span class="title"> Letter Icons </span> </a>
										</li>
										<li>
											<a href="ui_modals.html"> <span class="title"> Modals </span> </a>
										</li>
										<li>
											<a href="ui_toggle.html"> <span class="title"> Toggle </span> </a>
										</li>
										<li>
											<a href="ui_tabs_accordions.html"> <span class="title"> Tabs &amp; Accordions </span> </a>
										</li>
										<li>
											<a href="ui_panels.html"> <span class="title"> Panels </span> </a>
										</li>
										<li>
											<a href="ui_notifications.html"> <span class="title"> Notifications </span> </a>
										</li>
										<li>
											<a href="ui_sliders.html"> <span class="title"> Sliders </span> </a>
										</li>
										<li>
											<a href="ui_knob.html"> <span class="title"> Knob component </span> </a>
										</li>
										<li>
											<a href="ui_treeview.html"> <span class="title"> TreeView </span> </a>
										</li>
										<li>
											<a href="ui_media.html"> <span class="title"> Media </span> </a>
										</li>
										<li>
											<a href="ui_nestable.html"> <span class="title"> Nestable List </span> </a>
										</li>
										<li>
											<a href="ui_typography.html"> <span class="title"> Typography </span> </a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Tables" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Tables </span><i class="icon-arrow"></i>
										</div>
									</div> </a>
									<ul class="sub-menu">
										<li>
											<a href="table_basic.html"> <span class="title">Basic Tables</span> </a>
										</li>
										<li>
											<a href="table_responsive.html"> <span class="title">Responsive Tables</span> </a>
										</li>
										<li>
											<a href="table_data.html"> <span class="title">Advanced Data Tables</span> </a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Forms" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Forms </span><i class="icon-arrow"></i>
										</div>
									</div> </a>
									<ul class="sub-menu">
										<li>
											<a href="form_elements.html"> <span class="title">Form Elements</span> </a>
										</li>
										<li>
											<a href="form_pickers.html"> <span class="title">Pickers</span> </a>
										</li>
										<li>
											<a href="form_text_editor.html"> <span class="title">Text Editor</span> </a>
										</li>
										<li>
											<a href="form_wizard.html"> <span class="title">Form Wizard</span> </a>
										</li>
										<li>
											<a href="form_validation.html"> <span class="title">Form Validation</span> </a>
										</li>
										<li>
											<a href="form_image_cropping.html"> <span class="title">Image Cropping</span> </a>
										</li>
										<li>
											<a href="form_multiple_upload.html"> <span class="title">Multiple File Upload</span> </a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Login" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Login </span><i class="icon-arrow"></i>
										</div>
									</div> </a>
									<ul class="sub-menu">
										<li>
											<a href="login_signin.html"> <span class="title"> Login Form </span> </a>
										</li>
										<li>
											<a href="login_registration.html"> <span class="title"> Registration Form </span> </a>
										</li>
										<li>
											<a href="login_forgot.html"> <span class="title"> Forgot Password Form </span> </a>
										</li>
										<li>
											<a href="login_lockscreen.html"> <span class="title">Lock Screen</span> </a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Pages" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Pages </span><i class="icon-arrow"></i>
										</div>
									</div> </a>
									<ul class="sub-menu">
										<li>
											<a href="pages_user_profile.html"> <span class="title">User Profile</span> </a>
										</li>
										<li>
											<a href="pages_invoice.html"> <span class="title">Invoice</span> </a>
										</li>
										<li>
											<a href="pages_timeline.html"> <span class="title">Timeline</span> </a>
										</li>
										<li>
											<a href="pages_calendar.html"> <span class="title">Calendar</span> </a>
										</li>
										<li>
											<a href="pages_messages.html"> <span class="title">Messages</span> </a>
										</li>
										<li>
											<a href="pages_blank_page.html"> <span class="title">Blank Page</span> </a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Utilities" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Utilities </span><i class="icon-arrow"></i>
										</div>
									</div> </a>
									<ul class="sub-menu">
										<li>
											<a href="utilities_search_result.html"> <span class="title">Search Results</span> </a>
										</li>
										<li>
											<a href="utilities_error_404.html"> <span class="title">Error 404</span> </a>
										</li>
										<li>
											<a href="utilities_error_500.html"> <span class="title">Error 500</span> </a>
										</li>
										<li>
											<a href="utilities_pricing_table.html"> <span class="title">Pricing Table</span> </a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="4 Level Menu" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> 4 Level Menu </span><i class="icon-arrow"></i>
										</div>
									</div> </a>
									<ul class="sub-menu">
										<li>
											<a href="javascript:;"> <span>Item 1</span> <i class="icon-arrow"></i> </a>
											<ul class="sub-menu">
												<li>
													<a href="javascript:;"> <span>Sample Link 1</span> <i class="icon-arrow"></i> </a>
													<ul class="sub-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
												<li>
													<a href="javascript:;"> <span>Sample Link 2</span> <i class="icon-arrow"></i> </a>
													<ul class="sub-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
												<li>
													<a href="javascript:;"> <span>Sample Link 3</span> <i class="icon-arrow"></i> </a>
													<ul class="sub-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:;"> <span>Item 2</span> <i class="icon-arrow"></i> </a>
											<ul class="sub-menu">
												<li>
													<a href="javascript:;"> <span>Sample Link 1</span> <i class="icon-arrow"></i> </a>
													<ul class="sub-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
												<li>
													<a href="javascript:;"> <span>Sample Link 2</span> <i class="icon-arrow"></i> </a>
													<ul class="sub-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
												<li>
													<a href="javascript:;"> <span>Sample Link 3</span> <i class="icon-arrow"></i> </a>
													<ul class="sub-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:;"> <span>Item 3</span> <i class="icon-arrow"></i> </a>
											<ul class="sub-menu">
												<li>
													<a href="javascript:;"> <span>Sample Link 1</span> <i class="icon-arrow"></i> </a>
													<ul class="sub-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
												<li>
													<a href="javascript:;"> <span>Sample Link 2</span> <i class="icon-arrow"></i> </a>
													<ul class="sub-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
												<li>
													<a href="javascript:;"> <span>Sample Link 3</span> <i class="icon-arrow"></i> </a>
													<ul class="sub-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="maps.html">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Maps" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Maps </span>
										</div>
									</div> </a>
								</li>
								<li>
									<a href="charts.html">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Charts" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Charts </span>
										</div>
									</div> </a>
								</li>
							</ul>
							<!-- end: MAIN NAVIGATION MENU -->
							<!-- start: CORE FEATURES -->
							<div class="navbar-title">
								<span>Core Features</span>
							</div>
							<ul class="folders">
								<li>
									<a href="landing_page.html">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Landing Page" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> Landing Page </span>
										</div>
									</div> </a>
								</li>
								<li>
									<a href="http://www.cliptheme.com/demo/packet/Html-Admin/LAYOUT-RTL-1/">
									<div class="item-content">
										<div class="item-media">
											<div class="lettericon" data-text="Messages" data-size="sm" data-char-count="2"></div>
										</div>
										<div class="item-inner">
											<span class="title"> RTL Version </span>
										</div>
									</div> </a>
								</li>
							</ul>
							<!-- end: CORE FEATURES -->
						</nav>
					</div>
				</div>
			</div>
			<!-- / sidebar -->
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
				<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						<button href="javascript:void(0)" class="menu-mobile-toggler btn no-radius pull-left hidden-md hidden-lg" id="horizontal-menu-toggler" data-toggle="collapse" data-target=".horizontal-menu">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand" href="index.html"> <img src="assets/images/logo2.png" alt="Packet"/> </a>
						<a class="navbar-brand navbar-brand-collapsed" href="index.html"> <img src="assets/images/logo-collapsed2.png" alt="" /> </a>

						<button class="btn pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse" data-toggle-class="menu-open">
							<i class="fa fa-folder closed-icon"></i><i class="fa fa-folder-open open-icon"></i><small><i class="fa fa-caret-down margin-left-5"></i></small>
						</button>
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
								<a href="#" class="toggle-fullscreen"> <i class="fa fa-expand expand-off"></i><i class="fa fa-compress expand-on"></i></a>
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
						<ul class="nav navbar-right">
							<!-- start: MESSAGES DROPDOWN -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown"> <span class="badge"> 3 </span> <i class="fa fa-envelope"></i> </a>
								<ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large animated fadeInUpShort">
									<li>
										<span class="dropdown-header"> Unread messages</span>
									</li>
									<li>
										<div class="drop-down-wrapper ps-container">
											<ul>
												<li class="unread">
													<a href="javascript:;" class="unread">
													<div class="clearfix">
														<div class="thread-image">
															<img src="./assets/images/avatar-2.jpg" alt="">
														</div>
														<div class="thread-content">
															<span class="author">Nicole Bell</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
															<span class="time"> Just Now</span>
														</div>
													</div> </a>
												</li>
												<li>
													<a href="javascript:;" class="unread">
													<div class="clearfix">
														<div class="thread-image">
															<img src="./assets/images/avatar-3.jpg" alt="">
														</div>
														<div class="thread-content">
															<span class="author">Steven Thompson</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
															<span class="time">8 hrs</span>
														</div>
													</div> </a>
												</li>
												<li>
													<a href="javascript:;">
													<div class="clearfix">
														<div class="thread-image">
															<img src="./assets/images/avatar-5.jpg" alt="">
														</div>
														<div class="thread-content">
															<span class="author">Kenneth Ross</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
															<span class="time">14 hrs</span>
														</div>
													</div> </a>
												</li>
											</ul>
										</div>
									</li>
									<li class="view-all">
										<a href="#"> See All </a>
									</li>
								</ul>
							</li>
							<!-- end: MESSAGES DROPDOWN -->
							<!-- start: ACTIVITIES DROPDOWN -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell"></i> </a>
								<ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large animated fadeInUpShort">
									<li>
										<span class="dropdown-header"> You have new notifications</span>
									</li>
									<li>
										<div class="drop-down-wrapper ps-container">
											<div class="list-group no-margin">
												<a class="media list-group-item" href=""> <img class="img-circle" alt="..." src="assets/images/avatar-1.jpg"> <span class="media-body block no-margin"> Use awesome animate.css <small class="block text-grey">10 minutes ago</small> </span> </a>
												<a class="media list-group-item" href=""> <span class="media-body block no-margin"> 1.0 initial released <small class="block text-grey">1 hour ago</small> </span> </a>
											</div>
										</div>
									</li>
									<li class="view-all">
										<a href="#"> See All </a>
									</li>
								</ul>
							</li>
							<!-- end: ACTIVITIES DROPDOWN -->
							<!-- start: LANGUAGE SWITCHER -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown"> <i class="flag-icon flag-icon-us"></i> English </a>
								<ul role="menu" class="dropdown-menu dropdown-light fadeInUpShort">
									<li>
										<a href="#" class="menu-toggler"> Deutsch </a>
									</li>
									<li>
										<a href="#" class="menu-toggler"> English </a>
									</li>
									<li>
										<a href="#" class="menu-toggler"> Italiano </a>
									</li>
								</ul>
							</li>
							<!-- end: LANGUAGE SWITCHER -->
						</ul>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
					</div>
					<button class="sidebar-mobile-toggler dropdown-off-sidebar btn hidden-md hidden-lg"  data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
						&nbsp;
					</button>
					<button class="dropdown-off-sidebar btn hidden-sm hidden-xs" data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
						&nbsp;
					</button>
					<!-- end: NAVBAR COLLAPSE -->
				</header>
				<!-- start: HORIZONTAL MENU -->
				<div class="navbar navbar-default horizontal-menu collapse">
					<div class="horizontal-menu-wrapper">
						<div class="horizontal-nav-container">
							<ul class="nav navbar-nav no-border">
								<li class="active">
									<a href="index.html"> <div class="lettericon" data-text="Dashboard" data-size="sm" data-char-count="2" data-color="auto"></div> <span> Dashboard </span> </a>
								</li>
								<li class="dropdown">
									<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> <div class="lettericon" data-text="UI Elements" data-size="sm" data-char-count="2" data-color="auto"></div> <span> UI Elements</span> <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>
											<a href="ui_elements.html"> <span> Elements </span> </a>
										</li>
										<li>
											<a href="ui_buttons.html"> <span> Buttons </span> </a>
										</li>
										<li>
											<a href="ui_links.html"> <span> Links </span> </a>
										</li>
										<li class="dropdown-submenu">
											<a href="#"> Icons </a>
											<ul class="dropdown-menu">
												<li>
													<a href="ui_icons.html"> <span> Font Awesome Icons </span> </a>
												</li>
												<li>
													<a href="ui_line_icons.html"> <span> Linear Icons </span> </a>
												</li>
											</ul>
										</li>

										<li>
											<a href="ui_modals.html"> <span> Modals </span> </a>
										</li>
										<li>
											<a href="ui_toggle.html"> <span> Toggle </span> </a>
										</li>
										<li>
											<a href="ui_tabs_accordions.html"> <span> Tabs &amp; Accordions </span> </a>
										</li>
										<li>
											<a href="ui_panels.html"> <span> Panels </span> </a>
										</li>
										<li>
											<a href="ui_notifications.html"> <span> Notifications </span> </a>
										</li>
										<li>
											<a href="ui_treeview.html"> <span> Treeview </span> </a>
										</li>
										<li>
											<a href="ui_media.html"> <span> Media Object </span> </a>
										</li>
										<li>
											<a href="ui_nestable.html"> <span> Nestable List </span> </a>
										</li>
										<li>
											<a href="ui_typography.html"> <span> Typography </span> </a>
										</li>

									</ul>
								</li>
								<li class="dropdown mega-menu">
									<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> <div class="lettericon" data-text="Components" data-size="sm" data-char-count="2" data-color="auto"></div> <span>Components</span> <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>
											<!-- start: MEGA MENU CONTENT -->
											<div class="mega-menu-content">
												<div class="col-md-3">
													<ul class="mega-sub-menu padding-top-0">
														<li>
															<span class="mega-menu-sub-title text-uppercase text-light text-bold text-extra-small padding-top-25 padding-bottom-10">Tables</span>
															<ul>
																<li>
																	<a href="table_basic.html"> <span>Basic Tables</span> </a>
																</li>
																<li>
																	<a href="table_responsive.html"> <span>Responsive Tables</span> </a>
																</li>
																<li>
																	<a href="table_data.html"> <span>Advanced Data Tables</span> </a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-3">
													<ul class="mega-sub-menu padding-top-0">
														<li>
															<span class="mega-menu-sub-title text-uppercase text-light text-bold text-extra-small padding-top-25 padding-bottom-10">Forms</span>
															<ul>
																<li>
																	<a href="form_elements.html"> <span>Form Elements</span> </a>
																</li>
																<li>
																	<a href="form_pickers.html"> <span>Form Pickers</span> </a>
																</li>
																<li>
																	<a href="form_text_editor.html"> <span>Text Editor</span> </a>
																</li>
																<li>
																	<a href="form_wizard.html"> <span>Form Wizard</span> </a>
																</li>
																<li>
																	<a href="form_validation.html"> <span>Form Validation</span> </a>
																</li>
																<li>
																	<a href="form_image_cropping.html"> <span>Image Cropping</span> </a>
																</li>
																<li>
																	<a href="form_multiple_upload.html"> <span>Multiple File Upload</span> </a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-3">
													<ul class="mega-sub-menu padding-top-0">
														<li>
															<span class="mega-menu-sub-title text-uppercase text-light text-bold text-extra-small padding-top-25 padding-bottom-10">Login</span>
															<ul>
																<li>
																	<a href="login_signin.html"> <span> Login Form </span> </a>
																</li>
																<li>
																	<a href="login_registration.html"> <span> Registration Form </span> </a>
																</li>
																<li>
																	<a href="login_forgot.html"> <span> Forgot Password Form </span> </a>
																</li>
																<li>
																	<a href="login_lockscreen.html"> <span> Lock Screen </span> </a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-3">
													<ul class="mega-sub-menu padding-top-0">
														<li>
															<span class="mega-menu-sub-title text-uppercase text-light text-bold text-extra-small padding-top-25 padding-bottom-10"> Pages </span>
															<ul>
																<li>
																	<a href="pages_user_profile.html"> <span>User Profile</span> </a>
																</li>
																<li>
																	<a href="pages_invoice.html"> <span>Invoice</span> </a>
																</li>
																<li>
																	<a href="pages_timeline.html"> <span>Timeline</span> </a>
																</li>
																<li>
																	<a href="pages_calendar.html"> <span>Calendar</span> </a>
																</li>
																<li>
																	<a href="pages_messages.html"> <span>Messages</span> </a>
																</li>
																<li>
																	<a href="pages_blank_page.html"> <span>Blank Page</span> </a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
											<!-- end: MEGA MENU CONTENT -->
										</li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> <div class="lettericon" data-text="Page Kits" data-size="sm" data-char-count="2" data-color="auto"></div> <span> Page Kits</span> <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li class="dropdown-header text-uppercase text-light text-bold text-extra-small padding-top-25 padding-bottom-10">
											Utilities
										</li>
										<li>
											<a href="utilities_search_result.html"> <span>Search Results</span> </a>
										</li>
										<li>
											<a href="utilities_error_404.html"> <span>Error 404</span> </a>
										</li>
										<li>
											<a href="utilities_error_500.html"> <span>Error 500</span> </a>
										</li>
										<li>
											<a href="utilities_pricing_table.html"> <span>Pricing Table</span> </a>
										</li>
										<li class="dropdown-header text-uppercase text-light text-bold text-extra-small padding-top-25 padding-bottom-10">
											Menu Levels
										</li>
										<li class="dropdown-submenu">
											<a href="#">Item 1</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu">
													<a href="javascript:;"> <span>Sample Link 1</span></a>
													<ul class="dropdown-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="javascript:;"> <span>Sample Link 2</span></a>
													<ul class="dropdown-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="javascript:;"> <span>Sample Link 3</span></a>
													<ul class="dropdown-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#">Item 2</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu">
													<a href="javascript:;"> <span>Sample Link 1</span></a>
													<ul class="dropdown-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="javascript:;"> <span>Sample Link 2</span></a>
													<ul class="dropdown-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="javascript:;"> <span>Sample Link 3</span></a>
													<ul class="dropdown-menu">
														<li>
															<a href="#"> Sample Link 1 </a>
														</li>
														<li>
															<a href="#"> Sample Link 2 </a>
														</li>
														<li>
															<a href="#"> Sample Link 3 </a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="dropdown-header text-uppercase text-light text-bold text-extra-small padding-top-25 padding-bottom-10">
											Utilities
										</li>
										<li>
											<a href="maps.html"> <span> Maps </span> </a>
										</li>
										<li>
											<a href="charts.html"> <span> Charts </span> </a>
										</li>
									</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-user-wrapper" data-toggle="dropdown"> <img alt="" src="assets/images/avatar-1.jpg"> <span>Peter Clark</span> <span class="caret"></span> </a>

									<ul class="dropdown-menu pull-right animated fadeInRight">
										<li>
											<a href="#"> My Profile </a>
										</li>
										<li>
											<a href="#"> My Calendar </a>
										</li>
										<li>
											<a href="#"> My Messages (3) </a>
										</li>
										<li>
											<a href="#"> Lock Screen </a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#"> Log Out </a>
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
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: BREADCRUMB -->
						<div class="breadcrumb-wrapper">
							<h4 class="mainTitle no-margin">Welcome to Packet</h4>
							<span class="mainDescription">overview &amp; stats </span>
							<ul class="pull-right breadcrumb">
								<li>
									<a href="index.html"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Home</a>
								</li>
								<li>
									Dashboard
								</li>
							</ul>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: FIRST SECTION -->
						<div class="container-fluid container-fullw padding-bottom-10">
							<div class="row no-margin">
								<div class="col-lg-3 col-md-6 no-padding">
									<div class="panel panel-azure height-300 no-radius no-border">
										<div class="panel-heading padding-5 padding-bottom-0">
											<span class="triangle-top-right text-white pull-right"></span>
										</div>
										<div class="panel-body no-padding">
											<div class="block text-dark text-center">
												<span class="counter text-bold text-white" count-to="5635" value="0" duration="1" filter="number">5,635</span>
												<h4 class="text-uppercase text-white no-margin">TOTAL VISITS</h4>
												<span class="line-separator line-sm text-white"></span>
												<p>
													<span class="text-white-transparent">Last Month: </span><span class="label background-light text-bold text-dark">+11%</span>
												</p>
												<div>
													<canvas id="barChart" class="full-width height-70 block"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 no-padding">
									<div class="panel panel-white height-300 no-radius no-border">
										<div class="panel-heading padding-5 padding-bottom-0">
											<span class="triangle-top-right text-light pull-right"></span>
											<h3 class="padding-5"><i class="fa fa-sort-up small text-red margin-right-5"></i><span class="text-bold text-dark margin-right-10">10.6m</span><span class="text-grey">(53%)</span></h3>
										</div>
										<div class="panel-body">
											<div class="text-center">
												<div class="text-center">
													<div class="inline-block">
														<input type="text" class="dial-sales" value="85">
													</div>
												</div>
												<h4 class="text-bold text-light">Sales skills audit</h4>
												<p>
													<span class="text-light margin-right-5">Source:</span><span>CT Sales Skills Audit</span>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 no-padding">
									<div class="panel panel-purple height-300 no-radius no-border">
										<div class="panel-heading padding-5 padding-bottom-0">
											<span class="triangle-top-right text-white pull-right"></span>
										</div>
										<div class="panel-body no-padding">
											<div class="block text-dark text-center">
												<span class="counter text-bold text-white" count-to="3234" value="0" duration="1" filter="number">3,234</span>
												<span class="counter-symbol text-white">$</span>
												<h4 class="text-uppercase text-white no-margin">CONVERSION RATE</h4>
												<span class="line-separator line-sm text-white"></span>
												<p class="no-margin">
													<span class="text-white-transparent">Last Month: </span><span class="label background-light text-bold text-dark">-16%</span>
												</p>
												<div class="min-height-80">
													<div class="padding-top-20">
														<div class="progress progress-xs no-radius background-dark no-margin">
															<div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
																<span class="sr-only"> 89% </span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 no-padding">
									<div class="panel panel-white panel-carousel height-300 no-radius no-border">
										<div class="panel-body no-padding">
											<!-- start: CAROUSEL -->
											<div data-slick='{"slidesToShow": 1, "speed": 300, "dots": true, "arrows": false}' class="carousel">
												<div class="slide padding-20 height-300" style="background: url('assets/images/carousel/06.jpg')">
													<h5 class="text-bold text-extra-small text-dark-transparent text-uppercase">Prjects <i class="fa fa-arrow-circle-o-right"></i></h5>
													<div class="lettericon margin-right-5" data-text="Alpha" data-size="lg" data-box="round" data-color="#947499"></div><h3 class="inline-block">Project Alpha</h3>
													<div class="block margin-top-10 ">
														<span class="label background-dark text-white margin-top-10 margin-right-5">75%</span><span class="cl-effect-19"></span>
														<a href="#" class="text-extra-small"> track progress </a>
													</div>
												</div>
												<div class="slide padding-20 height-300" style="background: url('assets/images/carousel/07.jpg')">
													<h5 class="text-bold text-extra-small text-dark-transparent text-uppercase">Prjects <i class="fa fa-arrow-circle-o-right"></i></h5>
													<div class="lettericon margin-right-5" data-text="Omega" data-size="lg" data-box="round" data-color="#7F8C8D"></div><h3 class="inline-block">Omega</h3>
													<div class="block margin-top-10 ">
														<span class="label background-dark text-white margin-top-10 margin-right-5">45%</span><span class="cl-effect-19"></span>
														<a href="#" class="text-extra-small"> track progress </a>
													</div>
												</div>
											</div>
											<!-- end: CAROUSEL -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: FIRST SECTION -->
						<!-- start: SECOND SECTION -->
						<div class="container-fluid container-fullw">
							<div class="row no-margin">
								<div class="col-xs-12 no-padding partition-azure no-border">
									<div class="row no-margin">
										<div class="col-md-8 col-lg-9 no-padding">
											<div class="panel panel-white no-radius no-margin">
												<div class="panel-heading border-light padding-30">
													<div class="row">
														<div class="col-lg-4 col-xs-5">
															<span class="input-icon">
																<input type="text" placeholder="Search posts..." id="form-field-14" class="form-control radius-10">
																<i class="ti-search"></i> </span>
														</div>
														<div class="col-lg-8 col-xs-7 text-right">
															<div class="btn-group margin-top-5">
																<button type="button" class="btn btn-azure btn-sm">
																	Sort by: <span class="text-bold">Newest</span>
																</button>
																<button type="button" class="btn btn-azure btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span class="caret"></span>
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<ul class="dropdown-menu">
																	<li role="menuitem">
																		<a href="#"> Newest </a>
																	</li>
																	<li role="menuitem">
																		<a href="#"> Oldest </a>
																	</li>
																	<li role="menuitem">
																		<a href="#"> Approved </a>
																	</li>
																	<li role="menuitem">
																		<a href="#"> In Review </a>
																	</li>
																	<li class="divider"></li>
																	<li role="menuitem">
																		<a href="#"> Declined </a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="panel-body">
													<table class="table no-margin">
														<tbody>
															<tr>
																<td class="max-width-100">
																<div class="icons-effect">
																	<img src="assets/images/portfolio/image01_th.jpg" class="img-responsive img-rounded" alt="">
																	<div class="mask mask-rounded">
																		<div class="icons-wrapper">
																			<div class="icons">
																				<a href="#" class="icon"> <span class="fa-stack fa-2x"> <i class="fa fa-circle fa-stack-2x text-white"></i> <i class="fa fa-search fa-stack-1x text-extra-large text-light"></i> </span> </a>
																			</div>
																		</div>
																	</div>
																</div></td>
																<td>
																<div class="padding-10">
																	<div class="block">
																		<strong>Multi-slot transclusion</strong><span class="text-muted"> has been approved</span>
																	</div>
																	<span class="text-small text-muted">An endorsement for </span><span class="text-azure">AngularJs</span>
																	<div class="block margin-top-10">
																		<span class="label label-success">Approved</span>
																	</div>
																</div></td>
																<td class="hidden-xs">
																<div class="block">
																	<a href="#" class="margin-right-10 block"> <i class="fa fa-comments text-azure"></i> Workroom </a>
																	<a href="#" class="block"> <i class="fa fa-retweet text-green"></i> Re-Hire </a>
																</div></td>
																<td class="visible-lg">
																<div class="col-xs-4 no-padding text-center">
																	<div class="border-right border-dark padding-5">
																		<small class="text-muted">Subscribers
																			<br>
																			<strong>156,987</strong></small>
																	</div>
																</div>
																<div class="col-xs-4 no-padding text-center">
																	<div class="border-right border-dark padding-5">
																		<small class="text-muted">Female
																			<br>
																			<strong>38%</strong></small>
																	</div>
																</div>
																<div class="col-xs-4 no-padding text-center">
																	<div class="padding-5">
																		<small class="text-muted">Male
																			<br>
																			<strong>62%</strong></small>
																	</div>
																</div></td>
															</tr>
															<tr>
																<td class="max-width-100">
																<div class="icons-effect">
																	<img src="assets/images/portfolio/image02_th.jpg" class="img-responsive img-rounded" alt="">
																	<div class="mask mask-rounded">
																		<div class="icons-wrapper">
																			<div class="icons">
																				<a href="#" class="icon"> <span class="fa-stack fa-2x"> <i class="fa fa-circle fa-stack-2x text-white"></i> <i class="fa fa-search fa-stack-1x text-extra-large text-light"></i> </span> </a>
																			</div>
																		</div>
																	</div>
																</div></td>
																<td>
																<div class="padding-10">
																	<div class="block">
																		<strong>Command Line Interface</strong><span class="text-muted"> has been approved</span>
																	</div>
																	<span class="text-small text-muted">An endorsement for </span><span class="text-azure">Apple Watch</span>
																	<div class="block margin-top-10">
																		<span class="label label-warning">In Review</span>
																	</div>
																</div></td>
																<td class="hidden-xs">
																<div class="block">
																	<a href="#" class="margin-right-10 block"> <i class="fa fa-comments text-azure"></i> Workroom </a>
																	<a href="#" class="block"> <i class="fa fa-retweet text-green"></i> Re-Hire </a>
																</div></td>
																<td class="visible-lg">
																<div class="col-xs-4 no-padding text-center">
																	<div class="border-right border-dark padding-5">
																		<small class="text-muted">Subscribers
																			<br>
																			<strong>156,987</strong></small>
																	</div>
																</div>
																<div class="col-xs-4 no-padding text-center">
																	<div class="border-right border-dark padding-5">
																		<small class="text-muted">Female
																			<br>
																			<strong>68%</strong></small>
																	</div>
																</div>
																<div class="col-xs-4 no-padding text-center">
																	<div class="padding-5">
																		<small class="text-muted">Male
																			<br>
																			<strong>32%</strong></small>
																	</div>
																</div></td>
															</tr>
															<tr>
																<td class="max-width-100">
																<div class="icons-effect">
																	<img src="assets/images/portfolio/image03_th.jpg" class="img-responsive img-rounded" alt="">
																	<div class="mask mask-rounded">
																		<div class="icons-wrapper">
																			<div class="icons">
																				<a href="#" class="icon"> <span class="fa-stack fa-2x"> <i class="fa fa-circle fa-stack-2x text-white"></i> <i class="fa fa-search fa-stack-1x text-extra-large text-light"></i> </span> </a>
																			</div>
																		</div>
																	</div>
																</div></td>
																<td>
																<div class="padding-10">
																	<div class="block">
																		<strong>Tools and Training</strong><span class="text-muted"> has been approved</span>
																	</div>
																	<span class="text-small text-muted">An endorsement for </span><span class="text-azure">Visual Basic</span>
																	<div class="block margin-top-10">
																		<span class="label label-danger">Declined</span>
																	</div>
																</div></td>
																<td class="hidden-xs">
																<div class="block">
																	<a href="#" class="margin-right-10 block"> <i class="fa fa-comments text-azure"></i> Workroom </a>
																	<a href="#" class="block"> <i class="fa fa-retweet text-green"></i> Re-Hire </a>
																</div></td>
																<td class="visible-lg">
																<div class="col-xs-4 no-padding text-center">
																	<div class="border-right border-dark padding-5">
																		<small class="text-muted">Subscribers
																			<br>
																			<strong>156,987</strong></small>
																	</div>
																</div>
																<div class="col-xs-4 no-padding text-center">
																	<div class="border-right border-dark padding-5">
																		<small class="text-muted">Female
																			<br>
																			<strong>68%</strong></small>
																	</div>
																</div>
																<div class="col-xs-4 no-padding text-center">
																	<div class="padding-5">
																		<small class="text-muted">Male
																			<br>
																			<strong>32%</strong></small>
																	</div>
																</div></td>
															</tr>
															<tr>
																<td class="max-width-100">
																<div class="icons-effect">
																	<img src="assets/images/portfolio/image05_th.jpg" class="img-responsive img-rounded" alt="">
																	<div class="mask mask-rounded">
																		<div class="icons-wrapper">
																			<div class="icons">
																				<a href="#" class="icon"> <span class="fa-stack fa-2x"> <i class="fa fa-circle fa-stack-2x text-white"></i> <i class="fa fa-search fa-stack-1x text-extra-large text-light"></i> </span> </a>
																			</div>
																		</div>
																	</div>
																</div></td>
																<td>
																<div class="padding-10">
																	<div class="block">
																		<strong>Angular 2 integration</strong><span class="text-muted"> has been approved</span>
																	</div>
																	<span class="text-small text-muted">An endorsement for </span><span class="text-azure">AngularJs</span>
																	<div class="block margin-top-10">
																		<span class="label label-warning">In Review</span>
																	</div>
																</div></td>
																<td class="hidden-xs">
																<div class="block">
																	<a href="#" class="margin-right-10 block"> <i class="fa fa-comments text-azure"></i> Workroom </a>
																	<a href="#" class="block"> <i class="fa fa-retweet text-green"></i> Re-Hire </a>
																</div></td>
																<td class="visible-lg">
																<div class="col-xs-4 no-padding text-center">
																	<div class="border-right border-dark padding-5">
																		<small class="text-muted">Subscribers
																			<br>
																			<strong>156,987</strong></small>
																	</div>
																</div>
																<div class="col-xs-4 no-padding text-center">
																	<div class="border-right border-dark padding-5">
																		<small class="text-muted">Female
																			<br>
																			<strong>68%</strong></small>
																	</div>
																</div>
																<div class="col-xs-4 no-padding text-center">
																	<div class="padding-5">
																		<small class="text-muted">Male
																			<br>
																			<strong>32%</strong></small>
																	</div>
																</div></td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="panel-footer no-border">
													<p class="no-margin">
														<a href="#"><i class="fa fa-arrow-circle-o-down text-green"></i></a>
														<span class="text-light margin-left-10">Show more details </span>
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-lg-3 no-padding">
											<div class="panel panel-azure no-border no-radius no-margin">
												<div class="panel-body">
													<ct-paneltool class="panel-tools" tool-expand="tool-expand"></ct-paneltool>
													<h3 class="text-white padding-top-10">In Review</h3>
													<table class="table margin-bottom-5">
														<tbody>
															<tr>
																<td><span class="text-white">Multi-slot transclusion</span></td>
																<td>
																<div class="pull-right margin-top-5">
																	<input type="checkbox" class="js-switch light" />
																</div></td>
															</tr>
															<tr>
																<td><span class="text-white">Command Line Interface</span></td>
																<td>
																<div class="pull-right margin-top-5">
																	<input type="checkbox" class="js-switch light" />
																</div></td>
															</tr>
															<tr>
																<td><span class="text-white">Tools and Training</span></td>
																<td>
																<div class="pull-right margin-top-5">
																	<input type="checkbox" class="js-switch light" checked/>
																</div></td>
															</tr>
															<tr>
																<td><span class="text-white">Angular 2 integration</span></td>
																<td>
																<div class="pull-right margin-top-5">
																	<input type="checkbox" class="js-switch light" />
																</div></td>
															</tr>
														</tbody>
													</table>
													<div class="block text-dark text-center">
														<span class="counter text-bold text-white" count-to="12" value="0" duration="0.4" filter="number">12</span>
														<h4 class="text-uppercase text-white no-margin">Proposal</h4>
														<span class="line-separator line-sm text-white"></span>
														<p class="no-margin">
															<span class="text-white-transparent">Last Month: </span><span class="label background-light text-bold text-dark">16</span>
														</p>
														<div>
															<canvas id="lineChart" class="full-width height-80 block"></canvas>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: SECOND SECTION -->
						<!-- start: THIRD SECTION -->
						<div class="container-fluid container-fullw padding-bottom-10">
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-white no-radius">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-12 col-lg-4">
													<div class="panel panel-white no-radius no-border">
														<div class="panel-heading">
															<h2 class="inline-block"> Project List </h2>
															<p class="text-muted">
																Keep track of your projects
															</p>
														</div>
														<div class="panel-body">
															<ul class="list-group">
																<li class="list-group-item no-radius no-margin no-border-top no-border-left no-border-right">
																	<div class="row">
																		<div class="col-xs-6">
																			<a href="#"> <div class="lettericon margin-right-5" data-text="Omega" data-size="sm" data-color="#7F8C8D"></div> Omega </a>
																		</div>
																		<div class="col-xs-6">
																			<span class="block padding-top-10">
																				<div class="progress progress-xs no-radius background-dark no-margin">
																					<div class="progress-bar progress-bar-azure" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
																						<span class="sr-only"> 89% </span>
																					</div>
																				</div> </span>
																		</div>
																	</div>
																</li>
																<li class="list-group-item no-radius no-margin no-border-top no-border-left no-border-right">
																	<div class="row">
																		<div class="col-xs-6">
																			<a href="#"> <div class="lettericon margin-right-5" data-text="Alpha" data-size="sm" data-color="#947499"></div> Alpha</a>
																		</div>
																		<div class="col-xs-6">
																			<span class="block padding-top-10">
																				<div class="progress progress-xs no-radius background-dark no-margin">
																					<div class="progress-bar progress-bar-azure" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
																						<span class="sr-only"> 54% </span>
																					</div>
																				</div> </span>
																		</div>
																	</div>
																</li>
																<li class="list-group-item no-radius no-margin no-border-top no-border-left no-border-right">
																	<div class="row">
																		<div class="col-xs-6">
																			<a href="#"> <div class="lettericon margin-right-5" data-text="Kappa" data-size="sm" data-color="#5A8770"></div> Kappa</a>
																		</div>
																		<div class="col-xs-6">
																			<span class="block padding-top-10">
																				<div class="progress progress-xs no-radius background-dark no-margin">
																					<div class="progress-bar progress-bar-azure" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;">
																						<span class="sr-only"> 32% </span>
																					</div>
																				</div> </span>
																		</div>
																	</div>
																</li>
																<li class="list-group-item no-radius no-margin no-border-top no-border-left no-border-right">
																	<div class="row">
																		<div class="col-xs-6">
																			<a href="#"> <div class="lettericon margin-right-5" data-text="Zeta" data-size="sm" data-color="#5B9BD1"></div> Zeta</a>
																		</div>
																		<div class="col-xs-6">
																			<span class="block padding-top-10">
																				<div class="progress progress-xs no-radius background-dark no-margin">
																					<div class="progress-bar progress-bar-azure" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;">
																						<span class="sr-only"> 32% </span>
																					</div>
																				</div> </span>
																		</div>
																	</div>
																</li>
																<li class="list-group-item no-radius no-margin no-border">
																	<div class="row">
																		<div class="col-xs-6">
																			<a href="#"> <div class="lettericon margin-right-5" data-text="Upsilon" data-size="sm" data-color="#315777"></div> Upsilon</a>
																		</div>
																		<div class="col-xs-6">
																			<span class="block padding-top-10">
																				<div class="progress progress-xs no-radius background-dark no-margin">
																					<div class="progress-bar progress-bar-azure" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
																						<span class="sr-only"> 78% </span>
																					</div>
																				</div> </span>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<div class="panel-footer no-border padding-top-0">
															<p class="no-margin">
																<a href="#"><i class="fa fa-arrow-circle-o-down text-green"></i> <span class="text-light margin-left-10">Show more details </span></a>
															</p>
														</div>
													</div>
												</div>
												<div class="col-lg-5 col-md-12">
													<div class="panel panel-white no-radius no-border" id="visits">
														<div class="panel-body margin-bottom-10">
															<div class="row padding-bottom-30">
																<div class="col-xs-4 text-center">
																	<div class="margin-bottom-10">
																		<div class="lettericon margin-right-10" data-text="Alpha" data-size="sm" data-color="#947499"></div>
																		<span class="text-extra-large text-bold">+5,04 %</span>
																	</div>
																	Alpha
																</div>
																<div class="col-xs-4 text-center">
																	<div class="margin-bottom-10">
																		<div class="lettericon margin-right-10" data-text="Omega" data-size="sm" data-color="#7F8C8D"></div>
																		<span class="text-extra-large text-bold">+2,21 %</span>
																	</div>
																	Omega
																</div>
																<div class="col-xs-4 text-center">
																	<div class="margin-bottom-10">
																		<div class="lettericon margin-right-10" data-text="Kappa" data-size="sm" data-color="#5A8770"></div>
																		<span class="text-extra-large text-bold">+0,68 %</span>
																	</div>
																	Kappa
																</div>
															</div>
															<div>
																<canvas id="productsChart" class="full-width height-300 block"></canvas>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-12">
													<div class="row">
														<div class="col-md-6 col-lg-12">
															<div class="panel panel-white no-radius no-border">
																<div class="panel-heading no-border">
																	<h4 class="panel-title"> Dashboard Users </h4>
																</div>
																<div class="panel-body">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="panel-scroll height-180">
																				<table class="table no-margin">
																					<tbody>
																						<tr>
																							<td class="center"><img alt="image" class="img-circle" src="assets/images/avatar-1-small.jpg"></td>
																							<td><span class="text-small block text-light">UI Designer</span><a href="#"> Peter Clark </a></td>
																							<td class="text-right"><span class="label partition-purple">Administrator</span></td>
																						</tr>
																						<tr>
																							<td class="center"><img alt="image" class="img-circle" src="assets/images/avatar-2-small.jpg"></td>
																							<td><span class="text-small block text-light">Content Designer</span><a href="#"> Nicole Bell </a></td>
																							<td class="text-right"><span class="label partition-green">Editor</span></td>
																						</tr>
																						<tr>
																							<td class="center"><img alt="image" class="img-circle" src="assets/images/avatar-3-small.jpg"></td>
																							<td><span class="text-small block text-light">Visual Designer</span><a href="#"> Steven Thompson </a></td>
																							<td class="text-right"><span class="label partition-blue">Author</span></td>
																						</tr>
																						<tr>
																							<td class="center"><img alt="image" class="img-circle" src="assets/images/avatar-5-small.jpg"></td>
																							<td><span class="text-small block text-light">Senior Designer</span><a href="#"> Kenneth Ross </a></td>
																							<td class="text-right"><span class="label partition-orange">Contributor</span></td>
																						</tr>
																						<tr>
																							<td class="center"><img alt="image" class="img-circle" src="assets/images/avatar-4-small.jpg"></td>
																							<td><span class="text-small block text-light">Web Editor</span><a href="#"> Ella Patterson </a></td>
																							<td class="text-right"><span class="label partition-green">Editor</span></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6 col-lg-12">
															<div class="panel panel-white no-radius no-border">
																<div class="panel-heading no-border padding-bottom-0">
																	<h4 class="panel-title"> All Earnings </h4>
																</div>
																<div class="panel-body no-padding">
																	<div>
																		<canvas id="acquisitionChart" class="full-width height-75 block"></canvas>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: THIRD SECTION -->
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			<footer>
				<div class="footer-inner">
					<div class="pull-left">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> ClipTheme</span>. <span>All rights reserved</span>
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="ti-angle-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
			<!-- start: OFF-SIDEBAR -->
			<div id="off-sidebar" class="sidebar">
				<div class="sidebar-wrapper">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#off-users" aria-controls="off-users" role="tab" data-toggle="tab"> <i class="ti-comments"></i> </a>
						</li>
						<li>
							<a href="#off-favorites" aria-controls="off-favorites" role="tab" data-toggle="tab"> <i class="ti-heart"></i> </a>
						</li>
						<li>
							<a href="#off-settings" aria-controls="off-settings" role="tab" data-toggle="tab"> <i class="ti-settings"></i> </a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="off-users">
							<div id="users" active-class="chat-open">
								<div class="users-list">
									<div class="sidebar-content perfect-scrollbar">
										<h5 class="sidebar-title">On-line</h5>
										<ul class="media-list">
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <i class="fa fa-circle status-online"></i> <img alt="..." src="assets/images/avatar-2.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Nicole Bell</h4>
													<span> Content Designer </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#">
												<div class="user-label">
													<span class="label label-success">3</span>
												</div> <i class="fa fa-circle status-online"></i> <img alt="..." src="assets/images/avatar-3.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Steven Thompson</h4>
													<span> Visual Designer </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <i class="fa fa-circle status-online"></i> <img alt="..." src="assets/images/avatar-4.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Ella Patterson</h4>
													<span> Web Editor </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <i class="fa fa-circle status-online"></i> <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Kenneth Ross</h4>
													<span> Senior Designer </span>
												</div> </a>
											</li>
										</ul>
										<h5 class="sidebar-title">Off-line</h5>
										<ul class="media-list">
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <img alt="..." src="assets/images/avatar-6.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Nicole Bell</h4>
													<span> Content Designer </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#">
												<div class="user-label">
													<span class="label label-success">3</span>
												</div> <img alt="..." src="assets/images/avatar-7.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Steven Thompson</h4>
													<span> Visual Designer </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <img alt="..." src="assets/images/avatar-8.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Ella Patterson</h4>
													<span> Web Editor </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <img alt="..." src="assets/images/avatar-9.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Kenneth Ross</h4>
													<span> Senior Designer </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <img alt="..." src="assets/images/avatar-10.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Ella Patterson</h4>
													<span> Web Editor </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Kenneth Ross</h4>
													<span> Senior Designer </span>
												</div> </a>
											</li>
										</ul>
									</div>
								</div>
								<div class="user-chat">
									<div class="chat-content">
										<div class="sidebar-content perfect-scrollbar">
											<a class="sidebar-back pull-left" href="#" data-toggle-class="chat-open" data-toggle-target="#users"><i class="ti-angle-left"></i> <span>Back</span></a>
											<ol class="discussion">
												<li class="messages-date">
													Sunday, Feb 9, 12:58
												</li>
												<li class="self">
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															Hi, Nicole
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															How are you?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															Hi, i am good
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="self">
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															Glad to see you ;)
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="messages-date">
													Sunday, Feb 9, 13:10
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															What do you think about my new Dashboard?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="messages-date">
													Sunday, Feb 9, 15:28
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															Alo...
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															Are you there?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="self">
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															Hi, i am here
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															Your Dashboard is great
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="messages-date">
													Friday, Feb 7, 23:39
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															How does the binding and digesting work in AngularJS?, Peter?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="self">
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															oh that's your question?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															little reduntant, no?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															literally we get the question daily
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															I know. I, however, am not a nerd, and want to know
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="self">
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															for this type of question, wouldn't it be better to try Google?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															Lucky for us :)
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
											</ol>
										</div>
									</div>
									<div class="message-bar">
										<div class="message-inner">
											<a class="link icon-only" href="#"><i class="fa fa-camera"></i></a>
											<div class="message-area">
												<textarea placeholder="Message"></textarea>
											</div>
											<a class="link" href="#"> Send </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="off-favorites">
							<div class="users-list">
								<div class="sidebar-content perfect-scrollbar">
									<h5 class="sidebar-title">Favorites</h5>
									<ul class="media-list">
										<li class="media">
											<a href="#"> <img alt="..." src="assets/images/avatar-7.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Nicole Bell</h4>
												<span> Content Designer </span>
											</div> </a>
										</li>
										<li class="media">
											<a href="#">
											<div class="user-label">
												<span class="label label-success">3</span>
											</div> <img alt="..." src="assets/images/avatar-6.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Steven Thompson</h4>
												<span> Visual Designer </span>
											</div> </a>
										</li>
										<li class="media">
											<a href="#"> <img alt="..." src="assets/images/avatar-10.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Ella Patterson</h4>
												<span> Web Editor </span>
											</div> </a>
										</li>
										<li class="media">
											<a href="#"> <img alt="..." src="assets/images/avatar-2.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Kenneth Ross</h4>
												<span> Senior Designer </span>
											</div> </a>
										</li>
										<li class="media">
											<a href="#"> <img alt="..." src="assets/images/avatar-4.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Ella Patterson</h4>
												<span> Web Editor </span>
											</div> </a>
										</li>
										<li class="media">
											<a href="#"> <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Kenneth Ross</h4>
												<span> Senior Designer </span>
											</div> </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="off-settings">
							<div class="sidebar-content perfect-scrollbar">
								<h5 class="sidebar-title">General Settings</h5>
								<ul class="media-list">
									<li class="media">
										<div class="padding-10">
											<div class="display-table-cell">
												<input type="checkbox" class="js-switch" checked />
											</div>
											<span class="display-table-cell vertical-align-middle padding-left-10">Enable Notifications</span>
										</div>
									</li>
									<li class="media">
										<div class="padding-10">
											<div class="display-table-cell">
												<input type="checkbox" class="js-switch" />
											</div>
											<span class="display-table-cell vertical-align-middle padding-left-10">Show your E-mail</span>
										</div>
									</li>
									<li class="media">
										<div class="padding-10">
											<div class="display-table-cell">
												<input type="checkbox" class="js-switch" checked />
											</div>
											<span class="display-table-cell vertical-align-middle padding-left-10">Show Offline Users</span>
										</div>
									</li>
									<li class="media">
										<div class="padding-10">
											<div class="display-table-cell">
												<input type="checkbox" class="js-switch" checked />
											</div>
											<span class="display-table-cell vertical-align-middle padding-left-10">E-mail Alerts</span>
										</div>
									</li>
									<li class="media">
										<div class="padding-10">
											<div class="display-table-cell">
												<input type="checkbox" class="js-switch" />
											</div>
											<span class="display-table-cell vertical-align-middle padding-left-10">SMS Alerts</span>
										</div>
									</li>
								</ul>
								<div class="save-options">
									<button class="btn btn-success">
										<i class="icon-settings"></i><span>Save Changes</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end: OFF-SIDEBAR -->
			<!-- start: SETTINGS -->
			<div class="settings panel panel-default hidden-xs hidden-sm" id="settings">
				<button data-toggle-class="active" data-toggle-target="#settings" class="btn btn-default">
					<i class="fa fa-spin fa-gear"></i>
				</button>
				<div class="panel-heading">
					Style Selector
				</div>
				<div class="panel-body">
					<!-- start: FIXED HEADER -->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left"> Fixed header</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="fixed-header" />
						</span>
					</div>
					<!-- end: FIXED HEADER -->
					<!-- start: FIXED SIDEBAR -->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left">Fixed sidebar</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="fixed-sidebar" />
						</span>
					</div>
					<!-- end: FIXED SIDEBAR -->
					<!-- start: CLOSED SIDEBAR -->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left">Closed sidebar</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="closed-sidebar" />
						</span>
					</div>
					<!-- end: CLOSED SIDEBAR -->
					<!-- start: FIXED FOOTER -->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left">Fixed footer</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="fixed-footer" />
						</span>
					</div>
					<!-- end: FIXED FOOTER -->
					<!-- start: THEME SWITCHER -->
					<div class="colors-row setting-box">
						<div class="color-theme lyt4-theme-1">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt4-theme-1">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
						<div class="color-theme lyt4-theme-2">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt4-theme-2">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
					</div>
					<div class="colors-row setting-box">
						<div class="color-theme lyt4-theme-3">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt4-theme-3">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
						<div class="color-theme lyt4-theme-4">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt4-theme-4">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
					</div>
					<div class="colors-row setting-box">
						<div class="color-theme lyt4-theme-5">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt4-theme-5">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
						<div class="color-theme lyt4-theme-6">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt4-theme-6">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
					</div>
					<!-- end: THEME SWITCHER -->
					<div class="panel-footer">
						<button class="btn btn-primary ladda-button btn-squared btn-sm btn-o" data-style="slide-up" data-spinner-size="10" data-spinner-color="#999999" id="reset-layout">
							<span class="ladda-label">Reset</span>
						</button>
						<button class="btn btn-primary ladda-button pull-right btn-squared btn-sm btn-wide" data-style="slide-up" data-spinner-size="10" id="save-layout">
							<span class="ladda-label">Save</span>
						</button>
					</div>
				</div>
			</div>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->

		<?php include'php_assets/js.php'; ?>

		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="../../bower_components/Chart-js/Chart.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: Packet JAVASCRIPTS -->
		<script src="assets/js/letter-icons.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: Packet JAVASCRIPTS -->
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/index.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
	</body>
</html>
