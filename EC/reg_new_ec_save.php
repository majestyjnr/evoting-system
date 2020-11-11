<?php
include '../config.php';
session_start();



if(isset($_SESSION['admin_username'])){

    
}else{
    echo "<script>alert('You need to pass the authentication first');
    window.location.href='../EC/index.php';</script>";
}

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
          

         
        </div>

      </div> <!-- end of container -->
    </nav>


    
    <div class="container" style="padding-top:150px;">
    	<div class="row">
        <div class="col-sm-4"></div>
        <center>
    		<div class="col-sm-4" style="border:2px solid #0099ff;padding:30px;">
    			<?php


              if(isset($_POST['ecname']) && isset($_POST['password'])){


                $ecnumber = $_POST['ecname'];
                $password = $_POST['password'];
                @$confirmpassword = $_POST['confirmpassword'];

                if($password!=$confirmpassword){

                  $error="Password Mismatch!!";
                  
                  echo "<p class='alert alert-danger'><strong>$error</strong></p>";

                  echo "<p class='normalFont text-primary' ><strong>Passwords are not the same</strong> </p><br>";
                  echo "<p class='normalFont text-primary'><strong>Please try again!</strong> </p>";
                  echo "<br><a href='reg_new_ec.php' class='btn btn-primary'><span class='glyphicon glyphicon-refresh'></span> <strong>Try Again</strong></a>";
 
                }elseif($password == $confirmpassword){
                                   
                $query = "INSERT INTO tbl_admin (admin_username,admin_password) VALUES ('$ecnumber' , '$password')";
                $query_run = mysqli_query($link, $query);

                  if($query_run){

                
                    
                        $info="EC Registration Successful";
                        
                        echo "<img src='../images/success.png' width='70' height='70'>";
                        echo "<br><br><p class='alert alert-success'><strong>$info</strong></p>";
                        echo "<p class='normalFont text-primary' ><strong>The newly registered EC can now login.</strong> </p><br>";
                        echo "<br><a href='dashboard.php' class='btn btn-primary'><span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong></a>";


 

                }else{
                          

                  $error="Sorry !! Registration Failed";
                  
                  echo "<p class='alert alert-danger'><strong>$error</strong></p>";

                  echo "<p class='normalFont text-primary' ><strong>Error Registering EC</strong> </p><br>";
                  echo "<p class='normalFont text-primary'><strong>Please try again!</strong> </p>";
                  echo "<br><a href='reg_new_ec.php' class='btn btn-primary'><span class='glyphicon glyphicon-refresh'></span> <strong>Try Again</strong></a>";
 
              }
            }
                

}
?>


      
<br>
<br>
<br>
<center> <p>Powered By Majesty Corporation</p></center>

        </div>
</center>
    		<div class="col-sm-4"></div>
    	</div>
    </div>

    </div>
<br>
<br>
<br>
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