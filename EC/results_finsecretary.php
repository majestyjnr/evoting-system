<?php
include '../config.php';
session_start();



if(isset($_SESSION['admin_username'])){

    
}else{
    echo "<script>alert('You need to pass the authentication first');
    window.location.href='../EC/index.php';</script>";
}

@$http_referer = $_SERVER['HTTP_REFERER']; 

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
          

          <span class="normalFont"><a href="results.php" class="btn btn-info navbar-right navbar-btn" style="float: right"><strong> Back </strong></a></span>
        </div>

      </div> <!-- end of container -->
    </nav>


    
   
        
    		<!-- <div id ="autoload" class="col-sm-4" style="border:2px solid #0099ff;padding:30px; width:50%;"> -->
        <div id= "autoload" style="padding-top:30px;  " class="">
            <div class="page-header">
            <center><h2 class="specialHead"><b>Financial Secretary</b></h2></center>
          </div>
          
          <div class="col-sm-12">
            <?php
              

              $NKB=0;
              $SA=0;
              $WQ=0;
              $SK=0;
             
              $total=0;

              // Total
              $sql ="SELECT * FROM voters";
              $result= mysqli_query($link, $sql);

              if(mysqli_num_rows($result)>0)
              {
                while($row= mysqli_fetch_assoc($result))
                {
                  if($row['financial_secretary'])
                    $total++;
                }


                // $tptal= $total*10;

             
            

                //BJP
                $sql ="SELECT * FROM voters WHERE financial_secretary = 'Nana Kwasi Boandwoh' ";
                $result= mysqli_query($link, $sql);

                $query_num_rows = mysqli_num_rows($result);

                if($query_num_rows > 0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['financial_secretary'])
                      $NKB++;
                  }
                  
                  $percentage = $NKB/$total*100;
                  $approximated_percentage = substr($percentage, 0, 5);
                  $nkb_value= $approximated_percentage;

                  echo "<strong><span style='font-size: 20px;'>Nana Kwasi Boadwoh</span>   <span style='float: right; font-size: 27px'>$approximated_percentage %<span></strong><br>";
                  echo "<span style ='font-size: 20px'>$NKB Votes</span> 
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$nkb_value."%'>
                      <span class='sr-only'>SOLO</span>
                    </div>
                  </div>
                  ";
                }

                // CONGRESS
                $sql ="SELECT * FROM voters WHERE financial_secretary = 'Winfred Quaye' ";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['financial_secretary'])
                      $WQ++;
                  }

                  $percentage = $WQ/$total*100;
                  $approximated_percentage = substr($percentage, 0, 5);
                  $wq_value= $approximated_percentage;

                  echo "<strong><span style='font-size: 20px;'>Winfred Quaye</span>   <span style='float: right; font-size: 27px'>$approximated_percentage %<span></strong><br>";
                  echo "<span style ='font-size: 20px'>$WQ Votes</span>
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$wq_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // Sandra Appaih
                $sql ="SELECT * FROM voters WHERE financial_secretary = 'Sandra Appiah' ";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['financial_secretary'])
                      $SA++;
                  }

                  $percentage = $SA/$total*100;
                  $approximated_percentage = substr($percentage, 0, 5);
                  $sa_value= $approximated_percentage;

                  echo "<strong><span style='font-size: 20px;'>Sandra Appiah</span>  <span style='float: right; font-size: 27px'>$approximated_percentage %<span></strong><br>";
                  echo "<span style ='font-size: 20px'>$SA  Votes</span>
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$sa_value."%'>
                      <span class='sr-only'>Ruth</span>
                    </div>
                  </div>
                  ";
                }

                         // Skipped
                         $sql ="SELECT * FROM voters WHERE financial_secretary = 'Skipped' ";
                         $result= mysqli_query($link, $sql);
         
                         if(mysqli_num_rows($result)>0)
                         {
                           while($row= mysqli_fetch_assoc($result))
                           {
                             if($row['financial_secretary'])
                               $SK++;
                           }
         
                           $percentage = $SK/$total*100;
                           
                           $approximated_percentage = substr($percentage, 0, 5);

                           $sk_value= $approximated_percentage;

                           echo "<strong><span style='font-size: 20px;'>Skipped Votes</span>  <span style='float: right; font-size: 27px'>$approximated_percentage %<span></strong><br>";
                           echo "<span style ='font-size: 20px'>$SK Vote(s)</span>
                           <div class='progress'>
                             <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$sk_value."%'>
                               <span class='sr-only'>BJP</span>
                             </div>
                           </div>
                           ";
                         }

               echo "<hr>";

                
                  ?>
                  <center>
                  <?php
                  echo "<strong>Total Number of Votes</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>VOTES : $total </h3>
                  </div>
                  ";
                  
                  ?>
                  
                  </center>
                  <?php
                }

              
            ?>
          </div>

        </div>
      </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-1.9.0.min.js"></script>


<script type="text/javascript">

$(document).ready(function(){
    $('#autoload').load('results_finsecretary.php') 
    refresh();
});

function refresh(){
    setTimeout( function(){
        $('#autoload').fadeOut('slow').load('results_finsecretary.php').fadeIn('slow');
        refresh();
    }, 3000); 
}
</script>


  </body>
</html>