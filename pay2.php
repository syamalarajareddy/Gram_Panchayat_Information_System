<?php


  $servername = 'localhost';
        $username1 = 'root';
        $password1= '';
        $dbname='project';	
        $server=  mysqli_connect($servername, $username1, $password1, $dbname);
   if (!$server) die("unable to connect to mysql:".mysqli_error($server));
mysqli_select_db($server,'project')
 or die("unable to select database".mysqli_error($server));

if(isset($_POST['name'])&&isset($_POST['amount'])&&isset($_POST['cardnumber'])&&isset($_POST['expmonth'])&&isset($_POST['expyear'])&&isset($_POST['cvv']))
{  
	$strings = array($_POST['name']);
foreach ($strings as $testcase) 
{
     if (ctype_alpha(str_replace(' ', '', $testcase)) == true) 
{
              $query="INSERT INTO payment(name,amount,cardnumber,expmonth,expyear,cvv)
	          values ('$_POST[name]','$_POST[amount]','$_POST[cardnumber]','$_POST[expmonth]','$_POST[expyear]')";
	          $result=mysqli_query($server,$query) or ("query exection error".mysqli_error($server));
	          
			  echo <<<_END
<script type="text/javascript">
		
		alert("Your Payment is successfull");
	
     header("location:services2.php");
		</script>
			
_END;
		     }
		      else
		        header("location:payment.php?"); 
	}
}

mysqli_close($server);
?>