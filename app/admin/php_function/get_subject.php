<?php

$sql = "SELECT * FROM tbl_subject WHERE course_id='".$_GET['id']."'";

$subject = mysqli_query($conn, $sql);
