

<?php
  include'php_con/db_connect.php';
  include'php_function/get_user_account.php';
  include'php_function/get_subject.php';
	$active_dashboard = '';
	$active_evaluation = 'active';
?>


<!DOCTYPE html>
<!-- Template Name: Packet - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
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
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../bower_components/themify-icons/css/themify-icons.css">
		<link rel="stylesheet" href="../bower_components/flag-icon-css/css/flag-icon.min.css">
		<link rel="stylesheet" href="../bower_components/animate.css/animate.min.css">
		<link rel="stylesheet" href="../bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css">
		<link rel="stylesheet" href="../bower_components/switchery/dist/switchery.min.css">
		<link rel="stylesheet" href="../bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css">
		<link rel="stylesheet" href="../bower_components/ladda/dist/ladda-themeless.min.css">
		<link rel="stylesheet" href="../bower_components/slick.js/slick/slick.css">
		<link rel="stylesheet" href="../bower_components/slick.js/slick/slick-theme.css">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="../bower_components/sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="../bower_components/DataTables/media/css/dataTables.bootstrap.min.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: Packet CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/lyt4-theme-1.css" id="skin_color">
		<!-- end: Packet CSS -->
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<body>
		<div id="app" class="lyt-4">
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
        <?php include'navbar.php'; ?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: BREADCRUMB -->
						<div class="breadcrumb-wrapper">
							<h4 class="mainTitle no-margin">SKSU-Evaluation (Subject)</h4>
							<span class="mainDescription">PRE-TEST &amp; POST-TEST </span>
							<ul class="pull-right breadcrumb">
								<li>
									<a href="index.html"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Home</a>
								</li>
								<li>
                  Evaluation
								</li>
							</ul>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-white">
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table table-striped table-hover the-icons" id="sample_2">
													<thead>
														<tr>
															<th width="500">Course Code</th>
															<th width="500" class="hidden-xs">Description</th>
															<th width="200">Action</th>
														</tr>
													</thead>
													<tbody>
                            <? while($row = mysqli_fetch_assoc($_subject)){ ?>
                            <tr>
															<td><? echo $row['subject_code'] ?></td>
															<td class="hidden-xs"><? echo $row['description'] ?></td>
															<td>
																<a href="#" class="fa-hover edit-row" style="padding-left: 0;"> <span class="fa fa-hand-o-right"></span> Take this </a>
															</td>
														</tr>
                            <? } ?>
														<!-- <tr>
															<td>Peter Clark</td>
															<td>UI Designer</td>
															<td>(641)-734-4763</td>
														</tr>
														<tr>
															<td>Nicole Bell</td>
															<td>Content Designer</td>
															<td>(741)-034-4573</td>
														</tr>
														<tr>
															<td>Steven Thompson</td>
															<td>Visual Designer</td>
															<td>(471)-543-4073</td>
														</tr>
														<tr>
															<td>Ella Patterson</td>
															<td>Web Editor</td>
															<td>(799)-994-9999</td>
														</tr>
														<tr>
															<td>Kenneth Ross</td>
															<td>Senior Designer</td>
															<td>(111)-114-1173</td>
														</tr> -->
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
            <!-- end: DYNAMIC TABLE -->
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
		<script src="../bower_components/sweetalert/dist/sweetalert.min.js"></script>
		<script src="../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script src="../bower_components/DataTables/media/js/dataTables.bootstrap.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: Packet JAVASCRIPTS -->
		<script src="assets/js/letter-icons.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: Packet JAVASCRIPTS -->
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/table-data.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				// TableData.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
	</body>
</html>
