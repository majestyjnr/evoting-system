<?php
include '../config.php';
session_start();



if(isset($_SESSION['admin_username'])){

    
}else{
    echo "<script>alert('You need to pass the authentication first');
    window.location.href='../EC/index.php';</script>";
}


// / Specify the query to execute
                $query = "SELECT * FROM voters";

                // Execute query
                $query_run = mysqli_query($link, $query);

                $records = mysqli_num_rows($query_run);

                $_SERVER['amount'] = $records;

$_SERVER['amount'] = $records;



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>eVoting System</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="../js/jquery.min.js"></script> -->
    <script src="../js/jquery-1.9.o.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .site-footer {
      text-align: center;
      padding: 30px 0; 
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
          <a href="../index.html" class="navbar-brand headerFont text-lg"><strong>eVoting System</strong></a>
           
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
            <!-- 
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li>
          -->
         
          </ul>
          

          <span class="normalFont"><a href="dashboard.php" class="btn btn-info navbar-right navbar-btn" style="float: right"><strong>Back</strong></a></span>
        </div>

      </div> <!-- end of container -->
    </nav>

    

    </center><div class="col-sm-4" id ="auto" style=" margin-top: 10px; margin-left: 150px; color: #0099ff; padding: 50px; font-size: 250px;"> <?php  echo ($_SERVER['amount'])?></center>

    <center><h1 style ="color: black;">Successful Votes</h1></center>

<!-- <div class="container" style="padding-top:20px;">
    <div class="row">
        <div class="col-sm-4"></div>
        <center>
        
        </div>
    </div> 
</div> -->
    <!-- <footer class="site-footer">
        <p>Copyright &copy; 2020 Faculty of Science. Powered by Majesty Corporation. All rights reserved</p>

        <div class="social-links">
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
        </div>
      </footer> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-1.9.0.min.js"></script>


    <script type="text/javascript">

    $(document).ready(function(){
        $('#auto').load('records.php') 
        refresh();
    });

    function refresh(){
        setTimeout( function(){
            $('#auto').fadeOut('slow').load('records.php').fadeIn('slow');
            refresh();
        }, 1000); 
    }
    </script>


  </body>
</html>
