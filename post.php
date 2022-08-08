<!DOCTYPE html>
<html>
   <head>
      <title>Post Updates</title>
      <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="style.css">

      <style>
      	
header 
{
  background-color: #FF8040;
  padding: 10px;
  text-align: center;
  font-size: 35px;
  color: white;
  height:120px;
  border-radius: 25px;
}



input[type=submit]
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

   <body>
   	<!--   START OF NAVBAR   -->

   <div class="container">         
   <div id="header">
     <div class=navbar>
       <img src="flogo.png" width="150px" height="100px" alt="logo"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <img src="fheading.png" width="1000px" height="100px" alt="Heading"/>
 <ul>
<a href="pdomain.php"><font size= "5">Home</font></a>
 <!--<a href="about.php"   ><font size= "5">About</font></a>   -->                            <!--      -->
<a href="post.php" class="active" ><font size= "5">Post</font></a>  
<a href="pdocomp.php"><font size= "5">Complaints</font></a>
</ul>
</div>
</div> 
</div>
 
<!--   END OF NAVBAR    -->
<br>
<header>
<h1><b><font color="black" size="8" class="fontstyle" >Post Latest Updates</font></h1>
</header>
	  <center>
      <form action = "modify" method = "get">
         
         <h2>The updates posted here can be viewed by all the users of the Gram Panchayat</h2>
         <br>
         <textarea rows = "20" cols = "100" name = "updates" placeholder="Enter updates here"></textarea>
            
         <br>
         <input type = "submit" value = "submit" onclick="alert('Submission Successfull');" /> 
      </form>
      </center>
   </body>
</html>