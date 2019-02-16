<?php
    include('head.php');
    $servername="localhost";
	$username="root";
	$password="";
    $conn = @mysqli_connect($servername, $username, $password, "rssfeed");
	$head = $_GET['headlines']; 
	$cat = $_GET['category'];
	$file = $_GET['file'];
	$news = $_GET['news'];
	$error = false;
	
	
	if(!isset($head) || trim($head) == '')
{
   $error = true;
   echo "<h2 class='text-danger'>You did not fill out the headline!</h2>";
   echo "<br>";
}

	if(!isset($news) || trim($news) == '')
{
   $error = true;
   echo "<h2 class='text-danger'>You did not fill the news field!</h2><br>";
   
}
  
   if(!isset($file) || trim($file) == '')
{
   $error = true;
   echo "<h2 class='text-danger'>You did not select a picture!</h2><br>";
}


if(!$error)
{
	$sql="INSERT INTO `news1`VALUES('$head','$news','$file','$cat')";	

	if (mysqli_query($conn,$sql)) 
	{
		echo "Database updated Sucessfully<br>";
	}
	else {
		die("Error upadating Database: " . mysqli_error($conn));
	}
}

mysqli_close($conn);
	?>