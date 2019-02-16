
<?php

session_start();

if(isset($_SESSION['usr_id'])!="") {
header("Location: NewsRoom.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $query="select * from reg where username ='$username' and password='$password'";
$result=mysqli_query($con,$query);

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['username'];
        $_SESSION['usr_name'] = $row['username'];
        header("Location: NewsRoom.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
?>

<html lang="en">
<style>
.overlay{
  position:fixed;
   background:url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/footer_lodyas.png);
  -webkit-animation:100s scroll infinite linear;
  -moz-animation:100s scroll infinite linear;
  -o-animation:100s scroll infinite linear;
  -ms-animation:100s scroll infinite linear;
  animation:100s scroll infinite linear;
  top:0;
  left:0;
  width:100%;
 height:100%;
}



@-moz-keyframes scroll{
  100%{
    background-position:0px -3000px;
  }
}

@-o-keyframes scroll{
  100%{
    background-position:0px -3000px;
  }
}

@-ms-keyframes scroll{
  100%{
    background-position:0px -3000px;
  }
}

@keyframes scroll{
  100%{
    background-position:0px -3000px;
  }
}

</style>
<head>
  <title>login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <title> Login page </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
<div class="overlay">
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="NewsRoom.php"><p class="heading text-primary">NewsRoom</p></a>
        </div>
        <!-- menu items -->
        <div class="collapse navbar-collapse" id="navbar1">
            <form class="navbar-form navbar-right">
                <button class="btn btn-success"><span class="glyphicon glyphicon-user"></span><a href="register.php" style="color:white;" >SignUp</a></button>
                <button class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span><a href="loginnew.php" style="color:white;" >Login</a></button>
				&nbsp;&nbsp;&nbsp;            
	       </form>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <fieldset>
                    <legend>Login</legend>
                    
                    <div class="form-group">
                        <label for="name">User-Name</label>
                        <input type="text" name="username" placeholder="User-Name" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Your Password" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <div class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></div>
        </div>
    </div>
    <div class="row text-primary">
        <div class="col-md-4 col-md-offset-4 text-center">    
        New User? <a href="register.php">Sign Up Here</a>
        </div>
    </div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>