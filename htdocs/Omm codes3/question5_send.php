<?php
include_once 'connect.php';

$question = $_POST["que"];
$value = "$4,500";
$time =$_POST["time"];
$ans =strip_tags($_POST["ans"]);
 if($ans == $value)
 {
 	$r=1;
 	$w=0;
 }
 else{
 	$r=0;
 	$w=1;
 }

 $t = mysqli_query($con, "INSERT INTO question5 VALUES('','$time','$ans','$r','$w')");

?>
