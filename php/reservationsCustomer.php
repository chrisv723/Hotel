<?php
session_start();

$customer = $_SESSION['Username'];
$date = $_SESSION['Date'];
$conn = new mysqli("localhost", "chriliix_go", "VITAcoco", "chriliix_hotel");

if ($conn->errno) {
    echo "1";
    exit();
}

$reservationQuery = "SELECT * from reservations
WHERE startDate > '$date' AND customerID = '$customer'";



$reservationQuery2 = "SELECT res.reservationID, res.deluxeNum, res.regularNum, res.startDate, res.endDate, room.deluxePrice, room.regularPrice, res.locationID, res.customerID
from chriliix_hotel.rooms as room 
INNER JOIN chriliix_hotel.reservations as res
ON room.location = res.locationID AND res.customerID = '$customer'
WHERE res.startDate >= '$date'";



$result = $conn->query($reservationQuery2) or die("2: reservation Query Error");
$i = 0;
while($row = $result->fetch_row()) {
    $finalResult[$i++] = array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]);
}

$_SESSION['customerReservationResult'] =  json_encode($finalResult);
header("Location: ../user_reservations.php");


?>