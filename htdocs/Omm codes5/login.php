<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="login.css">


<?php
if(isset($_POST['submit'])){

$user = $_POST["username"];
$pass = $_POST["psw"];

if ($user == "admin" and $pass == "password")
{
  header("Location: summary_page.php");

  
}
else
{
    echo("<script>alert('<b>Incorrect Password</b>'); </script>");  
}

}


?>

<p id="errMsg"></p>
<body onload="startTimer(this)">

  <div class="nv">
<nav>
  
    <nav class="navbar navbar-expand-md navbar-light">
       <div class="col-lg 3 col-md-3  col-sm-12 col-xs-12">
    <div class="navbar">

  <a href="#" onclick="newFunction(this)" style="font-size: 20px;"><i class="fa fa-fw fa-bars"></i></a>
  <a  href="#" onclick="newFunction(this)" style="font-family: georgia; font-size: 20px;"> Open an Account</a> 
  <a  href="#" onclick="newFunction(this)" style="font-family: georgia; font-size: 40px;"><b> OMM VISA</b></a> 
  <a href="#" onclick="newFunction(this)" style = "font-family: georgia; font-size: 20px;"> Branch Location</a> 
  <a href="#"><i onclick="newFunction(this)" class="fa fa-fw fa-search"></i> </a>

</div>

  </div>
</nav>
    
  
  

</nav>

<form action="login.php" class="container" method="POST">
   <h3 onclick="newFunction(this)" style="color:Black; font-family: georgia;">Welcome</h3>

    
    <input type="text" style = "font-family: georgia;" placeholder="User Name" name="username" required>

    <input type="password" style = "font-family: georgia;" placeholder="Password" name="psw" required>
<input type = "submit" value = "Login" name = "submit" id = "bt1">
    <br>
    <a href="forgot.php" onclick="newFunction(this)"  style="color: #bb0000; font-family: georgia;" >Forgot username/password</a> 
    <br>
  </form>
<section></section>
<hr>
<br>
<p1 style ="font-family: georgia; font-size: 2em; color: grey" onclick="newFunction(this)" ><center> Rewards Visa Signature Cards</center></p1>

<div id="navbar">
  <a  onclick="newFunction(this)" style = "font-family: georgia;" href="#">Home</a>
  <a href="#" onclick="newFunction(this)" style = "font-family: georgia;">Rewards</a>
  <a href="#" onclick="newFunction(this)" style = "font-family: georgia;">Redeem Rewards</a>

<div id="navbar1">
    <a href="#" onclick="newFunction(this)" style = "font-family: georgia;">Manage Account</a>
      <a href="#" onclick="newFunction(this)" style = "font-family: georgia;">Contact</a>
</div>
 
</div>
    </div>
  </div>
</div>



</div>


</div>
</div>
</div>

<hr>
<br>
<hr>

 <div class="jumbotron">
 <div class="container-fluid padding">
  <div class="row" >
  <div class="col-lg 3 col-md-3  col-sm-12 col-xs-12">
    <div class="maincontainer">
  <div class="thecard" onclick="newFunction(this)">
    <div class="front">
    <img src="Capture2.png" onclick="newFunction(this)"  id="img">
    </div>  


  </div>
</div>
</div>

<hr>
<div class="col-lg 3 col-md-3  col-sm-12 col-xs-12">
  <div class="maincontainer">
    <div class="thecard" onclick="newFunction(this)">
      <div class="front">
        <img src="Cashback.png" onclick="newFunction(this)"  id="img">
      </div>
     
 


    </div>
  </div>
</div>


<hr>
<div class="col-lg 3 col-md-3  col-sm-12 col-xs-12">
  <div class="maincontainer">
    <div class="thecard" onclick="newFunction(this)">
      <div class="front">
        <img src="Capture3.png" onclick="newFunction(this)" id="img">
      </div>
 


</div>


</div>
</div>
</div>

<hr>
<div class="container-fluid">
  <div class="row  text-center">
    <div class="col-12">
       <p class="text" onclick="newFunction(this)" style = "font-family: georgia;"><strong>Follow Us</strong></p>
    </div>
    <div class="col-12 social padding">
      <a href="#" onclick="newFunction(this)"> <i class="fab fa-facebook fa-3x fa-fw"></i></a>
      <a href="#" onclick="newFunction(this)"> <i class="fab fa-twitter fa-3x fa-fw"></i></a>
      <a href="#" onclick="newFunction(this)"> <i class="fab fa-google-plus-g fa-3x fa-fw"></i></a>
      <a href="#" onclick="newFunction(this)"> <i class="fab fa-instagram fa-3x fa-fw"></i></a>
      <a href="#" onclick="newFunction(this)"> <i class="fab fa-youtube fa-3x fa-fw"></i></a>
    </div>
    <br>
    <hr>
  </div>
</div>

<hr>
<footer style = "font-family: georgia; background-color: black; color: white">
     <div class="row text-center">
      <div class="col-md-4">
       
          <h5 onclick="newFunction(this)">Mortgage</h5>
 <p onclick="newFunction(this)">Home equity
        </p>
        <p onclick="newFunction(this)">Auto Mobile</p>
        <p onclick="newFunction(this)">Lending</p>
      </div>
      <div class="col-md-4">
        <h5 onclick="newFunction(this)">Investment Planning</h5>
 <p>Personalized
        </p>
        <p onclick="newFunction(this)">Not FDIC Insured</p>
        <p onclick="newFunction(this)">Risk Level</p>
      </div>
      <div class="col-md-4">
        
        <h5 onclick="newFunction(this)">Help & Support</h5>
        <p onclick="newFunction(this)">Contact
        </p>
        <p onclick="newFunction(this)">Security Center</p>
        <p onclick="newFunction(this)">Help & FAQs</p>

      </div> 
      <hr>

      
  
</div>
</footer>
    <br>

<script>
  $(document).ready(function(){
    $(window).scroll(function(){
if($(window).scrollTop()>250){
  $('nav').addClass('color');

}else{
  $('nav').removeClass('color');
}

    });
  });
</script>




 <script >
  
    
        var t = 0;
        var i;
     
     function startTimer(e){
            i = window.setInterval(()=>{
                t++;
                showTime(getTime(t));
            },1000) 
            e.setAttribute("onclick","stopTimer(this)");
             var a = e.innerHTML;
            saveTime(getTime(t),a);
     }

        function stopTimer(e){
            window.clearInterval(i);
            e.setAttribute("onclick","startTimer(this)");
          var a = e.innerHTML;
            saveTime(getTime(t),a);
        }

        function showTime(time) {
                document.getElementById("time").innerHTML= time;
        }

        function getTime(m){
            let hh = "" + Math.floor(m/3600);
            m=m%3600;
            let mm = "" + Math.floor(m/60);
            m=m%60;
            let ss = "" + m;
            return  hh.padStart(2,"0") + ":" + mm.padStart(2,"0") + ":" + ss.padStart(2,"0");
        }
           var b = 0;
function newFunction(e){
  var a = e.innerHTML;
  saveTime(getTime(t),a);
  alert("Error:You have made a wrong choice");
}
    function validate()
    {
      alert("Incorrect Password");
    }



        function saveTime(time,ans) {
          
            if(t>0){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status != 200) {
                        document.getElementById("errMsg").innerHTML = "Exception while saving data : " + this.responseText;
                    } else {
                        document.getElementById("errMsg").innerHTML = "";
                    }
                };
                xmlhttp.open("POST", "login_task.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("time=" + time + "&ans=" + ans);
          
            }
        }




</script>

</body>
</html>