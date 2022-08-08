<?php
include "register.php";

  $servername = 'localhost';
        $username1 = 'root';
        $password1= '';
        $dbname='project';	
        $server=  mysqli_connect($servername, $username1, $password1, $dbname);
   if (!$server) die("unable to connect to mysql:".mysqli_error($server));
mysqli_select_db($server,'project')
 or die("unable to select database".mysqli_error($server));

if(isset($_POST['username'])&&isset($_POST['password1'])&&isset($_POST['password2'])&&isset($_POST['Adharcardno'])&&isset($_POST['phone_no']))
{  
	$strings = array($_POST['username']);
foreach ($strings as $testcase) {
     if (ctype_alpha(str_replace(' ', '', $testcase)) == true) {
		 if (ctype_digit( $_POST['password1'])&&ctype_digit( $_POST['password2'])) {
		 $string = $_POST['password1'];
         $string2= $_POST['password2'];
         $num_length = strlen((string)$string);
         $num_length1 = strlen((string)$string2);
         if($num_length >= 4 && $num_length1 >= 4) {
        
		     if($_POST['password1']== $_POST['password2']){
              $query="INSERT INTO registration(username,password1,password2,Adharcardno,phone_no,role)
	          values ('$_POST[username]','$_POST[password1]','$_POST[password2]','$_POST[Adharcardno]','$_POST[phone_no]','user')";
	          $result=mysqli_query($server,$query) or ("query exection error".mysqli_error($server));

	          $query="INSERT INTO housetax(Assessmentno,Ownername,amount,status)
	          values ('$_POST[Adharcardno]','$_POST[username]','999','unpaid')";
	          $result=mysqli_query($server,$query) or ("query exection error".mysqli_error($server));

	          $query="INSERT INTO watertax(Connectionno,Name,Amount,status)
	          values ('$_POST[Adharcardno]','$_POST[username]','999','unpaid')";
	          $result=mysqli_query($server,$query) or ("query exection error".mysqli_error($server));

	          $query="INSERT INTO wealthtax(paccno,Assessmentyr,Name,Amount,status)
	          values ('$_POST[Adharcardno]','2021','$_POST[username]','999','unpaid')";
	          $result=mysqli_query($server,$query) or ("query exection error".mysqli_error($server));

			  echo <<<_END
<script type="text/javascript">
		
		alert("Your account has been created successfully.You can login now.");
		header ("location:login.php");
		</script>			
_END;
		     }
		      else
		        header("location:register.php?invalid=Invalid password"); 
		   } else 
                header("location:register.php?invalid=password length  must be atleast 6"); 
           } else 
            header("location:register.php?invalid=password should contain digits only"); 
       }
			
	 		
			else 
         header("location:register.php?invalid=Invalid username(username can contain only characters and white spaces)");    
}
	 
	 }	

mysqli_close($server);
?>