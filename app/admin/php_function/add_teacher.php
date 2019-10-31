<?php 

include'../../php_con/db_connect.php';

$fname = strtoupper($_POST['firstname']);
$mname = strtoupper($_POST['middlename']);
$lname = strtoupper($_POST['lastname']);
$email = $_POST['email'];

if(empty($_POST['teachID'])){

	$sql_check = "SELECT * FROM tbl_teacher WHERE email = '$email'";

	if(mysqli_num_rows(mysqli_query($conn, $sql_check))>0){
		echo 'email already used';
		$_SESSION['teacher_error'] = "Email is Already exists.";
		header('location: ../teachers.php');
	}else{
		$ind = strpos($email,"@");
		$account = substr($email, 0, $ind);
		$sql = "INSERT INTO tbl_teacher (firstname,middlename,lastname,email,username,password) VALUES ('$fname','$mname','$lname','$email','$account','$account')";

		if(mysqli_query($conn, $sql)===TRUE){
			header('location: ../teachers.php');
		}else{
		    echo "error";
		    die();
		}

	}

}else{

	$id = $_POST['teachID'];

	$sql_check = "SELECT * FROM tbl_teacher WHERE email = '$email' and teach_id != '$id'";

	if(mysqli_num_rows(mysqli_query($conn, $sql_check))>0){
		echo 'email already used';
		$_SESSION['teacher_error'] = "Email is Already exists.";
		header('location: ../teachers.php');
	}else{

		$sql = "UPDATE tbl_teacher SET firstname='$fname',middlename='$mname',lastname='$lname',email='$email' WHERE teach_id='$id'";

		if(mysqli_query($conn, $sql)===TRUE){
			header('location: ../teachers.php');
		}else{
			echo "error";
			die();
		}

		// echo "update";

		// $ind = strpos($email,"@");
		// $account = substr($email, 0, $ind);
		// $sql = "INSERT INTO tbl_teacher (firstname,middlename,lastname,email,username,password) VALUES ('$fname','$mname','$lname','$email','$account','$account')";

		// if(mysqli_query($conn, $sql)===TRUE){
		// 	header('location: ../teachers.php');
		// }else{
		//     echo "error";
		//     die();
		// }

	}

}


// $sql_check = "SELECT * FROM tbl_teacher WHERE email = '$email'";

// if(mysqli_num_rows(mysqli_query($conn, $sql_check))>0){
// 	echo 'email already used';
// 	$_SESSION['teacher_error'] = "Email is Already exists.";
// 	header('location: ../teachers.php');
// }else{
// 	$ind = strpos($email,"@");
// 	$account = substr($email, 0, $ind);
// 	$sql = "INSERT INTO tbl_teacher (firstname,middlename,lastname,email,username,password) VALUES ('$fname','$mname','$lname','$email','$account','$account')";

// 	if(mysqli_query($conn, $sql)===TRUE){
// 		header('location: ../teachers.php');
// 	}else{
// 	    echo "error";
// 	    die();
// 	}

// }




