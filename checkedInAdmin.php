<?php
session_start();

$chainID = $_SESSION['Chain ID'];
$date = $_SESSION['Date'];

$conn = new mysqli("mars.cs.qc.cuny.edu", "cuch9809", "123456", "cuch9809");

if ($conn->errno) {
    echo "1";
    exit();
}

$reservationQuery = "SELECT res.*
from cuch9809.rooms as room INNER JOIN cuch9809.reservations as res
ON room.location = res.locationID AND room.chainID = '$chainID'
WHERE res.startDate <= '$date' AND res.endDate >= '$date'";

$result = $conn->query($reservationQuery) or die("2: reservation Query Error");
$i = 0;
while($row = $result->fetch_row()) {
    $finalResult[$i++] = array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
}


echo json_encode($finalResult);



?>
 