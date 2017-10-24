<?php

session_start();
session_destroy();

setcookie("user_role", null, time()-36000, "/","", 0);
setcookie("user_account", null, time()-36000, "/","", 0);

header('location: index.php');
