</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Payment</title>

<style>
      	
header 
{
  background-color: #FF8040;
 
  text-align: center;
  font-size: 35px;
  color: white;
  height:80px;
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

body 
{
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF4zqbx3ysyZssETdVZpz1Mrr_oLwmAyK_bQ&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

button
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
<body background="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwallpaperaccess.com%2Ffull%2F4597140.jpg&imgrefurl=https%3A%2F%2Fwallpaperaccess.com%2Fpayment&tbnid=D-VeYSg-1Vat7M&vet=12ahUKEwjG9o3J2pzyAhXURisKHSQmDGEQMyhfegUIARCmAQ..i&docid=TntkRJSRx9p4dM&w=1920&h=1080&q=website%20background%20for%20payment&ved=2ahUKEwjG9o3J2pzyAhXURisKHSQmDGEQMyhfegUIARCmAQ">
	<header>
		<h1><b><font color="white" size="10" class="fontstyle" >Payment</font></h1>
	</header>
	<br><br>
	<center>
		<form action="save2db" method="post">
  		<label for="fname">Aadhar Number:</label><br>
  		<input type="text" id="fname" name="fname" placeholder="Enter Aadhar Number" required><br><br>
  		<label for="service">Choose Service:</label>
  		<select name="service" id="service">
   			 <option value="House">House Tax</option>
    		 <option value="Wealth">Wealth Tax</option>
   			 <option value="Water">Water Tax</option>
  		</select>
		</form>
		<p>Scan the below code to make payment</p>
		<img src="QRCode.jpg" height="500px" width="500px">
		<br><br>
		<button onclick="alert('Your Payment Successfull');">SUBMIT</button>
		<br>
		<sub>Click on SUBMIT after payment</sub>
	</center>

<button onclick="window.location.href='services2.php'"> <i class="fa fa-arrow-left" style="color: #FFFFFF;" aria-hidden="true"></i> BACK </button>


</body> 
</html>