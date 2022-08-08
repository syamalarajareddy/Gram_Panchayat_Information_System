<html>
<head>
<title>REGISTRATION FORM</title>
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="https://tse3.mm.bing.net/th?id=OIP.ccYk4hr9LJaM5IvFliQBRQHaHa&pid=15.1&P=0&w=300&h=300 ">


<!--   START OF NAVBAR   -->

   <div class="container">         
   <div id="header">
     <div class=navbar>
       <img src="flogo.png" width="150px" height="100px" alt="logo"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <img src="fheading.png" width="1000px" height="100px" alt="Heading"/>
 <ul>
<a href="index.php"  ><font size= "5">Home</font></a>
<a href="about.php"   ><font size= "5">About</font></a>
<a href="register.php" class="active"><font size= "5">Register</font></a>
<a href="log.php"><font size= "5">Login</font></a>
<!-- <a href="services2.php"><font size= "5">Services</font></a> -->
<a href="complaint.php"><font size= "5">complaints</font></a>
<a href="contact1.php"><font size= "5">Contact</font></a>
</ul>
</div>
</div> 
</div>
 
<!--   END OF NAVBAR    -->

<div class="container">
<div class="button1">
    <a href="log.php">Login</u></font></a>
</div>
<!-- <p>Already registered?</p>  -->
<div class="login">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXVILoJiWtQ3VwYQadAXgkdYqYVrXtUpp0f0hfe_cCba7T_ts3SQ" class="avathar">

<h1><b>REGISTRATION</h1>
<form  action="regdata.php" method="POST">


<p>Username</p>
 <input type="text" name="username" placeholder="enter name" required>
<p>Password</p>
<input type="password" name="password1" palceholder="enter password" required>
<p>Re Password</p>
<input type="password" name="password2" required>
<p>Aadharcard number</p>
<input type="text" name="Adharcardno" required>

<p>Phone Number</p>
<input type="text" name="phone_no" placeholder="enter number" required>
<p>role</p>
<input type="text" name="role" placeholder="enter role" required>

<input type="submit" value="submit" >

<a href="index.php"><input type="button" value="cancel"> </a>

</form>
</div>
</div>
</body>
</html>








