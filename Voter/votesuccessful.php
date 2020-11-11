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
    <link href="../css/sweetalert2.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

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
          

          <span class="normalFont"><a href="<?php echo $http_referer ?>" class="btn btn-info navbar-right navbar-btn" style="float: right"><strong> Back </strong></a></span>
        </div>

      </div> <!-- end of container -->
    </nav>



    <div class="container" style="padding-top:100px;">
    <center>
    <div class="" style="border:2px solid #0099ff; width: 200px; background-color: #0099ff; border-radius: 10px; color: white; margin-bottom: 20px; padding: 10px"><h3>Your Vote</h3></div>
    </center>

    	<div class="row">
        <div class="col-sm-4"></div>
       
        

        
    		<div class="col-sm-4" style="border:2px solid #0099ff;padding:20px;">
            


 <?php
 
 @$studentname = $_SESSION['student_name'];
 @$indexnumber = $_SESSION['index_number'];
 @$president = $_SESSION['presidential_aspirantname'];
 @$gensecretary = $_SESSION['gensecretary_aspirantname'];
 @$finsecretary = $_SESSION['finsecretary_aspirantname'];
 @$treasurer = $_SESSION['treasurer_aspirantname'];
 @$organizing_secretary = $_SESSION['organizing_secretary_aspirantname'];
 @$pro = $_SESSION['pro_aspirantname'];
 @$welfare_cordinator = $_SESSION['welfare_cordinator_aspirantname'];


                echo "President:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style ='float: right; color: #0099ff;'><b>".$president."</b></span><br><br>";
                echo "General Secretary:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style ='float: right; color: #0099ff;'><b>".$gensecretary."</span></b><br><br>";
                echo "Finacial Secretary:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style ='float: right; color: #0099ff;'><b>".$finsecretary."</span></b><br><br>";
                echo "Treasurer:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style ='float: right; color: #0099ff;'><b>".$treasurer."</span></b><br><br>";
                echo "Org.Secretary:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style ='float: right; color: #0099ff;'><b>".$organizing_secretary."</span></b><br><br>";
                echo "Public Relations Officer:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style ='float: right; color: #0099ff;'><b>".$pro."</span></b><br><br>";
                echo "Welfare Cordinator:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style ='float: right; color: #0099ff;'><b>".$welfare_cordinator."</span></b><br><br>";

?>

<center>
<!--  -->
    <form action ="save.php" method="POST">
    <button type ="submit" type="button"  class="btn btn-block span btn-primary" id ="sweetalert" name ="savevote" style=" width: 200px; "><span class="glyphicon glyphicon-floppy-saved"></span>   Click To Finish</button>
    </form>
</center>


<br>
<center> <p>Powered By Majesty Corporation</p></center>

        </div>

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

      
      <script src="../js/sweetalert2.all.min.js"></script>


      <script>
  

          $(document).ready(function(){
              $("#sweetalert").click(sweetalertclicked);
            });
                
            function sweetalertclicked(){
              Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Your Vote was successful',
              showConfirmButton: false,
              timer: 2500
              })
          }

          
      </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
  </body>
</html>