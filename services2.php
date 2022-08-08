<html>
<head>
<title>SERVICES</title>
<style type="text/css">
.fontstyle {
	font-family: Arial Black, Gadget, sans-serif;
}
.vs {
	font-family: Courier New, Courier, monospace;
}
.vs {
	font-family: Courier New, Courier, monospace;
}
.stylecss {
	font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
}
.stylecss {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
.stylecss {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
.stylecss {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
  border-radius: 25px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 25px;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-radius: 25px;
}

.flip-card-front {
  background-color: #333333;
  color: black;
  border-radius: 25px;
}

.flip-card-back {
  background-color: #FF8040;
  color: white;
  transform: rotateY(180deg);
}



</style>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

<body  >
	<div id=bgcolor>
<!--   START OF NAVBAR    -->

   <div class="container">         
   <div id="header">
     <div class=navbar>
       <img src="flogo.png" width="150px" height="100px" alt="logo"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <img src="fheading.png" width="1000px" height="100px" alt="Heading"/>
 <ul>
<a href="index.php"  ><font size= "5">Home</font></a>
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
<br><br><br><br> <h1><center>SERVICES</center></h1>

<div id="sectionone">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <center><i class="fa fa-home" style="font-size:265px; color: #FF8040;" aria-hidden="true" ></i></center>
      
      <!--  <img src="https://picsum.photos/200/300" alt="House tax" style="width:300px;height:300px;">  -->
    </div>
    <div class="flip-card-back">
      <h1>HOUSE TAX</h1> 
      <p>You can pay you house tax or view your recent house tax payments here</p>
      <br>
      <button onclick="window.location.href='housetax.php'"><h3>Pay Tax</h3></button>      <!--  Uses button as anchor tag  -->
    </div>    
  </div>
</div>
</div>

<div id="sectionthree"> 
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <i class="fa fa-tint" style="font-size:265px; color: #FF8040;" aria-hidden="true" ></i>
      <!-- <img src="https://picsum.photos/200/300" alt="Water tax" style="width:300px;height:300px;">  -->
    </div>
    <div class="flip-card-back">
      <h1>WATER TAX</h1> 
      <p>You can pay you water tax or view your recent water tax payments here</p>
      <br>
      <button onclick="window.location.href='waterbill.php'"><h3>Pay Tax</h3></button>      <!--  Uses button as anchor tag  -->
    </div>   
  </div>
</div> 
</div>

<div id="sectionone">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <i class="fa fa-briefcase" style="font-size:265px; color: #FF8040;" aria-hidden="true" ></i>
      <!--<img src="https://picsum.photos/200/300" alt="wealth" style="width:300px;height:300px;">  -->
    </div>
    <div class="flip-card-back">
      <h1>WEALTH TAX</h1> 
      <p>You can pay you wealth tax or view your recent wealth tax payments here</p>
      <br>
      <button onclick="window.location.href='wealthtax.php'"><h3>Pay Tax</h3></button>      <!--  Uses button as anchor tag  -->
    </div>    
  </div>
</div>
</div>
<!--
<div id="sectionthree"> 
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://picsum.photos/200/300" alt="12pro" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>PROPERTY TAX</h1> 
      <button>Pay Tax</button>
      <button>View fistory</button>
    </div>   
  </div>
</div> 
</div>

-->










<!--
<ul>
	<li>
<center><h1 class="fontstyle"><big><font color="red">SERVICES PROVIDED</font></big></h1></br>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Pay Bill</h1> 
      <p>View payment history</p> 
      
    </div>
  </div>
</div>
</li>
<br><br>
<li>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Electricity Bill</h1><br>
      <h2>Pay Bill</h2> 
      <p>View History</p> 
      
    </div>
  </div>
</div>
</li>
</ul>
-->







<!-- 
<a href=""><font size= "5" color="black" class="stylecss"></b>*Property valuation certificate</font></a></br></br>
<a href=""><font size= "5" color="black" class="stylecss">*Mutation</font></a></br></br>
<span class="stylecss"><a href=""><font size= "5" color="black">*Water tap connection</font></a></br></br>
<a href=""><font size= "5" color="black">*NOC for small medium and large scale industries</font></a></br></br>
<a href=""> <font color="black"  size="5">* Building permission </font></br></br>
<span class="stylecss"><a href=""><font size= "5" color="black">*Layout Permission</font></a></br></br>
<a href=""><font size= "5" color="black">*Birth & death registration</font></a></span></br></br>
<a href=""><font size= "5" color="black">*House tax</font></a></br></br>
<a href=""><font size= "5" color="black">*Trade License</font></a></br></br>

-->

</div>
</body>
</html>

</body>
</html>
