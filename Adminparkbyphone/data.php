
<?php
    header('Content-Type: application/json');

    $conn = mysqli_connect("localhost","root","","iot");

    $sqlQuery = "SELECT CAST(date AS date) as date,SUM(duree) as gain FROM finalepacmetre GROUP BY CAST(date AS date)";

    $result = mysqli_query($conn,$sqlQuery);

    $data = [];

    foreach ($result as $row) {
        $data[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($data);
?>