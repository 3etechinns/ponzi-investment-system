<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

require_once('./Connections/MMM.php');
?>


<?

$email = $_SESSION['MM_Username'];
mysql_select_db($database_MMM, $MMM);
$query = "SELECT * FROM register WHERE Email = '$email' " or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");
//mysql_select_db('register');

$sql = mysql_query($query) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

 while($row = mysql_fetch_array($sql)) {
	 	 
	 $id  = $row['id']; 	
	 $Fullnames = $row['Fullnames'];  	
	 $Username = $row['Username'];  	
	 $Phone = $row['Phone'];  	
	 $Email = $row['Email'];  	
	 $Password = $row['Password'];  	
	 $Bank = $row['Bank'];  	
	 $Account = $row['Account'];  	
	 $Matched = $row['Matched'];  	
	 $ReceiveMoney = $row['ReceiveMoney'];  	
	 $Package =  $row['Package']; 
	 $Status =  $row['Status']; 
	 
	      //for ($j = 0; $j<=10; $j++)
		 //echo "<script> alert('$row[$j]')</script>";
	     //echo "<script> alert(' Your package is: $Package')</script>";
 }
 
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Matrix Fund</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

   

</head>

<body id="page-top">
		
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">matrixfund</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a class="page-scroll" href="dashboard.php">Dashborad</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="./apply.php">Packages</a>
                    </li>
						<li>
                        <a class="page-scroll" href="profile.php"><?php echo $Fullnames; ?></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
					<li>
                        <a href="logout.php" class="page-scroll" >Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?php echo $Fullnames; ?></h1>
				<h3 id="homeHeading">DASHBOARD</h3>
                <hr>
                <p>Your way to Financial Freedom</p>
                
                </div></div>
                </header>
	

  <?php 
				   if($Package == "")
				   {
					 include("my_packages.php");  
				   }
				   else
				   if($Package != "")
				   {
				   echo "&nbsp;";  
				   }
				  
?>
    
	<section class="bg-primary" id="about" style="background-color:grey;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
				<h4>Note: You can only recycle your account when you have made 
payment and receive payment for a paticular package.Do not recycle your 
account when u delete a member and have not being re-merged to get your 
payment</h4><br>
			<form method="POST" action="package.php">
						<input name="memberid" value="1795" type="hidden">
							<h4>&nbsp;</h4>						</form>
                   
                    
                </div>
            </div>
        </div>
    </section>
	<div id="apply">
	</div>


    
    <section id="contact">
       <?php include('contact_section.php'); ?>
    </section>
	
	
<aside class="bg-dark" >
        <div class="container text-center">
            <div class="call-to-action">
                <h4>&copy; Copyright 2017 matrixfund<h4>
          </div>
        </div>
    </aside>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
<script src="js/registration.js"></script>

</body>

</html>
