
<?php
	include'header.php';
	include'php_function/login_check.php';
	include'admin/php_function/get_course.php';
?>

	<body ng-cloak>

		<?php include'php_assets/angular.php' ?>

		<div id="app" class="lyt-4">
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
				<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header" style="width: 100%;">

						<a class="navbar-brand" href="index.html"> <img src="assets/images/logo2.png" alt="Packet"/> </a>
						<a class="navbar-brand navbar-brand-collapsed" href="index.html"> <img src="assets/images/logo-collapsed2.png" alt="" /> </a>

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
									<a href="index.php"><i class="fa fa-sign-in margin-right-5 text-large text-dark"></i>Login</a>
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
											<h2>Please Sign Up here</h2>
											<p>
												Create one account to take the pre-test and post-test of your subjects.
											</p>
											<hr>
											<form role="form" id="form" action="php_function/register.php" method="post">
												<div class="row">
													<div class="col-md-12">
														<div class="errorHandler alert alert-danger no-display" style="display: <? echo $_GET['error'] ? 'block !important' : 'none !important' ?>">
															<i class="fa fa-times-sign"></i> You Username is already used.
														</div>
														<div class="successHandler alert alert-success no-display">
															<i class="fa fa-ok"></i> Your form validation is successful!
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label"> First Name <span class="symbol required"></span> </label>
															<input type="text" placeholder="Insert your First Name" class="form-control" id="firstname" name="firstname">
														</div>
														<div class="form-group">
															<label class="control-label"> Middle Name <span class="symbol required"></span> </label>
															<input type="text" placeholder="Insert your Middle Name" class="form-control" id="middlename" name="middlename">
														</div>
														<div class="form-group">
															<label class="control-label"> Last Name <span class="symbol required"></span> </label>
															<input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname" name="lastname">
														</div>
														<div class="form-group">
															<label class="control-label"> Email Address <span class="symbol required"></span> </label>
															<input type="email" placeholder="Email Address" class="form-control" id="email" name="email">
														</div>
														<div class="form-group">
															<label class="control-label"> Username <span class="symbol required"></span> </label>
															<input type="text" placeholder="Username" class="form-control" id="username" name="username">
														</div>
														<div class="form-group">
															<label class="control-label"> Password <span class="symbol required"></span> </label>
															<input type="password" class="form-control" name="password" id="password">
														</div>
														<div class="form-group">
															<label class="control-label"> Confirm Password <span class="symbol required"></span> </label>
															<input type="password" class="form-control" id="password_again" name="password_again">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group connected-group">
															<label class="control-label"> Course <span class="symbol required"></span> </label>
															<div class="row">
																<div class="col-md-3">
																	<select name="course" id="course" class="form-control" required>
																		<option value="" selected disabled>Course</option>
																		<? while($row = mysqli_fetch_assoc($course)){ ?>
																			<option value="<? echo $row['course_id'] ?>"><? echo $row['course'] ?></option>
																		<? } ?>
																		<!-- <option value="02">BSIT</option>
																		<option value="03">BSIS</option> -->
																	</select>
																</div>
																<div class="col-md-3">
																	<select name="year" id="year" class="form-control" required>
																		<option value="" selected disabled>Year Level</option>
																		<option value="1">1st</option>
																		<option value="2">2nd</option>
																		<option value="3">3rd</option>
																		<option value="4">4th</option>
																	</select>
																</div>
																<div class="col-md-3">
																	<input type="text" placeholder="Section" id="section" name="section" class="form-control" required>
																</div>
															</div>
														</div>
														<div class="form-group connected-group">
															<label class="control-label"> Date of Birth <span class="symbol required"></span> </label>
															<div class="row">
																<div class="col-md-3">
																	<select name="dd" id="dd" class="form-control" >
																		<option value="">DD</option>
																		<option value="01">1</option>
																		<option value="02">2</option>
																		<option value="03">3</option>
																		<option value="04">4</option>
																		<option value="05">5</option>
																		<option value="06">6</option>
																		<option value="07">7</option>
																		<option value="08">8</option>
																		<option value="09">9</option>
																		<option value="10">10</option>
																		<option value="11">11</option>
																		<option value="12">12</option>
																		<option value="13">13</option>
																		<option value="14">14</option>
																		<option value="15">15</option>
																		<option value="16">16</option>
																		<option value="17">17</option>
																		<option value="18">18</option>
																		<option value="19">19</option>
																		<option value="20">20</option>
																		<option value="21">21</option>
																		<option value="22">22</option>
																		<option value="23">23</option>
																		<option value="24">24</option>
																		<option value="25">25</option>
																		<option value="26">26</option>
																		<option value="27">27</option>
																		<option value="28">28</option>
																		<option value="29">29</option>
																		<option value="30">30</option>
																		<option value="31">31</option>
																	</select>
																</div>
																<div class="col-md-3">
																	<select name="mm" id="mm" class="form-control" >
																		<option value="">MM</option>
																		<option value="01">1</option>
																		<option value="02">2</option>
																		<option value="03">3</option>
																		<option value="04">4</option>
																		<option value="05">5</option>
																		<option value="06">6</option>
																		<option value="07">7</option>
																		<option value="08">8</option>
																		<option value="09">9</option>
																		<option value="10">10</option>
																		<option value="11">11</option>
																		<option value="12">12</option>
																	</select>
																</div>
																<div class="col-md-3">
																	<input type="text" placeholder="YYYY" id="yyyy" name="yyyy" class="form-control">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label"> Gender <span class="symbol required"></span> </label>
															<div class="clip-radio radio-primary">
																<input type="radio" value="0" name="gender" id="gender_female">
																<label for="gender_female"> Female </label>
																<input type="radio" value="1" name="gender" id="gender_male">
																<label for="gender_male"> Male </label>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div>
															<span class="symbol required"></span>Required Fields
															<hr>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<p>
															By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
														</p>
													</div>
													<div class="col-md-4">
														<input type="submit" class="btn btn-primary btn-wide pull-right"  name="submit" value="Register">
														<!-- <button class="btn btn-primary btn-wide pull-right" type="submit">
															Register <i class="fa fa-arrow-circle-right"></i>
														</button> -->
													</div>
												</div>
											</form>
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
		<script src="../bower_components/Chart-js/Chart.min.js"></script>
		<script src="../bower_components/ckeditor/adapters/jquery.js"></script>
		<script src="../bower_components/bb-jquery-validation/dist/jquery.validate.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: Packet JAVASCRIPTS -->
		<script src="assets/js/letter-icons.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: Packet JAVASCRIPTS -->
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-validation.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormValidator.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
	</body>
</html>
