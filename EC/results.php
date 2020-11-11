<?php
include '../config.php';
session_start();

if(isset($_SESSION['admin_username'])){

    
}else{
    echo "<script>alert('You need to pass the authentication first');
    window.location.href='../EC/index.php';</script>";
}


@$ecname = $_SESSION['admin_username'];


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Faculty of Science eVoting System</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>

    body{
      margin:0px;
      padding:0px;
    }

  .site-footer {
  text-align: center;
  padding: 30px 0; 
  }

      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }

      a {
        color: #FFFFFF;
        text-decoration: none;
      }

      a:link {
        color: #FFFFFF;
        text-decoration: none;
      }

      /* visited link */
      a:visited {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* mouse over link */
      a:hover {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* selected link */
      a:active {
          color: #FFFFFF;
          text-decoration: none;
      }

      ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          
          <a href="index.html" class="navbar-brand headerFont text-lg"><strong>eVoting System</strong></a>
        </div>

        <span class="normalFont"><a href="dashboard.php" class="btn btn-info navbar-right navbar-btn "><strong> Back </strong></a></span>
      </div> <!-- end of container -->
    </nav>
    </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="jumbotron text-center text-block" style="padding-top:170px;">
              <img src="images/Vote.png" alt="" >
              <!-- <center><img src="../logo.png" style="width: 250px"></center> -->
              
              <h1 class="specialHead">Election Results</h1>

                  <br><br>
                  
                  <a href="results_presidential.php" class="btn btn-primary btn-md specialHead"> <span class="glyphicon glyphicon-tag"></span> Presidential</a>
                  &nbsp;&nbsp;
                  <a href="results_secretary.php" class="btn btn-info btn-md specialHead"> <span class="glyphicon glyphicon-tag"></span>&nbsp;&nbsp; Secretary &nbsp;&nbsp;</a>
                  &nbsp;&nbsp;
                  <a href="results_finsecretary.php" class="btn btn-primary btn-md specialHead"> <span class="glyphicon glyphicon-tag"></span> &nbsp;&nbsp; Financial Secretary &nbsp;&nbsp; </a>
                  &nbsp;&nbsp;
                  <a href="results_treasurer.php" class="btn btn-danger btn-md specialHead"> <span class="glyphicon glyphicon-tag"></span> Treasurer </a>
                  &nbsp;&nbsp;
                  <a href="results_organizationalsec.php" class="btn btn-info btn-md specialHead"> <span class="glyphicon glyphicon-tag"></span> Organizational Sec.</a>
                  &nbsp;&nbsp;
                  <a href="results_pro.php" class="btn btn-danger btn-md specialHead"> <span class="glyphicon glyphicon-tag"></span>&nbsp;&nbsp; Public Rel. Officer &nbsp;&nbsp;</a>
                  &nbsp;&nbsp;
                  <a href="results_welfare_coordinator.php" class="btn btn-warning btn-md specialHead"> <span class="glyphicon glyphicon-tag"></span>&nbsp;&nbsp; Welfare Coordinator &nbsp;&nbsp;</a>
            </div>
          </div>
        </div>
      </div>



      <footer class="site-footer">
        <p>Copyright &copy; 2020 Faculty of Science. Powered by Majesty Corporation. All rights reserved</p>

        <div class="social-links">
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
        </div>
      </footer>
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
