 <html>
<head>
<title>LOGIN FORM</title>
<script>
function validate()
{ 
   if( document.log.username.value == "" )
   {
     alert( "Please provide the name!" );
     document.log.name.focus() ;
     return false;
   }
   if( document.log.password.value == "" )
   {
     alert( "Please provide password!" );
     document.log.password.focus() ;
     return false;
   }
   

}
</script>
<link rel="stylesheet" type="text/css" href="style4.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="https://backgroundcheckall.com/wp-content/uploads/2017/12/good-background-images-for-login-page.jpg">
  <!--   START OF NAVBAR    -->

   <div class="container">         
   <div id="header">
     <div class=navbar>
       <img src="flogo.png" width="150px" height="100px" alt="logo"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <img src="fheading.png" width="1000px" height="100px" alt="Heading"/>
 <ul>
<a href="index.php"  ><font size= "5">Home</font></a>
<a href="about.php"   ><font size= "5">About</font></a>
<a href="register.php"><font size= "5">Register</font></a>
<a href="log.php"  class="active"><font size= "5">Login</font></a>
<!-- <a href="services2.php"><font size= "5">Services</font></a> -->
<a href="complaint.php"><font size= "5">complaints</font></a>
<a href="contact1.php"><font size= "5">Contact</font></a>
</ul>
</div>
</div> 
</div>

<!--   END OF NAVBAR    -->
<div class="login">
<img src="https://achieve.lausd.net/cms/lib/CA01000043/Centricity/domain/779/welligentbuttons/login.png" class="avathar">
<h1>LOGIN </h1>
<form  action="data.php"  method="POST">
<p>Username</p>
 <input type="text" name="username1" placeholder="enter username" required>

<p>Password</p>
<input type="password" name="password" placeholder="enter password" required>
<input type="submit" value="submit" > &nbsp;&nbsp;&nbsp;</br>

<a href="#" onclick="alert('Try to remember, I can do nothing for that!');">Forgot password ? </a>
</br></br></br></br></br>
<div class="button1">
<a href="index.php">Home</a>
</div>
</form>
</div>
</body>

</html>