<?php

session_start();

$conn = new mysqli("localhost", "chriliix_go", "VITAcoco", "chriliix_hotel");

if ($conn->errno) {
    echo "1";
    exit();
}
    
$username = $_POST["name"];
$password = $_POST["password"];

$namecheckquery = "SELECT * FROM customers WHERE customerID = '$username'";
    
$namecheck = $conn->query($namecheckquery) or die("2: Name Query failed");
if ($namecheck->num_rows != 1) {

    echo "5: Either no user, or more than one";
    header("Location: ../login.php");
    exit();
}

$existing = mysqli_fetch_assoc($namecheck);
$pass = $existing['password'];
$chainID = $existing['chainID'];
$reservationNum = $existing['reservationNum'];

if ($pass != $password) {
    header("Location: ../login.php");
    echo ("6: Incorrect Password");
    exit();
}

$_SESSION['Chain ID'] = $chainID;
$_SESSION['Username'] = $username;


if(isset($_SESSION['location']) ) {
    echo ( " 00" . $_SESSION['location'] . " " . $_SESSION['']);
    header("Location: ./reservationQuery.php");
    
}
else {

    echo ("11 " . $_SESSION['location'] . " " . $_SESSION['']);
    if($chainID == -1) {
        header("Location: ../customer-dashboard.php");
    }
    else {
        header("Location: ../admin-dashboard.php");
    }

}




?>
 