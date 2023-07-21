<?php
include_once 'connect.php';


$time =$_POST["time"];
$response =strip_tags( $_POST["ans"]);
 $t = mysqli_query($con, "INSERT INTO logintask VALUES('','$time','$response')");
?>