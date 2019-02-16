<html>

<style>

body, html {
  height: 100%;
  margin: 0;
 
}
.slider-size {
height: 400px; /* This is your slider height */
}
.carousel-inner > .item > img ,

  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.opacity{
	opacity:0.8;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  
.bgimg-1, .bgimg-2, .bgimg-3 , .bgimg-4 , .bgimg-5 , .bgimg-6 , .bgimg-7{
  position: relative;
  opacity: 0.70;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

.bgimg-1 {
  background-image: url("photos/nation.jpg");
  min-height: 100%;
}
.bgimg-2 {
  background-image: url("photos/interna.jpg");
  min-height: 100%;
}
.bgimg-3 {
  background-image: url("photos/modi2.jpg");
  min-height: 100%;
}

.bgimg-4 {
  background-image: url("photos/buss.jpg");
  min-height: 100%;
}

.bgimg-5 {
  background-image: url("photos/technology.jpg");
  min-height: 100%;
}

.bgimg-6 {
  background-image: url("photos/popcorn.jpg");
  min-height: 100%;
}
.bgimg-7 {
  background-image: url("photos/sports3.jpg");
  min-height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  border-radius:12px;
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

.fht {
height:175px;
}

</style>

<head>

<link rel="stylesheet" type="text/css" href="index.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Sports</title>

   
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
	
   
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar-collapse">
     <?php 
		$servername="localhost";
		$username="root";
		$password="";

		$conn = @mysqli_connect($servername, $username, $password, "rssfeed");

	 ?>
	 
	 <?php
	    session_start();
        include_once 'dbconnect.php';
     ?>

<div id="main">

<div class="navbar navbar-inverse navbar-fixed-top">
  
  
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
			
      <a class="navbar-brand" href="NewsRoom.php"><p class="heading text-primary">NewsRoom</p></a>
    </div>
	<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
	  <li><a href="#"> <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> </a><li>
	  
      <li ><a href="NewsRoom.php" class="active"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="#nation.php">National</a></li>
	  
      <li><a href="international.php">International</a></li>
	  <li><a href="politics.php">Politics</a></li>
      <li><a href="business.php">Business</a></li>
		<li><a href="technology.php">Technology</a></li>
		<li><a href="entertainment.php">Entertainment</a></li>
		<li><a href="#sports">Sports</a></li>
	  
    </ul>
	
	<form class="navbar-form navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                
                <button class="btn btn-primary"><a href="logout.php" style="color:white">Log Out</a></button>
                <?php } else { ?>
                <button class="btn btn-success"><span class="glyphicon glyphicon-user"></span><a href="register.php" style="color:white;" >SignUp</a></button>
                <button class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span><a href="loginnew.php" style="color:white;" >Login</a></button>
				<?php } ?>
                &nbsp;&nbsp;&nbsp;            
	</form>
	</div>
	</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="aboutUs.php">About Us</a>
  <a href="members.php">Members</a>
  <a href="map.php">Contact Us</a>
</div>


<div>
</br>
</div>

<div id="sports">

<div class="bgimg-7"><div class="caption">
    <span class="border opacity">SPORTS</span>
  </div>
  </div>
  

<div style="height:2000px;background-color:#F1F1F1;font-size:36px">
                                <?php
                                    $sqld="SELECT * FROM news1 WHERE category='Sports'";
									$resultd = mysqli_query($conn, $sqld);
																	
									while($row = mysqli_fetch_assoc( $resultd ))
									{
                                    echo "<h2 class='text-primary'><u>".$row['headlines']."</u></h2>";	
									echo $row['news'];
									echo "<br>";
									echo "<img style='width:350px; height:250px;' src='uploads/".$row['file']."'>";;
									echo "<br>";
									echo "<br>";
							        }	 
								 ?>
	   
</div>
</div>


<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge fht">
  <a href="https://www.facebook.com/login/"><i class="fa fa-facebook-official"></i></a>
  <a href="https://in.pinterest.com/login/"><i class="fa fa-pinterest-p"></i></a>
  <a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
  <a href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
  <a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin"></i></a>
  <div>
  <p class="w3-medium">
  Powered by <a href="NewsRoom.php">NewsRoom.in</a> &nbsp;&nbsp;&nbsp;Copyrights Reserved ©
  </p>
  </div>
</footer>

</body>
</html>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>