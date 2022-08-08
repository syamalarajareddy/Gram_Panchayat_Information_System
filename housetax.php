<html lang="en">
<head>
<title>House Bill</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


header {
  background-color: #FF8040;
  padding: 10px;
  text-align: center;
  font-size: 35px;
  color: white;
  height:120px;
}



article {
  float: left;
  padding: 40px;
  width: 100%;
 
  height: 450px; 
}


section:after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background-color: #FF8040;
  padding: 15px ;
  text-align: center;   
  color: white;
  height:60px;
}


 (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
input[type=text] {
  width: 20%;
  padding: 8px 25px;
  margin: 6px 0;
  box-sizing: border-box;
  border: 2px solid #FF8040;
  border-radius: 4px;
}
 input[type=submit], input[type=reset] {
  background-color: #FF8040;
  border: none;
  color: white;
  font size:8px;
  padding: 12px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 15px;
}
 button[type=back]
 {
  background-color: #FF8040;
  border: none;
  color: white;
  font size:8px;
  padding: 12px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 15px;
 }
</style>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <!--   START OF NAVBAR    -->
   <div class="container">         
   <div id="header">
     <div class=navbar>
       <img src="flogo.png" width="150px" height="100px" alt="logo"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <img src="fheading.png" width="1000px" height="100px" alt="Hlow"/>
    
 <ul>
<a href="index.php"><font size= "5">Home</font></a>
<a href="about.php"><font size= "5">About</font></a>
<a href="register.php"><font size= "5">Register</font></a>
<a href="log.php"><font size= "5">Login</font></a>
<a href="services2.php" class="active" ><font size= "5">Services</font></a>
<a href="complaint.php"><font size= "5">complaints</font></a>
<a href="contact1.php"><font size= "5">Contact</font></a>
</ul>
</div>
</div> 
</div>
<!--   END OF NAVBAR    -->

<br>

<center>
<header>
<h1><b><font color="black" size="8" class="fontstyle" >House bill</font></h1>

</header>
<section>
 <article>
   <form action="housedata.php" method="POST">
</br></br></br>
 <label class="a"><big><b>Aadhar no*</b></big></label>
 &nbsp; &nbsp;<input type="text" name="Assessmentno" required>
</br></br></br>
<input type="submit">

</form>
  </article>
</section>
</center>

<button type="back" onclick="window.location.href='housetax.php'"><i class="fa fa-arrow-left" style="color: #FFFFFF;" aria-hidden="true"></i>  </a>BACK</button>
<footer>
 
</footer>
</body>
</html>
