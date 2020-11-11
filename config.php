<?php

				// $hostname="localhost";
				// $username= "root";
				// $password= "";
				// $database="db_evoting";


$link = mysqli_connect('localhost', 'root', '');
$database = 'db_evoting';

$link or die('Sorry...Could not connect to database');



if(!$link || !mysqli_select_db( $link, $database)){

    die('Could not connect');

}else{

   // echo '<b>Connection Established Successfully</b><hr><br><br>';

}

				// UserInput Test
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					
					  return $data;
					}	
							

?>