// Code Written by Rishi Tiwari
// Website:- https://tricksumo.com
// Reference:- https://www.w3schools.com/php/php_mysql_select.asp
//
//

<?php
include("../config.php");

$sql = "SELECT id_data, Temp, Humid, date, time FROM data";  // Update your tablename here

$result = $db->query($sql);

echo "<center>";



if ($result->num_rows > 0) {


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<strong> Id:</strong> " . $row["id_data"]. " &nbsp <strong>val:</strong> " . $row["Temp"]. " &nbsp <strong>val2:</strong> " . $row["Humid"]. " &nbsp <strong>Date:</strong> " . $row["date"]." &nbsp <strong>Time:</strong>" .$row["time"]. "<p>";
    


}
} else {
    echo "0 results";
}

echo "</center>";

$db->close();



?>
