<?php

  SESSION_START();
$num1= $_SESSION['num'];
$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_name='project';
$db_server = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$db_server) die("Unable to connect".mysqli_error());

$uname=("SELECT * FROM housetax where Assessmentno= '$num1'  ");


$exec = mysqli_query($db_server,$uname) or die("Query execution error".mysqli_error($db_server));
 
 	if (mysqli_num_rows($exec) > 0) 
	{	 
    	  

			  echo <<<_END
<html>
<head>
  <title> House tax Payment </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<style>
div {
  background-color: ;
  width: 650px;
  border: 25px solid #FF8040;
  padding: 25px;
  margin: 25px;
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
<body>

<center>
</br></br>
<div>
<table cellspacing="10" border="0" >
  <tr></tr> <tr></tr>
 <tr></tr>  

<tr>
  <th><font size="6"><u>Assessmentno</u></font></th>
  <th><font size="6"><u>Ownername</u></font></th>
   <th><font size="6"><u>amount</u></font></th>
  </tr>
  <tr></tr>
_END;
while($row=mysqli_fetch_row($exec))

{

			  echo <<<_END
  
  <tr>
    <td><font size="4">$row[0]</font></td>
    <td><font size="4">$row[1]</font></td>
    <td><font size="4">$row[2]</font></td>
   <td> </td>  
</tr>
 <tr></tr>
<tr>
<td> </td>  
<td><a href="payment.php"><input type="submit" value= "Pay with card"></a></td>
<td><a href="paymentpage.php"><input type="submit" value= "Pay with QR Code"></a></td>
<td><a href="housetax.php"><input type="submit" value= "cancel"></a></td>

</tr>
 
 </tr>
			
_END;
	}

  echo <<<_END

</div>
</table>
</center>
<button type="back" onclick="window.location.href='housetax.php'"><i class="fa fa-arrow-left" style="color: #FFFFFF;" aria-hidden="true"></i>  </a>BACK</button>
</body>
</html>
			
_END;

}
	
  

	mysqli_close($db_server)
?>