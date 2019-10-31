<?php

if(isset($_SESSION['user_account'])){
  $_users = $_SESSION['user_account'];
}else if(isset($_COOKIE['user_account'])){
  $_users = $_COOKIE['user_account'];
}

$sql = "SELECT * FROM tbl_student WHERE username='$_users'";

$_usersData = mysqli_fetch_array(mysqli_query($conn, $sql));
