<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iot");

if (isset($_GET["amal"]) )
{

$result=mysqli_query($conn,"SELECT place FROM finale WHERE TIMESTAMPADD(hour,duree,date)> CURRENT_DATE ");
while($res=mysqli_fetch_array($result))
{
		 
		$response["finale"]=$res;
		
		$response["success"]=1;		
		echo json_encode($response);
}
//print(json_encode($res));
	

}
	