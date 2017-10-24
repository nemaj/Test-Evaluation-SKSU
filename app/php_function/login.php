<?php
include'../php_con/db_connect.php';

$user = $_POST['exampleInputEmail1'];
$pass = $_POST['exampleInputPassword1'];
// if(isset($_POST['rememberMe'])){
//   $remember = 1;
// }else{
//   $remember = 0;
// }

$sql = "SELECT * FROM tbl_admin WHERE username='$user' AND password='$pass'";

$sql_result = mysqli_query($conn, $sql);

if(mysqli_num_rows($sql_result)>0){

  if(isset($_POST['rememberMe'])){
    setcookie("user_role", 'Admininstrator', time()+36000, "/","", 0);
    setcookie("user_account", $user, time()+36000, "/","", 0);
  }else{
    $_SESSION['user_role'] = 'Admininstrator';
    $_SESSION['user_account'] = $user;
  }

  header('location: ../admin');
  die();

  // setcookie("user_account", null, time()-36000, "/","", 0);
  // $_SESSION['user_account']=$user;

}else{
  $sql = "SELECT * FROM tbl_student WHERE username='$user' AND password='$pass' OR email='$user' AND password='$pass'";

  $sql_result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($sql_result)>0){
    if(isset($_POST['rememberMe'])){
      setcookie("user_role", 'Student', time()+36000, "/","", 0);
      setcookie("user_account", $user, time()+36000, "/","", 0);
    }else{
      $_SESSION['user_role'] = 'Student';
      $_SESSION['user_account'] = $user;
    }

    header('location: ../dashboard.php');
    die();

  }else{
    echo "No User Found";
  }
}
