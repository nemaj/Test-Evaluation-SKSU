
<!-- start: PHP Initialiaze -->
<?php
    include'php_assets/admin_header.php';
    include'php_function/get_course.php';
    include'php_function/get_teachers.php';
    $active_dashboard = '';
    $active_teacher = 'active';
    $active_course = '';
?>
<!-- end: PHP Initialiaze -->

    <body ng-app="EvaluationApp">

        <script src="../../node_modules/angular/angular.js"></script>
        <script src="../php_assets/angular_app.js"></script>

		<div id="app" class="lyt-4" ng-cloak>
			<div class="app-content">

				<!-- start: TOP NAVBAR -->
                <?php include'php_assets/admin_navbar.php'; ?>
				<!-- end: TOP NAVBAR -->

				<div class="main-content" ng-controller="TeacherCtrl">
					<div class="wrap-content container" id="container">
						<!-- start: BREADCRUMB -->
						<div class="breadcrumb-wrapper">
                            <h4 class="mainTitle no-margin">Welcome to SKSU-Evaluation</h4>
                            <span class="mainDescription">PRE-TEST &amp; POST-TEST </span>
                            <ul class="pull-right breadcrumb">
								<li>
									<a href="index.php"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Admin</a>
								</li>
								<li>
									Teachers
								</li>
							</ul>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: FIRST SECTION -->

                        <div class="container-fluid container-fullw collapse" id="demo">
                            <div class="row no-margin">
                                <div class="col-xs-12 no-padding partition-azure no-border">
                                    <div class="row no-margin">
                                        <div class="panel panel-white no-radius no-margin">
                                            <div class="panel-body">
                                                <h5 class="over-title margin-bottom-15"><span class="text-bold">Teacher Information</span></h5>
                                                <hr>
                                                <form role="form" id="form" action="php_function/add_teacher.php" method="post">
                                                    <div class="row">
                                                        <input type="hidden" name="teachID" value="{{teacherData.teach_id ? teacherData.teach_id : ''}}">
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
                                                                <input type="text" placeholder="First Name" class="form-control" id="firstname" name="firstname" value="{{ teacherData.firstname ? teacherData.firstname : '' }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label"> Middle Name <span class="symbol required"></span> </label>
                                                                <input type="text" placeholder="Middle Name" class="form-control" id="middlename" name="middlename" value="{{ teacherData.middlename ? teacherData.middlename : '' }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label"> Last Name <span class="symbol required"></span> </label>
                                                                <input type="text" placeholder="Last Name" class="form-control" id="lastname" name="lastname" value="{{ teacherData.lastname ? teacherData.lastname : '' }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label"> Email Address <span class="symbol required"></span> </label>
                                                                <input type="email" placeholder="Email Address" class="form-control" id="email" name="email" value="{{ teacherData.email ? teacherData.email : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
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
                                                        <div class="col-md-12">
                                                            <input type="submit" class="btn btn-primary btn-wide"  name="submit" value="{{button}} Teacher">
                                                            <input type="button" data-toggle="collapse" data-target="#demo" class="btn btn-primary btn-wide"  name="cancel" value="Cancel">
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
                        </div>

                        <div class="container-fluid container-fullw">
            			  <div class="row no-margin">
            				<div class="col-xs-12 no-padding partition-azure no-border">
                              <div class="row no-margin">
                                <div class="panel panel-white no-radius no-margin">
            					  <div class="panel-body" ng-init="teacherShow = <? echo $teacher_count ?>">
                                    <?
                                        if(isset($_SESSION['teacher_error'])){
                                            echo '<h5 class="over-title margin-bottom-15" style="text-align: center; color: red;"><span class="text-bold">'.$_SESSION['teacher_error'].'</span></h5>';
                                            $_SESSION['teacher_error']='';
                                        }
                                    ?>
                                    <div class="row">
                                        <div class="col-lg-4 col-xs-5">
                                            <h5 class="over-title margin-bottom-15"><span class="text-bold">Teacher's</span> List</h5>
                                        </div>
                                        <div class="col-lg-8 col-xs-7 text-right">
                                            <div class="btn-group">
                        						<button type="button" ng-click="clearTeacher()" class="btn btn-azure btn-sm" data-toggle="collapse" data-target="#demo">
                        							Add <span class="text-bold">Teacher</span>
                        						</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="text-align: center;" ng-if="teacherShow == 0">
                                        <h5 class="over-title margin-bottom-15">No Teacher Found</h5>
                                    </div>
                                    <table class="table table-hover" id="sample-table-1" ng-if="teacherShow > 0">
                                        <thead>
                                            <tr>
                                                <th width="100" class="center">#</th>
                                                <th width="500">Name</th>
                                                <th width="500" class="hidden-xs">Email</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $row_c = 1; 
                                                while($row = mysqli_fetch_assoc($teacher)){ 
                                                    $_GET['Tid'] = $row['teach_id'];
                                                    include'php_function/get_teacher_subj.php';
                                                //$tData = json_encode($teachList);
                                            ?>
                                            <tr>
                                                <td class="center"><? echo $row_c ?></td>
                                                <td><? echo $row['lastname'].', '.$row['firstname'].' '.$row['middlename'] ?></td>
                                                <td class="hidden-xs"><? echo $row['email'] ?></td>
                                                <td class="center">
                                                <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                    <a class="btn btn-transparent btn-xs tooltips"  data-toggle="modal" data-target=".bs-example-modal-sm-details" ng-click="viewTeacher(<? echo htmlspecialchars(json_encode($row)) ?>,<? echo htmlspecialchars(json_encode($teachSubj_data)) ?>)"><i class="fa fa-info-circle"></i></a>
                                                    <a href="" data-toggle="collapse" data-target="#demo" ng-click="getTeacher(<? echo htmlspecialchars(json_encode($row)) ?>)" class="btn btn-transparent btn-xs"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a href="" class="btn btn-transparent btn-xs tooltips" ng-click="delTeacher(<? echo htmlspecialchars(json_encode($row)) ?>)" data-toggle="modal" data-target=".bs-example-modal-sm" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                                </div>
                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="btn-group dropdown ">
                                                        <button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                                                            <li>
                                                                <a href="#"> View </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Remove </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div></td>
                                            </tr>
                                            <?php $row_c++; } ?>
                                        </tbody>
                                    </table>
                                </div>
            				   </div>
                              </div>
            				</div>
            			  </div>
                        </div>

						<!-- end: FIRST SECTION -->

                        
                        <div class="modal fade bs-example-modal-sm"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Delete Warning</h4>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to delete <strong>{{teacherData.lastname}}</strong> ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                            Cancel
                                        </button>
                                        <a type="button" href="php_function/del_teacher.php?id={{teacherData.teach_id}}" class="btn btn-primary">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade bs-example-modal-sm-details"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel"><strong>{{teacherData.lastname}}</strong> Subject's</h4>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li ng-repeat="subj in teacherSubjData">{{subj.subject_code}}</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                            Cancel
                                        </button>
                                        <a type="button" href="assign_subj.php?Tid={{teacherData.teach_id}}" class="btn btn-primary">
                                            Manage
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>



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
		<?php include'php_assets/admin_js.php'; ?>
        <!-- end: MAIN JAVASCRIPTS -->

		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="../../bower_components/Chart-js/Chart.min.js"></script>
        <script src="../../bower_components/ckeditor/adapters/jquery.js"></script>
        <script src="../../bower_components/bb-jquery-validation/dist/jquery.validate.js"></script>
        <script src="../../bower_components/sweetalert/dist/sweetalert.min.js"></script>
        <script src="../../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
        <script src="../../bower_components/DataTables/media/js/dataTables.bootstrap.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

        <!-- start: Packet JAVASCRIPTS -->
		<script src="../assets/js/letter-icons.js"></script>
		<script src="../assets/js/main.js"></script>
		<!-- end: Packet JAVASCRIPTS -->
		<!-- start: JavaScript Event Handlers for this page -->
        <script src="../assets/js/form-validation.js"></script>
        <script src="../assets/js/table-data.js"></script>
        <script>
            jQuery(document).ready(function() {
                Main.init();
                FormValidator.init();
                TableData.init();
            });
        </script>
		<!-- end: JavaScript Event Handlers for this page -->
	</body>
</html>
