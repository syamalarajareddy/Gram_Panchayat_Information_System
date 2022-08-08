<?php

  $servername = 'localhost';
        $username1 = 'root';
        $password1= '';
        $dbname='project';	
        $server=  mysqli_connect($servername, $username1, $password1, $dbname);
   if (!$server) die("unable to connect to mysql:".mysqli_error($server));
mysqli_select_db($server,'project')
 or die("unable to select database".mysqli_error($server));
 SESSION_START();
if(isset($_POST['Assessmentno']))
{  
     $_SESSION['num']=$_POST['Assessmentno'];		
	
             
			  echo <<<_END
<script type="text/javascript">
		
		alert("your data is entered.");
		 window.location.href='electdata1.php';
		</script>
			
_END;
		    }
		
	 		
			else 
         header("location:electricitybill.php?invalid=Invalid username(username can contain only characters and white spaces)"); 
   	
	
	 
mysqli_close($server);
?>