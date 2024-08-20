<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iot");

if (isset($_GET["amal"]) )
{

$result=mysqli_query($conn,"SELECT CAST(date AS date) as date,SUM(duree) as gain FROM finale GROUP BY CAST(date AS date)");
while($res=mysqli_fetch_assoc($result))
{
		 
		$response["finale"]=$res;
		
		//$response["success"]=1;		
		echo json_encode($response);
}
//print(json_encode($res));
	

}
	