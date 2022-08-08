<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 100px;
  position: relative;
  margin: auto;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.0s;
  animation-name: fade;
  animation-duration: 2.0s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
                                                                       <!--       -->
<body>
  <!--   START OF NAVBAR    -->
   <div class="container">         <!--<div id="wrapper"> -->
   <div id="header">
     <div class=navbar>
       <img src="flogo.png" width="150px" height="100px" alt="logo"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <img src="fheading.png" width="1000px" height="100px" alt="Hlow"/>
    <!-- </div>  -->
<!--</div>  -->
   <!--<div class="navbar">   -->
 <ul>
<a href="index.php" class="active" ><font size= "5">Home</font></a>
<a href="about.php"><font size= "5">About</font></a>
<a href="register.php"><font size= "5">Register</font></a>
<a href="log.php"><font size= "5">Login</font></a>
<!--<a href="services2.php"><font size= "5">Services</font></a>-->
<a href="complaint.php"><font size= "5">complaints</font></a>
<a href="contact1.php"><font size= "5">Contact</font></a>
</ul>
</div>
</div> 
</div>
<!--   END OF NAVBAR    -->
 <!--    added   -->

 
  <!--    added   -->
<br> <br><br><br>

  <div id="container">
       <div id="left-panel">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://i.ytimg.com/vi/OtihrPUxvnE/maxresdefault.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://spiderimg.amarujala.com/assets/images/2016/12/04/990x460/panchayat_1480872406.jpeg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://s3.ap-southeast-1.amazonaws.com/images.deccanchronicle.com/dc-Cover-652ovhkibhg82kh6on274ihkn1-20171128015017.Medi.jpeg" style="width:100%">
  <div class="text"></div>
</div>

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}


</script>

</div>
<div id="right-section">
 <p> <font size="6"><marquee direction="up" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();"> *Please pay the tax/bills before the due date.<br/>
    Otherwise you have to pay the fine.<br/></br>
  For more details click on the below the link.<br/></font>
  <font size="6"><a href="fine.html"> www.finedetails.com</a></font>
 </marquee>
</div>

</div>
  
  </div>

  <?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS project";
if ($conn->query($sql) === TRUE) {
//echo "Database created successfully";

mysqli_select_db($conn,"project");
//Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS registration( username VARCHAR(10) NOT NULL , password1 VARCHAR(10) NOT NULL , password2 VARCHAR(10) NOT NULL ,
 Adharcardno INT(12) NOT NULL , phone_no INT(10) NOT NULL ,   VARCHAR(5) NOT NULL)";

if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}


$sql="INSERT INTO `registration`(`username`, `password1`, `password2`, `Adharcardno`, `phone_no`, `role`) VALUES ('officer','admin','admin','0','0','pdo')";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}

$sql="INSERT INTO `registration`(`username`, `password1`, `password2`, `Adharcardno`, `phone_no`, `role`) VALUES ('admin','admin','admin','0','0','admin')";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}



$sql = "CREATE TABLE IF NOT EXISTS housetax(Assessmentno INT(10) NOT NULL , Ownername VARCHAR(10) NOT NULL, amount INT(10) NOT NULL,status VARCHAR(6) NOT NULL)";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS watertax(Connectionno INT(10) NOT NULL , Name VARCHAR(10) NOT NULL,Amount INT(10) NOT NULL,status VARCHAR(6) NOT NULL)";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS wealthtax(paccno INT(10) NOT NULL , Assessmentyr INT(4) NOT NULL , Name VARCHAR(10) NOT NULL , Amount INT(10) NOT NULL,status VARCHAR(6) NOT NULL)";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS complaint(name VARCHAR(15) NOT NULL , phoneno INT(10) NOT NULL ,email VARCHAR(25) NOT NULL , complaintname VARCHAR(100) NOT NULL)";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}
$conn->close();
}
?>

   
</body>
</html>