<?php
include '../config.php';
session_start();

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

<script type ='text/javascript'>
    function load(){
        
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }

        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                document.getElementById('adiv').innerHTML = xmlhttp.responseText;
            }
        }

        xmlhttp.open('GET', 'include.inc.php', true);
        xmlhttp.send();
    }
</script>
 
  </head>

  <body>
  <audio src ="complete.mp3" id ="my_audio"  autoplay ="autoplay"></audio>
    <script type= 'text/javascript'>
      window.onload = function(){
        document.getElementById('my_audio').play();
      }
    </script>
  

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

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!-- 
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li>
        	-->
          </ul>
          

          <!-- <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button> -->
        </div>

      </div> <!-- end of container -->
    </nav>

    
    <div class="container" style="padding-top:150px;">
    	<div class="row">

    		<div class="col-sm-4"></div>
    		<div class="col-sm-4 text-center" style="border:2px solid #0099ff;padding:50px;">
    			
        <?php
 


    if(isset($_POST['savevote'])){

      @$studentname = $_SESSION['student_name'];
      @$indexnumber = $_SESSION['index_number'];
      @$president = $_SESSION['presidential_aspirantname'];
      @$gensecretary = $_SESSION['gensecretary_aspirantname'];
      @$finsecretary = $_SESSION['finsecretary_aspirantname'];
      @$treasurer = $_SESSION['treasurer_aspirantname'];
      @$organizing_secretary = $_SESSION['organizing_secretary_aspirantname'];
      @$pro = $_SESSION['pro_aspirantname'];
      @$welfare_cordinator = $_SESSION['welfare_cordinator_aspirantname'];


      $query = "INSERT INTO voters (index_number,student_name,presidential,gen_secretary,financial_secretary,Treasurer,organizing_secretary,pro,welfare_coordinator) VALUES ('$indexnumber' , '$studentname' , '$president' , '$gensecretary' , '$finsecretary' , '$treasurer', '$organizing_secretary',  '$pro' , '$welfare_cordinator' ) ";
      $query_run = mysqli_query ($link, $query);


                // Specify the query to execute
                $query = "SELECT * FROM voters";

                // Execute query
                $query_run = mysqli_query($link, $query);

                $records = mysqli_num_rows($query_run);

                $_SERVER['amount'] = $records;


      
       if ($query_run) {
        echo "<img src='../images/success.png' width='70' height='70'>";
        echo "<h3 class='text-info specialHead text-center'><strong> YOU'VE  SUCCESSFULLY   VOTED.</strong></h3><br>";

        
                // Specify the query to execute
                $query = "SELECT * FROM voters";

                // Execute query
                $query_run = mysqli_query($link, $query);

                $records = mysqli_num_rows($query_run);

                $_SERVER['amount'] = $records;


        echo "<a href='authentication.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Click Here</strong> </a>";
          // echo "<script>window.location.href='';</script>";
      }
      else {
          "<script> alert('Error encounted...Please try again');
          window.location.href='authentication.php';
          </script>";
      }
  
  

    }

?>
    	
<br>
<br>
<br>
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


