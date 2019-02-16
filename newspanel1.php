<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>newsPanel</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
	<h1 class="text-center text-danger">Admin Panel For Bulletin News</h1>
	
	</br>
	</br>
	<div class="text-primary">
	<?php
	mysqli_connect("localhost","root","", "rssfeed");
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
	echo $date->format('d-m-Y'); 
	?>
	</div>
	</br>
	<form action="newspanel.php" method="get" enctype="multipart/form-data">
		Enter the headlines here : </br><textarea rows="3" cols="40" name="headlines" id="headlines"></textarea></br></br>
		Enter the NEWS here : </br><textarea rows="4" cols="50" name="news" id="news"></textarea></br></br>
		Category : 
		<select name="category">
			<option value="">Select Category</option>
			<option value="Nation">Nation</option>
			<option value="Business">Business</option>
			<option value="International">Internationl</option>
			<option value="Sports">Sports</option>
			<option value="Entertainment">Entertainment</option>
			<option value="Technology">Technology</option>
			<option value="Politics">Politics</option>	
		</select>
		</br>
        </br>
		Select image to upload: <input type="file" name="file" id="file">
		   </br>
		<div id="run"><input type="submit"></div>
	</form>
	</div>	
	
	</body>
</html>
