<?php
include "log.php";

$username1=$_POST['username1'];
$password=$_POST['password'];
$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_name='wtproject';
$db_server = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$db_server) die("Unable to connect".mysqli_error());


$uname=("SELECT username,password2 FROM registration WHERE username='$username1' and password2='$password'");


$exec = mysqli_query($db_server,$uname);

if (mysqli_num_rows($exec) > 0 ) 
	{
	
while($row=mysqli_fetch_row($exec))

{
	if(($username1=='officer')&&($password=='admin'))
   {
	header("location:pdomain.php");
	}


	else if(($username1=='admin')&&($password=='admin'))
   {
	header("location:adminmain.php");
	}

	else if(($username1==$row[0])&&($password==$row[1]))
   {
	header("location:services2.php");
	}
	
	
}
	}
	else
	{  
		
		echo <<<_END

<script type="text/javascript">
		alert("Invalid username or password");
		
		</script>

_END;
		
		
	}
  
    
	

	mysqli_close($db_server)
    ?>
	
