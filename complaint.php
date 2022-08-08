<html lang="en">
<head>
<title>complaint</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  border-radius: 25px;
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




 (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

input[type=text] {
  width: 100%;
  padding: 8px 25px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid orange;
  border-radius: 10px;
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

</style>

<link rel="stylesheet" type="text/css" href="style.css">

</head>





<body>

<!--   START OF NAVBAR   -->

   <div class="container">         
   <div id="header">
     <div class=navbar>
       <img src="flogo.png" width="150px" height="100px" alt="logo"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <img src="fheading.png" width="1000px" height="100px" alt="Heading"/>
 <ul>
<a href="index.php"  ><font size= "5">Home</font></a>
<a href="about.php"   ><font size= "5">About</font></a>
<a href="register.php" ><font size= "5">Register</font></a>
<a href="log.php"><font size= "5">Login</font></a>
<!-- <a href="services2.php"><font size= "5">Services</font></a> -->
<a href="complaint.php" class="active"><font size= "5">complaints</font></a>
<a href="contact1.php"><font size= "5">Contact</font></a>
</ul>
</div>
</div> 
</div>
 
<!--   END OF NAVBAR    -->
<br><br>
<center>
<header>
<h1><b><font color="white" size="8" class="fontstyle" >Complaint</font></h1>
</header>
<section>
 <article>
<form action="compdata.php" method="POST">
<table>
<tr>
<td style="margin:10px; padding:5px;"><big><b>Name*</b></big></td>
<td> <input type="text" name="name" required></td>
</tr>
<tr>
<td style="margin:10px; padding:5px;"><big><b>Phone No*</b></big></td>
<td> <input type="text" name="phoneno" required></td>
</tr>
<tr>
<td style="margin:10px; padding:5px;"><big><b>Email id</big></td>
<td> <input type="text" name="email" required></td>
</tr>
<tr>
<td style="margin:10px; padding:10px;"><big><b>Complaint</b></big>
</td>
<td> <input type="text" name="complaintname" required> </td>
</tr>
<tr></tr>
<tr>
<td></td>
<td> <input type="submit" value="submit"></td>
<td> <input type="submit" value="cancel"></td>
</tr>
</table>
</br>
</br>
</br>
<div class="button">
<a href="index.php">Back to home</a>

</div>
</article>
</section>

</body>
</html>
