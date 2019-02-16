<?php
session_start();
include_once 'connection.php';
?>
<html>

<style>
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
	color: white;
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

.margin{
	margin-top: 40px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  
  
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.padt{
	padding-top:40px;
}  

</style>


  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Lukáš Tomek (info@lukastomek.cz)" />
    <meta name="copyright" content="2008 LT WebDevelopment (www.lukastomek.cz)" />
    <meta name="description" content=""  />
    <meta name="keywords" content="" />
    <meta name="language" content="cs" />
    <title></title>
    <!--<link rel="stylesheet" type="text/css" href="./css/default.css" media="screen" />
    [if IE 6]><link rel="stylesheet" type="text/css" href="css/msie.css" /><![endif]
    <link rel="stylesheet" type="text/css" href="./css/print.css" media="print" />
    <link rel="shortcut icon" href="" />-->
	
	<link rel="stylesheet" type="text/css" >
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
  <body>
  
  <div id="main">

<div class="navbar navbar-inverse navbar-fixed-top">
  
  
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
			
      <a class="navbar-brand" href="NewsRoom.php"><p class="heading text-primary">Mobile Store</p></a>
    </div>
	<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
	  <li><a href="#"> <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> </a><li>
	  
      <li ><a href="#" class="active"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                   	            
		  <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="about.php">About Us</a></li>		  
	  
    </ul>
 <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['user']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
      
<form class="navbar-form navbar-right" style="padding-left:30px">	  
	<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-user"></span><a href="signup1.php" style="color:white;" > Sign Up</a></button>
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span><a href="login.php" style="color:white;" >  Login</a></button>
</form>	
                <?php } ?>
            </ul>
        </div>
	
	</div>
	</div>
	
	
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" style="color:white" onclick="closeNav()">&times;&times;&times;&times;</a>   
  <a href="#">About Us</a>
    <a href="members.php">Members</a>
   <div class="dropdown">
  <a href="#">Category</a>
  <div class="dropdown-content">
     <a href="sony.php">Sony</a>
  <a href="Samsung.php">Samsung</a>
  <a href="Nokia.php">Nokia</a>
  <a href="Motorola.php">Motorola</a>
  </div>
  </div>

</div>

<!--carousel-->
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
    <div class="carousel-inner padt" role="listbox">

      <div class="item">
        <img class="img-responsive" src="images/s7-edge.jpg" width="460" height="345" />
        <div class="carousel-caption">
          <h3></h3>
          <p>There has been an another attack by terrorists in Uri.</br> How much more do we have to suffer?</p>
        </div>
      </div>
	  
	  <div class="item active">
        <img class="img-responsive" src="images/modi.jpeg" width="460" height="345" />
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





    <div class="margin">
        <h1 class="text-center">My Mobile Store</h1>
		<h2 id="searchForm"><font size="+2" color="#006633"><a href="logout.php">
	
	
<div>
<div class="item first" align="center">
		  <div class="in">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="550" height="370">
              <param name="movie" value="flash/environment.swf" />
              <param name="quality" value="high" />
              <embed src="flash/environment.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="550" height="370"></embed>
            </object>
			</div>
          </div>
</br>
</br>

</br>
</br>

</div>
	
	<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge fht">
  <a href="https://www.facebook.com/login/"><i class="fa fa-facebook-official"></i></a>
  <a href="https://in.pinterest.com/login/"><i class="fa fa-pinterest-p"></i></a>
  <a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
  <a href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
  <a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin"></i></a>
  <div>
  <p class="w3-medium">
  Powered by <a href="NewsRoom.php">MobileStore.in</a> &nbsp;&nbsp;&nbsp;Copyrights Reserved ©
  </p>
  </div>
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