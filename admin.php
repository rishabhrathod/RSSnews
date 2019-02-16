<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panel</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<h1 class="text-center text-danger">Admin Panel For Bulletin News</h1>
	<div class="text-center">
	</br>
	</br>
	<?php
	mysqli_connect("localhost","root","", "rssfeed");
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
	echo $date->format('d-M-y'); 
	?>
	<form action="panel.php" method="get">
		Enter the headlines here : </br><textarea rows="3" cols="40" name="news" id="news"></textarea></br></br>
		Category : 
		<select name="category">
			<option value="">Select Category</option>
			<option value="Nation">National</option>
			<option value="Politics">Politics</option>
			<option value="International">International</option>
			<option value="Business">Business</option>
			<option value="Technology">Technology</option>
			<option value="Entertainment">Entertainment</option>
			<option value="Sports">Sports</option>	
		</select></br>
		</br>
		<input type="submit">
	</form>
	</div>
</body>
</html>
