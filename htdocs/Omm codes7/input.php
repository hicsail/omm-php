<?php
include_once 'connect.php';


$time =$_POST["time"];
$response =strip_tags( $_POST["a"]);
 $t = mysqli_query($con, "INSERT INTO statement_download VALUES('','$time','$response')");
?>
