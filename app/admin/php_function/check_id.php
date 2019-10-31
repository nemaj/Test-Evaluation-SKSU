<?php 

if(empty($_GET['id'])&&empty($_GET['Sid'])&&empty($_GET['Qid'])&&empty($_GET['Tid'])){
	header('location: index.php');
}