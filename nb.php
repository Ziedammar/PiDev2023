<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iot");

if (isset($_GET["amal"]) )
{

$qry="SELECT place as p,count(*) as nb FROM finalepacmetre WHERE TIMESTAMPADD(hour,duree,date)>= CURRENT_DATE GROUP By place";

$result=mysqli_query($conn,$qry);
if (mysqli_num_rows($result) > 0) {
  $response["finale"] = array();
 while ($row = mysqli_fetch_assoc($result)) {
    $finale = array();
    $finale["p"] = $row["p"];
    $finale["nb"] = $row["nb"];
    
    array_push($response["finale"], $finale);
  }
  echo json_encode($response);
} else {
  echo "Aucune réservation trouvée.";
}
}

?>