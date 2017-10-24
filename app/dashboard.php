
<?php
	include'header.php';
	include'php_function/get_user_account.php';
	$active_dashboard = 'active';
	$active_evaluation = '';
?>

	<body>
		<div id="app" class="lyt-4">
			<div class="app-content">

				<!-- start: NAVBAR -->
				<?php include'navbar.php'; ?>
				<!-- end: NAVBAR -->

				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: BREADCRUMB -->
						<div class="breadcrumb-wrapper">
							<h4 class="mainTitle no-margin">Welcome to SKSU-Evaluation</h4>
							<span class="mainDescription">PRE-TEST &amp; POST-TEST </span>
							<ul class="pull-right breadcrumb">
								<li>
									<a href="index.php"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Home</a>
								</li>
								<li>
									Dashboard
								</li>
							</ul>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: FIRST SECTION -->
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
						<!-- end: FIRST SECTION -->
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
		<script src="../bower_components/Chart-js/Chart.min.js"></script>
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
