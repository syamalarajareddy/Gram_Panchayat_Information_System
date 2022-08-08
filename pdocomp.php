<!doctype html>
	<head>
		<title>Registered Complaints</title>
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
<!-- <a href="about.php"   ><font size= "5">About</font></a>  -->                              <!--      -->
<a href="post.php"><font size= "5">Post</font></a>   
<a href="pdocomp.php" class="active" ><font size= "5">Complaints</font></a>
</ul>
</div>
</div> 
</div>
 
<!--   END OF NAVBAR    -->
<br>
<header>
<h1><b><font color="white" size="8" class="fontstyle" >Registered Complaints</font></h1>
</header>
 <?php
        $conn = new mysqli('localhost','root','');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        mysqli_select_db($conn,"project");
        $sql = "SELECT * FROM complaint ";

        $result = $conn->query($sql);
    ?>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
          <div class="col-12 mx-auto">
                <div class="shadow-lg bg-white mt-4">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Complaint</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        $count=1;
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                print "<tr><th scope='row'>";
                                echo $count++; 
                                print "</th> <td>";    
                                echo $row["name"]; 
                                print "</td> <td>";
                                echo $row["phoneno"]; 
                                print "</td> <td>";
                                echo $row["email"]; 
                                print "</td> <td>";
                                echo $row["complaintname"]; 
                                print "</td> </tr>";
                            }
                          }  
                        else
                            echo '<tr><td colspan="8">NO Complaints Found</td></tr>';
                        ?>

</body>