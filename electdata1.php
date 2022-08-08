<?php

  SESSION_START();
$num1= $_SESSION['num'];
$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_name='project';
$db_server = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$db_server) die("Unable to connect".mysqli_error());

$uname=("SELECT * FROM electricitybill where Assessmentno= '$num1'  ");


$exec = mysqli_query($db_server,$uname) or die("Query execution error".mysqli_error($db_server));
 
 	if (mysqli_num_rows($exec) > 0) 
	{	 
    	  

			  echo <<<_END
               <html>
<head>
<style>
div {
  background-color: lightgrey;
  width: 600px;
  border: 25px solid blue;
  padding: 25px;
  margin: 25px;
}
</style>
<body >
<center>
</br></br>
<div>
<table cellspacing="10" border="0" >
  <tr></tr> <tr></tr>
 <tr></tr>  
 <tr></tr>
<tr>
  <th><font size="6"><u>Assessmentno</u></font></th>
  <th><font size="6"><u>Service no</u></font></th>
   <th><font size="6"><u>Name</u></font></th>
   <th><font size="6"><u>Amount</u></font></th>
  </tr>
  <tr></tr>
_END;
while($row=mysqli_fetch_row($exec))

{

			  echo <<<_END

  <tr>
    <td><font size="4">$row[0]</font></td>
    <td><font size="4">$row[1]</font></td>
    <td><font size="4">$row[3]</font></td>
    <td><font size="4">$row[4]</font></td>
<td> </td>  
</tr>
 <tr></tr>
<tr>
 <td> </td> 
<td><a href="payment.php"><input type="submit" value= "pay the bill"></a></td>

<td><a href="electricity.php"><input type="submit" value= "cancel"></a></td>
</tr>
 
 </tr>
			
_END;
	}
  echo <<<_END
</div>
</table>
</center>

</body>
</html>
			
_END;

}
	
  

	mysqli_close($db_server)
?>