<?php
session_start();

$conn = new mysqli("localhost", "chriliix_go", "VITAcoco", "chriliix_hotel");

if ($conn->errno) {
    echo "1";
    exit();
}
    
$username = $_POST["name"];
$password = $_POST["password"];


echo $username;
echo $password;

$namecheckquery = "SELECT customerID FROM customers WHERE customerID = '$username'";
    
$namecheck = $conn->query($namecheckquery) or die("2: Name Query failed");

if (mysqli_num_rows($namecheck) > 0) {

    echo "3: Name already Exists";
    $_SESSION['dupName'] = "1"; // duplicate name
    header("Location: ../signup.php");
    exit();
}

$insertuserquery = "INSERT INTO customers (customerID, password, chainID) VALUES ('$username', '$password', -1)";

$conn->query($insertuserquery) or die("4: Insert customer query failed");
$_SESSION['dupName'] = "0"; // no duplicate name
echo ("0");

header("Location: ../login.php");

?>
 
