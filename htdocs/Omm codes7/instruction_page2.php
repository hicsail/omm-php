
<!DOCTYPE html>
<?php
 session_start();
 include 'connect.php'; 
 
 ?>
<html>
<head>
	<title>Bank statement</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="header.css">

  <link rel="stylesheet" type="text/css" href="instr.css">
</head>


<body>
  <script>
    function erroralert(e)
    {
      alert("This is incorrect. Please select another option.");
    }
  </script>
	<button value="help" style = "background-color:#33CEFF; font-family: georgia; font-weight: bold; color: black; border: 2px solid black; position:absolute; right:10px;" onclick="HelpAlert(this)">Help</button>
  <!--<bgsound src="C:\xampp\htdocs\Omm codes\file_example_MP3_700KB.mp3" loop="true" autostart="true">
  </bgsound>
</audio>-->
<div class="container-fluid">
 
<br>
<br><br>
<hr>
<div class="jumbotron">
<div class="container-fluid">
	<div class="inst-box">

		<h3><b><center>
      On the next page, please login with username <span style="color: blue;">pat</span> and password <span style="color: blue;">admin123</span>. <br><br><br>If needed, you can click on “forgot username/password”.<br><br><br> 

   After you login, please download the <span style="text-decoration: underline; color: blue;">August 2018</span> statement.<br><br><br>
   Once I click on "Start Activity”, please complete this task as quickly and accurately as you can.abcd<br><br><br>
</center>

</h3><br>


</div>
</div>
</div>
<hr>
<br>
<center>
  <a href="login.php" class="button"  style="color:white"><span> Start Activity </span></button></center></a>
<script>
  function newFunction(){
  alert("Error:You have made a wrong choice");
}
</script>
<!--<embed src="file_example_MP3_700KB.mp3" autostart = "true">-->

</body>
</html>