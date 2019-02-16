<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
 p {
font-family:"Times New Roman"; 
 }  

h2 {
font-family:" Arial";
}

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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>About Us</title>
 
   
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
  <body>
  <div class="navbar navbar-inverse navbar-fixed-top">
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
      <li><a href="nation.php">National</a></li>
      <li><a href="international.php">International</a></li>
	  <li><a href="politics.php">Politics</a></li>
      <li><a href="business.php">Business</a></li>
		<li><a href="technology.php">Technology</a></li>
		<li><a href="entertainment.php">Entertainment</a></li>
		<li><a href="sports.php">Sports</a></li>
	  
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

   
   
  </div>
  </div>
  
  
  <div class="text-center jumbotron"> 
  
  <h1 class="text-primary"> NEWS ROOM </h1>
  <hr/>
    
  
  <h2> Our mission</h2>
   <p>To enrich people's lives with programmes and services that inform, educate and entertain.</p>

  <h2> Our vision</h2>
  <p> To be the most creative organisation in the world.</p>
  
  <h2> Our values</h2>

  <p> Trust is the foundation of the NewsRoom: We are independent, impartial and honest.<br>
   Audiences are at the heart of everything we do.<br>
   We take pride in delivering quality and value for money.<br>
   Creativity is the lifeblood of our organisation.<br>
   We respect each other and celebrate our diversity so that everyone can give their best.<br>
   We are one NewsRoom: Great things happen when we work together.<br><br><br>
  
  NewsRoom is an international multimedia broadcaster, delivering a wide range of language and regional services via wireless handheld devices.<br> 
  To help deliver its commercial activity,NewsRoom has offices around the world, with staff who have local language skills who can better understand what local audiences and clients are looking for, and who act as global ambassadors for the NewsRoom.<br>
  Subtitles provide a transcript of the television soundtrack, helping deaf and hard-of-hearing viewers to follow programmes.<br> 
  You can find schedules of NewsRoom programmes by using our Programmes website and digital text pages.<br> 
  We are proud of our work on access services and are always looking to improve and develop our offering. Here is the latest information on what we are working on. From time to time, we also post consultations here seeking your views on how services are working in practice and what improvements you would like to see.<br>
 </p>
 
 </div>
       
  <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge fht">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
  Powered by <a href="newsroom.html target="_blank">NewsRoom.in</a> &nbsp&nbsp&nbspCpoyrights Reserved ©
  </p>
</footer>     
 
                       
       
 
 </div>
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