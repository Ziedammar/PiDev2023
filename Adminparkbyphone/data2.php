
<?php
    header('Content-Type: application/json');

    $conn = mysqli_connect("localhost","root","","iot");

    $sqlQuery = "SELECT place ,count(*) as nb FROM `finalepacmetre` WHERE CONVERT(DATE_ADD(date,INTERVAL duree*60 MINUTE),date)>=CURRENT_DATE GROUP by place;";

    $result = mysqli_query($conn,$sqlQuery);

    $daata = [];

    foreach ($result as $row) {
        $daata[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($daata);
?>