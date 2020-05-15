// Code Written by Rishi Tiwari
// Website:- https://tricksumo.com
// Reference:- https://www.w3schools.com/php/php_mysql_insert.asp
//
//

<?php

include("../config.php");
   
// Get date and time variables
    date_default_timezone_set('Asia/Bangkok');  // for other timezones, refer:- https://www.php.net/manual/en/timezones.asia.php
    $d = date("Y-m-d");
    $t = date("H:i:s");
    
// If values send by NodeMCU are not empty then insert into MySQL database table

  if(!empty($_POST['sendval']) && !empty($_POST['sendval2']) )
    {
		$val = $_POST['sendval'];
        $val2 = $_POST['sendval2'];


// Update your tablename here
	        $sql = "INSERT INTO data (Temp, Humid, Date, Time) VALUES ('".$val."','".$val2."', '".$d."', '".$t."')"; 
 


		if ($db->query($sql) === TRUE) {
		    echo "Values inserted in MySQL database table.";
		} else {
		    echo "Error: " . $sql . "<br>" . $db->error;
		}
	}


// Close MySQL connection
$db->close();



?>
