<?php

$conn = new mysqli("localhost", "chriliix_go", "VITAcoco", "chriliix_hotel");
if ($conn->errno) {
    echo "1 - connection error";
    exit();
}

$check_in = $_POST["checkIn"];
$check_out = $_POST["checkOut"];
$chain = $_POST["chainID"];

$finalResult = array();

$nameQuery = "SELECT * FROM rooms WHERE chainID = '$chain'";
$result = $conn->query($nameQuery) or die("2: Failed at Chain ID Query");
$reservationsQuery = "SELECT inn.location , SUM(inn.deluxeReserved), SUM(inn.regularReserved) 
        from (select room.location, res.deluxeNum as deluxeReserved, res.regularNum as regularReserved
        from chriliix_hotel.rooms as room INNER JOIN chriliix_hotel.reservations as res
        ON room.location = res.locationID AND room.chainID = '$chain'
        WHERE res.startDate <= '$check_out' AND res.startDate >= '$check_in'
        OR res.endDate <= '$check_out' AND res.endDate >= '$check_in')
        as inn group by inn.location";
$reservationResult = $conn->query($reservationsQuery) or die("3: reservation query failed");
$i = 0;
while ($row = $result->fetch_row()) {
    while ($rowRes = $reservationResult->fetch_row()) {
        if ($row[1] == $rowRes[0]) {
            $row[2] -= $rowRes[1];
            $row[3] -= $rowRes[2];
        }
    }
    $finalResult[$i++] = array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
    printf("location: %s    deluxe: %s    regular: %s\n", $finalResult[$i - 1][1], $finalResult[$i - 1][2], $finalResult[$i - 1][3]);
    echo "<br>";
}
break;

echo json_encode($finalResult);
