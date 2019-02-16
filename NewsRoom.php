<html>
<style>


body, html {
  height: 100%;
  margin: 0;
 
}
.slider-size {
height: 400px; /* slider height */
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

.welcome {
     font-family: 'Wendy One', sans-serif;	
	 font-size : 25px;
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
.opacity{
	opacity:0.8;
}
.opacity1{
	opacity:0.7; 
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
   
    <title>NewsRoom</title>

   
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
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
      <li><a href="#national">National</a></li>
	  
      <li><a href="#international">International</a></li>
	  <li><a href="#politics">Politics</a></li>
      <li><a href="#business">Business</a></li>
		<li><a href="#technology">Technology</a></li>
		<li><a href="#entertainment">Entertainment</a></li>
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
	 <span><a href="search.php"><span class="glyphicon glyphicon-search"></span> Search</a></span>
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
</br>
</div>
<div class="welcome">
<?php if (isset($_SESSION['usr_id'])) { ?>
                Welcome <span class="text-primary"><?php echo $_SESSION['usr_name']; ?> , </span>
                <?php } else { ?>
                Welcome to <span class="text-primary"> News-Room , </span>
                <?php } ?>

<div style="float:right" class= "welcome text-danger">
<?php
	mysqli_connect("localhost","root","", "rssfeed");
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
	echo $date->format('d-M-Y'); 
	?>
</div>
</br>
</div>
  



<div id="myCarousel" class="carousel slide home" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
	  <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img class="img-responsive" src="photos/terrorist.jpg" width="460" height="345" />
        <div class="carousel-caption">
          <h3>Terrorist Attack</h3>
          <p>There has been an another attack by terrorists in Uri.</br> How much more do we have to suffer?</p>
        </div> 
      </div>
	  
	  <div class="item">
        <img class="img-responsive" src="photos/modi.jpg" width="460" height="345" />
        <div class="carousel-caption">
          <h3>Nepal's Visit</h3>
          <p>Modi has been back from Nepal.</br>Can we count Nepal on our side?</p>
        </div>
      </div>
	  
	   <div class="item">
        <img class="img-responsive" src="photos/petrol.jpg" width="460" height="345" />
        <div class="carousel-caption">
          <h3>Petrol Price hike</h3>
          <p>Petrol prices hiked by Rs 3.38/litre, diesel up by Rs 2.67. Petrol will cost Rs 63.47 a litre in Delhi from midnight, up from Rs 60.09 a litre.</p>
        </div>
      </div>
	  

      <div class="item">
        <img class="img-responsive" src="photos/bull.jpg" width="460" height="345" />
        <div class="carousel-caption">
          <h3 >Market Crash</h3>
          <p >With closing of market today ,sensex took a huge dip of 446 points.</p>
        </div>
      </div>
	  
	   <div class="item">
        <img class="img-responsive" src="photos/hillary.jpg"   width="460" height="345" />
        <div class="carousel-caption">
          <h3 >American Elections</h3>
          <p >As dates of elections coming nearby the campaigning has also increased significantly</p>
        </div>
      </div>
    
      <div class="item">
        <img class="img-responsive" src="photos/virat.jpg" alt="Flower" width="460" height="345" />
        <div class="carousel-caption">
          <h3>Man of the match</h3>
          <p>Another ton of runs by Virat Kohli.</br>He made 121 runs of 78 balls</p>
        </div>
      </div>

      <div class="item">
        <img class="img-responsive" src="photos/salman.jpg" alt="Flower" width="460" height="345" />
        <div class="carousel-caption">
          <h3>Criticism</h3>
          <p>In many palces people have criticized Salman Khan's latest movie.</br>Will it affect its box office collection?</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div>
</br>
</div>

<div id="national">

<div class="bgimg-1"><div class="caption">
    <span class="border opacity">NATION</span>
  </div>
</div>


<div style="height:325px;background-color:#F1F1F1;font-size:36px">

<ul>
                                <?php 
								    $sqla="SELECT `headlines` FROM `news1` WHERE category='Nation'";
									$resulta = mysqli_query($conn, $sqla);
                                    while($row = mysqli_fetch_assoc( $resulta ))
                                     {
                                       echo "<li> <a href='nation.php'>".$row['headlines']."</li>";
									 }
								 ?>
								 </ul>


</div>
</div>
</a>

<div id="international">

<div class="bgimg-2"><div class="caption">
    <span class="border opacity1">INTERNATIONAL</span>
  </div>
        
  
</div>

<div style="height:325px;background-color:#F1F1F1;font-size:36px">
<ul>
                                  <?php 
								    $sqlc="SELECT `headlines` FROM news1 WHERE category='International'";
									$resultc = mysqli_query($conn, $sqlc);
									
									while($row=mysqli_fetch_assoc( $resultc ))
									{
									echo "<li> <a href='international.php'>".$row['headlines']." </li>";
								    
	                                }  							 
								 ?>       
</ul>
</div>
      

</div>

<div id="politics">

<div class="bgimg-3"><div class="caption">
    <span class="border opacity">POLITICS</span>
  </div>
</div>

<div style="height:325px;background-color:#F1F1F1;font-size:36px">
<ul>
                <?php 
								    $sqlf="SELECT `headlines` FROM news1 WHERE category='Politics'";
									$resultf = mysqli_query($conn, $sqlf);
									
									while($row = mysqli_fetch_assoc( $resultf ))
									{
								    echo "<li>".$row['headlines']."<a href='politics.php'> </li>";
								    
	                                } 
								 ?>                
</ul>    
</div>
</div>

<div id="business">

<div class="bgimg-4"><div class="caption">
    <span class="border opacity">BUSINESS</span>
  </div></div>
  

<div style="height:325px;background-color:#F1F1F1;font-size:36px">
<ul>
                                 <?php
                                    $sqlb ="SELECT `headlines` FROM news1 WHERE category='Business'";
									$resultb = mysqli_query($conn, $sqlb);
						            while($row = mysqli_fetch_assoc( $resultb ))
									{
									echo "<li>".$row['headlines']."<a href='business.php'> </li>";
								    
								    }
                                   ?>

									
</ul>								
</div>
</div>

<div id="technology">

<div class="bgimg-5"><div class="caption">
    <span class="border opacity">TECHNOLOGY</span>
  </div></div>

<div style="height:325px;background-color:#F1F1F1;font-size:36px">
<ul>
                               <?php 
								    $sqlg="SELECT `headlines` FROM news1 WHERE category='Technology'";
									$resultg= mysqli_query($conn, $sqlg);
									
									while($row = mysqli_fetch_assoc( $resultg ))
									{
									echo "<li>".$row['headlines']."<a href='technology.php'> </li>";
								     
									}
								 ?>
</ul>
</div>
</div>

<div id="entertainment">

<div class="bgimg-6">
<div class="caption">
    <span class="border opacity" >ENTERTAINMENT</span>
  </div></div>

<div style="height:325px;background-color:#F1F1F1;font-size:36px">
<ul>
                                <?php 
								    $sqle="SELECT `headlines` FROM news1 WHERE category='Entertainment'";
									$resulte = mysqli_query($conn, $sqle);
									
									while($row = mysqli_fetch_assoc( $resulte ))
									{
									echo "<li> <a href='entertainment.php'>".$row['headlines']."</li>";
								    
								    }
								 ?>
								 </ul>
      
</div>
</div>

<div id="sports">

<div class="bgimg-7"><div class="caption">
    <span class="border opacity">SPORTS</span>
  </div>
  </div>
  

<div style="height:325px;background-color:#F1F1F1;font-size:36px">
<ul>
                                <?php
                                    $sqld="SELECT `headlines` FROM news1 WHERE category='Sports'";
									$resultd = mysqli_query($conn, $sqld);
																	
									while($row = mysqli_fetch_assoc( $resultd ))
									{
									echo "<li>".$row['headlines']."<a href='sports.php'> </li>";
								    
							        }	 
								 ?>
 </ul>
	   
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