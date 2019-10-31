'use strict';

var app = angular.module('EvaluationApp', [])

	.controller('IndexCtrl', ['$scope', function($scope){
		
	    $scope.finished = function(){
	        // alert('Finish');
	    };

	}])

	.controller('TeacherCtrl', ['$scope', function($scope){

		$scope.viewTeacher = function(data,subj) {
			$scope.teacherData = data;
			$scope.teacherSubjData = subj;

			console.log(data, subj);
		}
		$scope.getTeacher = function(data) {
			$scope.teacherData = data;
			// console.log(data);
			$scope.button = 'Update';
			$scope.teacherData.teachUP = true;
		};

		$scope.delTeacher = function(data) {
			$scope.teacherData = data;
			// console.log(data);
		}

		$scope.clearTeacher = function(){
			$scope.teacherData = null;
			$scope.button = 'Add';
			$scope.teacherData.teachUP = false;
		}

	}])

	.controller('CourseCtrl', ['$scope','$window', function($scope,$window){
		
		$scope.getCourse = function(data){
			$scope.courseData = data;
			// console.log(data);
			$scope.button = 'Update';
		}

		$scope.clearCourse = function(){
			$scope.courseData = null;
			$scope.button = 'Add';
		}

		$scope.viewCourse = function(data){
			// console.log(data);
			$window.location.href = 'subject.php?Sid='+data.subject_id;
		}

	}])

	.controller('AnswerCtrl', ['$scope','$window', function($scope,$window){
		
		$scope.getAnswer = function(data){
			$scope.answerData = data;
			// console.log(data);
			if(data.is_answer==1){
				$scope.wrong = false;
				$scope.correct = true;
			}else{
				$scope.correct = false;
				$scope.wrong = true;
			}
			$scope.button = 'Update';
		}

		$scope.clearAnswer = function(){
			$scope.answerData = null;
			$scope.button = 'Add';
		}

		$scope.viewAnswer = function(data){
			// console.log(data);
			$window.location.href = 'subject.php?Sid='+data.subject_id;
		}

	}])

	.controller('QuestionCtrl', ['$scope','$window', function($scope,$window){
		
		$scope.getQuestion = function(data){
			$scope.questionData = data;
			// console.log(data);
			$scope.button = 'Update';
		}

		$scope.getQuestionAns = function(data,ans){
			$scope.questionData = data;
			$scope.questionAnsData = ans;

			if(ans.length>0){
				// alert('not')
				$scope.anEmpty = false;
			}else{
				// alert('null')
				$scope.anEmpty = true;
			}
			console.log(ans, data);
		}

		$scope.clearQuestion = function(){
			$scope.questionData = null;
			$scope.button = 'Add';
		}

		$scope.viewQuestion = function(data){
			// console.log(data);
			$window.location.href = 'subject.php?id='+data.subject_id;
		}

	}])

	.controller('AssignSubjCtrl', ['$scope','$window', function($scope,$window){
		
		$scope.getAssign = function(data, subj){
			$scope.assignSubj = data;
			$scope.assignSubjData = subj;
			console.log(data);
			$scope.button = 'Update';
		}

		// $scope.getQuestionAns = function(data,ans){
		// 	$scope.questionData = data;
		// 	$scope.questionAnsData = ans;

		// 	if(ans.length>0){
		// 		// alert('not')
		// 		$scope.anEmpty = false;
		// 	}else{
		// 		// alert('null')
		// 		$scope.anEmpty = true;
		// 	}
		// 	console.log(ans, data);
		// }

		$scope.clearAssign = function(){
			$scope.assignSubjData = null;
			$scope.button = 'Add';
		}

		$scope.viewAssign = function(data){
			// console.log(data);
			$window.location.href = 'subject.php?id='+data.subject_id;
		}

	}])