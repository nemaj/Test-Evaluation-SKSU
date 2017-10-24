'use strict';

var app = angular.module('EvaluationApp', [])

	.controller('TeacherCtrl', ['$scope', function($scope){

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
			$window.location.href = 'subject.php?id='+data.subject_id;
		}

	}])