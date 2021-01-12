<?php

session_start();
$conn = new mysqli("localhost", "chriliix_go", "VITAcoco", "chriliix_hotel");
if ($conn->errno) {
    echo "1";
    exit();
}

if(isset($_SESSION['location'])) {
    $location = $_SESSION["location"];
    $deluxe = $_SESSION["numDeluxe"];
    $regular = $_SESSION["numRegular"];

}
else {
    $location = $_POST["location"];
    $deluxe = $_POST["deluxeNum"];
    $regular = $_POST["regularNum"];
}

if($deluxe == 0 && $regular == 0) {
    header("Location: ../search-results.php");
}

$checkIn_Date = $_SESSION["check_in"];
$checkOut_Date = $_SESSION["check_out"];
$customer = $_SESSION['Username'];



$insertReservationQuery = "INSERT INTO chriliix_hotel.reservations (deluxeNum, regularNum, startDate, endDate, locationID, customerID) 
VALUES ('$deluxe', '$regular', '$checkIn_Date', '$checkOut_Date', '$location', '$customer')";

$conn->query($insertReservationQuery) or die("4: Insert reservation query failed");

$_SESSION["location"] = NULL;
$_SESSION["numDeluxe"] = NULL;
$_SESSION["numRegular"] = NULL;


echo $location . " " . $deluxe . " " . $regular . " " . $checkIn_Date . " " . $checkOut_Date . " " . $customer;

header("Location: ../customer-dashboard.php");


?>
 