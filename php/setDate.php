<?php
    session_start();
    $dateSet = $_POST['date'];
    $_SESSION['date'] =  $dateSet;
    echo $dateSet;


    $conn = new mysqli("localhost", "chriliix_go", "VITAcoco", "chriliix_hotel");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    
    
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
    
    
   $sql = "select * from chriliix_hotel.customers";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_row();
        echo $row[0];
        echo $row[1];
        echo $row[2];
    }

    header("Location: ../index.php");
?>