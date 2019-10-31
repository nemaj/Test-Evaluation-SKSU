<?php

$sql = "SELECT * FROM tbl_subject WHERE course_id='".$_usersData['course']."'";

$_subject = mysqli_query($conn, $sql);
