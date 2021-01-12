<?php

session_start();

$conn = new mysqli("localhost", "chriliix_go", "VITAcoco", "chriliix_hotel");

if ($conn->errno) {
    echo "1 - connection error";
    exit();
}
    
$check_in = $_POST["checkIn"];
$check_out = $_POST["checkOut"];
$search_by = $_POST["searchBy"];

$finalResult = array();

switch ($search_by) {
    case ("hotelName"):
        $search = $_POST["searchInput"]; //has to be an int
        $nameQuery = "SELECT * FROM rooms WHERE chainID = '$search'";
        $result = $conn->query($nameQuery) or die("2: Failed at Chain ID Query");
        $reservationsQuery = "SELECT inn.location , SUM(inn.deluxeReserved), SUM(inn.regularReserved) 
        from (select room.location, res.deluxeNum as deluxeReserved, res.regularNum as regularReserved
        from chriliix_hotel.rooms as room INNER JOIN chriliix_hotel.reservations as res
        ON room.location = res.locationID AND room.chainID = '$search '
        WHERE res.startDate <= '$check_out' AND res.startDate >= '$check_in'
        OR res.endDate <= '$check_out' AND res.endDate >= '$check_in')
        as inn group by inn.location";
        $reservationResult = $conn->query($reservationsQuery) or die ("3: reservation query failed");
        $i = 0;
        while($row = $result->fetch_row()) {
            while($rowRes = $reservationResult->fetch_row()) {
                if ($row[1] == $rowRes[0]) {
                    $row[2] -= $rowRes[1];
                    $row[3] -= $rowRes[2];
                }
            }
            $finalResult[$i++] = array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
            // printf ("location: %s    deluxe: %s    regular: %s\n", $finalResult[$i-1][1], $finalResult[$i-1][2], $finalResult[$i-1][3]);
            // echo "<br>";
          }
        break;
    case ("hotelLoc"):
        $i_corr = $_POST["iCorr"];
        $j_corr = $_POST["jCorr"];
        //echo $i_corr . ',' . $j_corr;
        //exit();
        $loc = $i_corr . ',' . $j_corr;
        $ijQuery = "SELECT * FROM rooms WHERE rooms.location = '$loc'";
        $result = $conn->query($ijQuery) or die("2: Failed at i,j Query");
        $reservationsQuery = "SELECT inn.location , SUM(inn.deluxeReserved), SUM(inn.regularReserved) 
        from (select room.location, res.deluxeNum as deluxeReserved, res.regularNum as regularReserved
        from chriliix_hotel.rooms as room INNER JOIN chriliix_hotel.reservations as res
        ON room.location = res.locationID AND room.location = '$loc'
        WHERE res.startDate <= '$check_out' AND res.startDate >= '$check_in'
        OR res.endDate <= '$check_out' AND res.endDate >= '$check_in')
        as inn";
        $reservationResult = $conn->query($reservationsQuery) or die ("3: reservation query failed");
        // while($row = $result->fetch_row()) {
        //     while($rowRes = $reservationResult->fetch_row()) {
        //         if ($row[1] == $rowRes[0]) {
        //             $row[2] -= $rowRes[1];
        //             $row[3] -= $rowRes[2];
        //         }
        //     }
        //     $finalResult[$i++] = array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
        // }
        $row = $result->fetch_row();
        $rowRes = $reservationResult->fetch_row();
        $row[2] -= $rowRes[1];
        $row[3] -= $rowRes[2];
        if($row[0] == NULL) {
            $finalResult = "";
        }
        else
            $finalResult = array(array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]));
        
        break;
    case ("priceRng"):
        $min_Price = $_POST["minPrice"];
        $max_Price = $_POST["maxPrice"];
        //echo  $check_in . ' ' . $check_out . '//' . $min_Price. '-' . $max_Price;
        //exit();
        $minmaxQuery = "SELECT * FROM rooms WHERE rooms.deluxePrice <= '$max_Price' AND rooms.deluxePrice >= '$min_Price' 
        OR rooms.regularPrice <= '$max_Price' AND rooms.regularPrice >= '$min_Price'";
        $result = $conn->query($minmaxQuery) or die("2: Failed at minMax Query");

        $reservationsQuery = "SELECT  inn.location , SUM(inn.deluxeReserved), SUM(inn.regularReserved) from 
        (select room.location, res.deluxeNum as deluxeReserved, res.regularNum as regularReserved 
        from chriliix_hotel.rooms as room
        INNER JOIN
        chriliix_hotel.reservations as res
        ON room.location = res.locationID AND
        ((room.deluxePrice <= '$max_Price' AND room.deluxePrice >= '$min_Price')
        OR (room.regularPrice <= '$max_Price' AND room.regularPrice >= '$min_Price'))
        WHERE res.startDate <= '$check_out' AND res.startDate >= '$check_in'
        OR res.endDate <= '$check_out' AND res.endDate >= '$check_in')
        as inn group by inn.location";
        $reservationResult = $conn->query($reservationsQuery) or die ("3: reservation query failed");
        $i = 0;
        while($row = $result->fetch_row()) {
            while($rowRes = $reservationResult->fetch_row()) {
                if ($row[1] == $rowRes[0]) {
                    $row[2] -= $rowRes[1];
                    $row[3] -= $rowRes[2];
                }
            }
            $finalResult[$i++] = array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
          }
        break;
    default:

        break;
}
$_SESSION ['search_results'] = json_encode($finalResult);
$_SESSION ['check_in'] = $check_in;
$_SESSION ['check_out'] = $check_out;
echo json_encode($finalResult);
//exit();
header("Location: ../search-results.php");

?>
 