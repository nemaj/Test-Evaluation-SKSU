<?php 

if(!empty($_SESSION['user_role'])||!empty($_COOKIE['user_role'])){
	if($_SESSION['user_role']=='Teacher' || $_COOKIE['user_role']=='Teacher'){
		// die();
	}
}