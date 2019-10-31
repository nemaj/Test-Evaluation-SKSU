<?php
include'../php_con/db_connect.php';


$fname = strtoupper($_POST['firstname']);
$mname = strtoupper($_POST['middlename']);
$lname = strtoupper($_POST['lastname']);
$course = $_POST['course'];
$year = $_POST['year'];
$section = $_POST['section'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yyyy = $_POST['yyyy'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$uname = $_POST['username'];
$pass = $_POST['password'];

$birthdate = $yyyy."-".$mm."-".$dd;

$sql_usr = "SELECT * FROM tbl_student WHERE username='$uname'";

if(mysqli_num_rows(mysqli_query($conn, $sql_usr))>0){
  header('location: ../sign-up.php?error=username exist');
  echo "Username Exist";
  //die();
}else{
  $sql = "INSERT INTO tbl_student (firstname,middlename,lastname,birthdate,gender,course,year,section,email,username,password) VALUES
                                  ('$fname','$mname','$lname','$birthdate','$gender','$course','$year','$section','$email','$uname','$pass')";

  if(mysqli_query($conn, $sql)===TRUE){
    header('location: ../index.php');
  }else{
    echo "error";
    die();
  }

}
