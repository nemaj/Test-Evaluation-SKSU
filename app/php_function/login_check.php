<?php

if(isset($_SESSION['user_account'])){
  if($_SESSION['user_role']=='Admininstrator'){
    header('location: admin');
  }else{
    header('location: dashboard.php');
  }
}else if(isset($_COOKIE['user_account'])){
  if($_COOKIE['user_role']=='Admininstrator'){
    header('location: admin');
  }else{
    header('location: dashboard.php');
  }
}
