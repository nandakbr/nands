<?php

include ("../config.php");

$sql = "SELECT * FROM lampu";
$result = array();
$query = mysqli_query($db, $sql);

while($row = mysqli_fetch_array($query)){
    array_push($result, array('id_lamp' => $row['id_lamp'],
    'n_lamp' => $row['name'],'stat' => $row['stat']));
}
echo json_encode(array("result" => $result));

   
// Get date and time variables
    date_default_timezone_set('Asia/Bangkok');  // for other timezones, refer:- https://www.php.net/manual/en/timezones.asia.php
    $d = date("Y-m-d");
    $t = date("H:i:s");
    
// If values send by NodeMCU are not empty then insert into MySQL database table

  if(!empty($_POS['sendval']) && !empty($_POST['sendval2']) )
    {
		$val = $_POST['sendval'];
        $val2 = $_POST['sendval2'];


// Update your tablename here
	        $sqls = "INSERT INTO data (Temp, Humid, Date, Time) VALUES ('".$val."','".$val2."', '".$d."', '".$t."')"; 
 


		if ($db->query($sqls) === TRUE) {
		    echo "Values inserted in MySQL database table.";
		} else {
		    echo "Error: " . $sqls . "<br>" . $db->error;
		}
	}


// Close MySQL connection
$db->close();



?>
