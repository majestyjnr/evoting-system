<?php
include '../config.php';
session_start();

@$http_referer = $_SERVER['HTTP_REFERER']; 

if(isset($_SESSION['index_number'])){

    
}else{
    echo "<script>alert('You need to pass the authentication first');
    window.location.href='../Voter/authentication.php';</script>";
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

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .site-footer {
      text-align: center;
      padding: 30px 0; 
      }

      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }

      .floating-box {
    display: inline-block;
    width: 250px;
    height: 350px;
    padding: 30px;
    padding-top: 20px;
    /* border: 3px solid #73AD21;   */
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
          <a href="finsecretary.php" class="navbar-brand headerFont text-lg"><strong>eVoting System</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
           
          </ul>
          
          <span class="normalFont"><a href="<?php echo $http_referer ?>" class="btn btn-info navbar-right navbar-btn" style="float: right"><strong> Back </strong></a></span>
          <!-- <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button> -->
        </div>

      </div> <!-- end of container -->
    </nav>



<?php
    
    @$studentname = $_SESSION['student_name'];
    @$indexnumber = $_SESSION['index_number'];
    @$president = $_SESSION['presidential_aspirantname'];
    @$gensecretary = $_SESSION['gensecretary_aspirantname'];
    @$finsecretary = $_SESSION['finsecretary_aspirantname'];
    @$treasurer = $_SESSION['treasurer_aspirantname'];
    @$organizing_secretary = $_SESSION['organizing_secretary_aspirantname'];
    @$pro = $_SESSION['pro_aspirantname'];

    
    
    
    
    if(isset($_POST['joseph_hagan'])){
    
        $pro = $_POST['joseph_hagan'];
        $pro = 'Joseph Hagan';
        
        $_SESSION['pro_aspirantname'] = $pro;
        
        @$pro = $_SESSION['pro_aspirantname'];
      
      
          header("location:welfare_cordinator.php");
     
     
     }elseif(isset($_POST['sena_sabina'])){
     
        $pro = $_POST['sena_sabina'];
        $pro = 'Sena Sabina';
      
          $_SESSION['pro_aspirantname'] = $pro;
        
          @$pro = $_SESSION['pro_aspirantname'];
     
       header("location:welfare_cordinator.php");
     
     
     }elseif(isset($_POST['diana_agyei'])){
     
       $pro = $_POST['diana_agyei'];
       $pro = 'Diana Agyei';
      
      $_SESSION['pro_aspirantname'] = $pro;
      
         @$pro = $_SESSION['pro_aspirantname'];
     
       header("location:welfare_cordinator.php");
     
     
     }elseif(isset($_POST['skip'])){
     
        $pro = $_POST['skip'];
        $pro = 'Skipped';
        
        $_SESSION['pro_aspirantname'] = $pro;
        
         @$pro = $_SESSION['pro_aspirantname'];
      
        header("location:welfare_cordinator.php");
     
     }
     
    
    
    
    
?>

    <!-- Copy Data from Database -->

  

    <div class="container" style="padding:70px;">
      <center> <h2>Public Relations Officer</h2> </center>

      <center>
      <div class="col-sm-12" style="border:2px solid #0099ff; padding: 20px">
        <div class ="floating-box">
          <img src="../pictures/hagan.jpg" class="img img-thumbnail" style="width:200px;" alt="">
            <h4 class="normalFont text-center"><?php echo 'Joseph Hagan'?></h4>
            <hr>

          <form action="pro.php" method ="POST">
              <button type="submit" class="btn btn-block span btn-primary " name="joseph_hagan" style="width:150px; "><span class="glyphicon glyphicon-user"></span> Vote</button>
          </form>
        </div>



        <div class ="floating-box">
          <img src="../pictures/sena.jpg" class="img img-thumbnail" style="width:200px;" alt="">
          <h4 class="normalFont text-center"><?php echo 'Sena Sabina'?></h4>

            <hr>
          
            <form  action="pro.php" method ="POST">
                <button type="submit" class="btn btn-block span btn-primary " name="sena_sabina" style="width:150px; "><span class="glyphicon glyphicon-user"></span> Vote</button>
            </form>
        </div>


        <div class ="floating-box">
          <img src="../pictures/pro.jpg" class="img img-thumbnail" style="width:200px;height:200px;" alt="">
          <h4 class="normalFont text-center"><?php echo 'Diana Agyei'?></h4>
        <hr>

        <form  action="pro.php" method ="POST">
          <button type="submit" class="btn btn-block span btn-primary " name="diana_agyei"  style="width:150px; "><span class="glyphicon glyphicon-user"></span> Vote</button>
        </form>

        </div>
<!-- 
<div class="col-sm-3">
<img src="images/pk.jpg" class="img img-thumbnail" style="width:200px;height:200px;" alt="">
<h4 class="normalFont text-center"><?php echo 'Victoria Arthur'?></h4>
<hr>

<form  action="pro.php" method ="POST">
<button type="submit" class="btn btn-block span btn-primary "><span class="glyphicon glyphicon-user"></span> Vote</button>
</form>

</div> -->
    </div>
</center>

</div>
<center>
  <form  action="pro.php" method ="POST">
    <button type="submit" class="btn btn-block span btn-primary " name ="skip" style=" width: 200px; background-color: #e81123; border-color: #e81123;"><span class="glyphicon glyphicon-circle-arrow-right"></span> Skip</button>
  </form>
</center>

    
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