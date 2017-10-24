

<?php include'header.php' ?>
<?php include'php_function/login_check.php'; ?>

	<body ng-cloak>

		<?php include'php_assets/angular.php' ?>

		<div id="app" class="lyt-4">
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
				<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header" style="width: 100%;">

						<a class="navbar-brand" href="index.html"> SKSU </a>
						<!-- <a class="navbar-brand navbar-brand-collapsed" href="index.html"> <img src="assets/images/logo-collapsed2.png" alt="" /> </a> -->

					</div>
					<!-- end: NAVBAR HEADER -->
				</header>
				<div class="main-content index" >
					<div class="wrap-content container" id="container">
						<!-- start: BREADCRUMB -->
						<div class="breadcrumb-wrapper">
							<h4 class="mainTitle no-margin">Welcome to SKSU-Evaluation</h4>
							<span class="mainDescription">PRE-TEST &amp; POST-TEST </span>
							<ul class="pull-right breadcrumb">
								<li>
									<a href="dashboard.php"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Main</a>
								</li>
							</ul>
						</div>
						<!-- end: BREADCRUMB -->

						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-white">
										<div class="panel-body">
											<div class="row margin-top-30">
												<div class="col-lg-6 col-md-12">
													<div class="panel panel-white">
														<div class="panel-heading">
															<h5 class="panel-title"><strong>SKSU</strong> - Pre-Test and Post-Test Evaluation</h5>
														</div>
														<div class="panel-body">
															<p class="main-description margin-bottom-20">
																The Pre-test and Post-test is a measurement of the learning receive during the class as a result of comparing what the student knew before in a pre-test and after the class in a post-test. Both of them are used to quantify the knowledge attained in the class from a group of students with diverse learning styles and educational backgrounds. More specifically, the test indicate how the students are learning in the course.
															</p>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-lg-offset-2 col-md-12">
													<div class="panel panel-white">
														<div class="panel-heading">
															<h5 class="panel-title">Please Log In here.</h5>
														</div>
														<div class="panel-body">
														<form role="form" action="php_function/login.php" method="post">
															<div class="form-group">
																<label for="exampleInputEmail1"> Email address or Username </label>
																<input type="text" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" placeholder="Enter email or username" required>
															</div>
															<div class="form-group">
																<label for="exampleInputPassword1"> Password </label>
																<input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password" required>
															</div>
															<div class="">
																<input type="checkbox" id="rememberMe" name="rememberMe" value="1">
																<label for="checkbox1"> Remember me </label>
															</div>
															<button type="submit" class="btn btn-o btn-primary">
																Log In
															</button>
															or Create an account <strong><a href="sign-up.php">here</a></strong>.
														</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->

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
