<?php

$sql = "SELECT * FROM tbl_teacher";

$teacher = mysqli_query($conn, $sql);

$teacher_count = mysqli_num_rows($teacher);
