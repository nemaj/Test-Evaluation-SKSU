<?php 

if(empty($_GET['id'])&&empty($_GET['Sid'])&&empty($_GET['Qid'])){
	header('location: index.php');
}