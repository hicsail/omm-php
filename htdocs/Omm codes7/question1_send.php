<?php
include_once 'connect.php';

$question = $_POST["que"];
$value = "10/09/2018";
$val = " ";
$time =$_POST["time"];
//$ans =strip_tags($_POST["ans"]);
$ans = $_POST["ans"];
 //alert($ans);
 if($ans == $value)
 {
 	$r=1;
 	$w=0;
 }
 else{
 	$r=0;
 	$w=1;
 }
 if($ans == $val)
 {
 	$ans = "val";
 }

 $t = mysqli_query($con, "INSERT INTO question1 VALUES('','$time','$ans','$r','$w')");

?>
