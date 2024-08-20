<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iot");

if (isset($_GET["place"]) )
{
$p=$_GET["place"];
$qry="SELECT DATE_ADD(date,INTERVAL duree*60 MINUTE) as fin ,date as debut FROM `finalepacmetre` where DATE_ADD(date,INTERVAL duree*60 MINUTE) >= CURRENT_DATE and place =$p";
$result=mysqli_query($conn,$qry);
if (mysqli_num_rows($result) > 0) {
  $response["finale"] = array();
  $response1["finale"] = array();
 while ($row = mysqli_fetch_assoc($result)) {
    $finale = array();
    $finale["fin"] = $row["fin"];
    $finale["debut"] = $row["debut"];
    $finale["success"]=1;
    array_push($response["finale"], $finale);
  }
  echo json_encode($response);
} else{
	    $tmp=array();
		$response["finale"]=array();
		
			
			array_push($response["finale"]);
		
			
		echo json_encode($response);
}
}



?>