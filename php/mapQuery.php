<?php


$conn = new mysqli("localhost", "chriliix_go", "VITAcoco", "chriliix_hotel");

if ($conn->errno) {
    echo "1";
    exit();
}

$mapQuery = "SELECT chainID, location FROM rooms";
$result = $conn->query($mapQuery) or die ("2: Map Query Failed");
$finalResult = array();
$i = 0;
while($row = $result->fetch_row()) {
    $finalResult[$i++] = array($row[0], $row[1]);
}
echo json_encode($finalResult);

?>
 