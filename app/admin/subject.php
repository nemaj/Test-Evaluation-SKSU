
<!-- start: PHP Initialiaze -->
<?php
    include'php_assets/admin_header.php';
    include'php_function/check_id.php';
    include'php_function/get_each_subject.php';
    include'php_function/get_each_course.php';
    include'php_function/get_course.php';
    include'php_function/get_question.php';
    $active_dashboard = '';
    $active_teacher = '';
    $active_course = 'active';
?>
<!-- end: PHP Initialiaze -->

    <body ng-app="EvaluationApp">

        <script src="../../node_modules/angular/angular.js"></script>
        <script src="../php_assets/angular_app.js"></script>


		<div id="app" class="lyt-4">
			<div class="app-content">

				<!-- start: TOP NAVBAR -->
                <?php include'php_assets/admin_navbar.php'; ?>
				<!-- end: TOP NAVBAR -->

				<div class="main-content" ng-controller="QuestionCtrl">
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
                                    <a href="course_mg.php">
									Course
                                    </a>
								</li>
                                <li>
                                    <a href="course.php?id=<? echo $_courseID ?>">
                                    <? echo $course_data['course'] ?>
                                    </a>
                                </li>
                                <li>
                                    <? echo $subject_data['subject_code'] ?>
                                </li>
							</ul>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: FIRST SECTION -->
            <div class="container-fluid container-fullw">
				<div class="row no-margin">
					<div class="col-xs-12 no-padding partition-azure no-border">
						<div class="row no-margin">
							<div class="panel panel-white no-radius no-margin">
								<div class="panel-body">
                                    <div class="row">
                                      <div class="col-lg-4 col-xs-5">
                                          <h5 class="over-title margin-bottom-15"><span class="text-bold"><? echo $subject_data['subject_code'] ?></span> List</h5>
                                      </div>
                                      <div class="col-lg-8 col-xs-7 text-right">
                                          <div class="btn-group">
            								<button type="button" ng-click="clearQuestion()" class="btn btn-azure btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">
            									Add <span class="text-bold">Question</span>
            								</button>
                                          </div>
                                      </div>
                                    </div>
                                    <table class="table table-hover" id="sample-table-1">
                                        <thead>
                                            <tr>
                                                <th width="100" class="center">#</th>
                                                <th width="500">Question</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                            $row_c=1; 
                                            while($row = mysqli_fetch_assoc($question)){
                                                include'php_function/get_answer_each_question.php';
                                          ?>
                                            <tr>
                                                <td class="center"><? echo $row_c ?></td>
                                                <td><? echo $row['question'] ?></td>
                                                <td class="center">
                                                <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                    <a class="btn btn-transparent btn-xs tooltips" data-toggle="modal" data-target=".bs-example-modal-sm-info"  ng-click="getQuestionAns(<? echo htmlspecialchars(json_encode($row)) ?>, <? echo htmlspecialchars(json_encode($question_ans)) ?>)"><i class="fa fa-info-circle"></i></a>
                                                    <a type="button" class="btn btn-transparent btn-xs" ng-click="getQuestion(<? echo htmlspecialchars(json_encode($row)) ?>)" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-pencil"></i></a>
                                                    <a href="" class="btn btn-transparent btn-xs tooltips" ng-click="getQuestion(<? echo htmlspecialchars(json_encode($row)) ?>)" data-toggle="modal" data-target=".bs-example-modal-sm-delete"><i class="fa fa-times fa fa-white"></i></a>
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

            <!-- Small Modal -->
            <div class="modal fade bs-example-modal-sm"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">{{button}} Question</h4>
                        </div>
                        <form role="form" action="php_function/add_question.php?id=<? echo $_GET['Sid'] ?>" method="post">
                            <input type="hidden" name="quesID" value="{{ questionData.q_id ? questionData.q_id : '' }}">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="question"> Question </label>
                                    <textarea placeholder="Subject Question" id="question" name="question" class="form-control" rows="4">{{ questionData.question ? questionData.question : '' }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    {{button}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade bs-example-modal-sm-delete"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Delete Warning</h4>
                        </div>
                        <div class="modal-body">
                            Do you want to delete <strong>{{questionData.question}}</strong> ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                Close
                            </button>
                            <a type="submit" href="php_function/del_question.php?id={{questionData.q_id}}&subject={{questionData.subject_id}}" class="btn btn-primary">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bs-example-modal-sm-info"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Question Info</h4>
                        </div>
                        <div class="modal-body">
                            <strong>Question: </strong>{{questionData.question}}
                            <ul>
                                <li ng-if="anEmpty">No Answer Found.</li>
                                <li ng-repeat="ans in questionAnsData" ng-class="{ 'li-bold': ans.is_answer==1 }">{{ ans.value }}</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                Close
                            </button>
                            <a type="button" href="question_ans.php?Qid={{questionData.q_id}}" class="btn btn-primary">
                                Manage
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Small Modal -->

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
		<?php include'php_assets/admin_js.php'; ?>
        <!-- end: MAIN JAVASCRIPTS -->

		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="../../bower_components/Chart-js/Chart.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

        <!-- start: Packet JAVASCRIPTS -->
		<script src="../assets/js/letter-icons.js"></script>
		<script src="../assets/js/main.js"></script>
		<!-- end: Packet JAVASCRIPTS -->
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="../assets/js/index.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
	</body>
</html>
