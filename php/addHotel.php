<?php

session_start();
$conn = new mysqli("localhost", "chriliix_go", "VITAcoco", "chriliix_hotel");

if ($conn->errno) {
    echo "1 - connection error";
    exit();
}

$iVal = $_POST["iValue"];
$jVal = $_POST["jValue"];
$numDelRooms = $_POST["deluxeNum"];
$numRegRooms = $_POST["regNum"];
$deluxePrice = $_POST["delPrice"];
$regularPrice = $_POST["regPrice"];

$chain = $_SESSION['Chain ID'];

$finalResult = array();

$loc = $iVal . ',' . $jVal;

$verify = "SELECT * FROM rooms WHERE location = '$loc'"; 

$verifyCheck = $conn->query($verify) or die("2: location query failed");

if (mysqli_num_rows($verifyCheck) > 0) {

    echo "3: location already Exists";
    header("Location: ../addingHotel.php");
    $_SESSION['dupLoc'] = "1";
    exit();
}

$insertlocationquery = "INSERT INTO chriliix_hotel.rooms (chainID, rooms.location, deluxeNum, regularNum, deluxePrice, regularPrice) VALUES ('$chain', '$loc', '$numDelRooms', '$numRegRooms', '$deluxePrice', '$regularPrice')";

$conn->query($insertlocationquery) or die("4: Insert location query failed");


$sql = "select COUNT(distinct r.location) from chriliix_hotel.rooms as r";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_row();
    $_SESSION['numHotels'] = $row[0];
}
            
$sql = "select MIN(r.regularPrice), MAX(deluxePrice) from chriliix_hotel.rooms as r";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_row();
    $_SESSION['minPrice'] = $row[0];
    $_SESSION['maxPrice'] = $row[1];
}
                
            


$_SESSION['dupLoc'] = "0";
header("Location: ../addingHotel.php");

?>