<?php 
	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/[A-Z  | a-z]+/", $_POST['name'])){ 
	  $name=$_POST['name']; 
	  //connect  to the database 
	  $conn=mysqli_connect  ("localhost","root","","rssfeed") or die ('I cannot connect to the database  because: ' . mysql_error()); 
      //-select  the database to use 
	  
	  //-query  the database table 
	  $sql="SELECT headlines,news FROM `news1` WHERE  headlines LIKE '%" . $name . "%' OR news LIKE '%" . $name  ."%'"; 
	  $resulta = mysqli_query($conn, $sql);
	  while($row = mysqli_fetch_assoc( $resulta ))
	  {
		   echo "<h2 class='text-primary'><u>".$row['headlines']."</u></h2>";
	  }  
  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
	  } 
	?> 