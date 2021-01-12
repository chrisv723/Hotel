<?php

$conn = new mysqli("localhost", "chriliix_go", "VITAcoco", "chriliix_hotel");

if ($conn->errno) {
    echo "1";
    exit();
}
    
// $reservation = $_POST['res_id'];
// echo $reservation;

$reservation = $_POST["resDel"];


$deleteReservationQuery = "DELETE FROM chriliix_hotel.reservations WHERE reservationID = '$reservation'";

$conn->query($deleteReservationQuery) or die("2: Delete reservation failed");

header("Location: ../customer-dashboard.php");

?>
 