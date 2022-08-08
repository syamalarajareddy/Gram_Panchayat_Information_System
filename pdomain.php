<!doctype html>
	<html>
		<head>
			<title>PDO Home</title>
			<!--   Visit this site for fonts https://fontawesome.com/v4.7/icons/ (line 7) -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
			<link rel="stylesheet" type="text/css" href="style.css">
      
<style>
.card {
	position: relative;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 50%;               
  margin-left: 20px;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
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


		</head>

		<body background="#F1F1F1">
<!--   START OF NAVBAR   -->

   <div class="container">         
   <div id="header">
     <div class=navbar>
       <img src="flogo.png" width="150px" height="100px" alt="logo"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <img src="fheading.png" width="1000px" height="100px" alt="Heading"/>
 <ul>
<a href="pdomain.php" class="active" ><font size= "5">Home</font></a>
<!-- <a href="about.php"   ><font size= "5">About</font></a>  
<a href="register.php"><font size= "5">Register</font></a>
<a href="log.php"><font size= "5">Login</font></a> -->                             <!--      -->
<a href="post.php"><font size= "5">Post</font></a>   -->
<a href="pdocomp.php"><font size= "5">Complaints</font></a>
<!--  <a href="contact1.php"><font size= "5">Contact</font></a>   -->
</ul>
</div>
</div> 
</div>
 
<!--   END OF NAVBAR    -->


<br><br><br><br><br>
<!-- <div class="containerpdo">   use if #ddd is needed in bg  -->
<center>
<div class="card">
	<a href="userslist.php">  <i class="fa fa-users" style="font-size:200px; color: #FF8040;" aria-hidden="true"></i>  </a>
  <!--  <img src="img_avatar2.png" alt="Avatar" style="width:100%">   -->
  <div class="container">
    <h1 style="letter-spacing: 10px;"><b><center>USERS</center></b></h1> 
      <!--  <p>view users as button</p>  
    <div class="button1">  <a href="pdetails.php">PAID DETAILS</a>  </div>  <br><br><br>
  <div class="button2">  <a href="udetails.php">UNPAID DETAILS</a> </div>  -->
  </div>
</div>
<br>
<div class="card">
  <a href="newpage">  <i class="fa fa-user" style="font-size:200px; color: #FF8040;" aria-hidden="true"></i>  </a>
  <div class="container">
    <h1 style="letter-spacing: 10px;"><b><center>ADMINS</center></b></h1> 
  </div>
</div>
<br>
<div class="card">
	<a href="userdetails.php"> <i class="fa fa-list-alt" aria-hidden="true" style="font-size:200px; color: #FF8040;" aria-hidden="true"></i>  </a>
  <div class="container">
    <h1 style="letter-spacing: 10px;"><b><center>DETAILS</center></b></h1> 
     
  </div>
</div>
</center>

<button type="back" onclick="window.location.href='index.php'"><i class="fa fa-cog fa-spin fa-1x fa-fw" style="color: #FFFFFF;" aria-hidden="true"></i>  </a>LOGOUT</button>

		</body>
</html>