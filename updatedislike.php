<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iot");

$result=mysqli_query($conn,"select count(*) as nb from  rate WHERE value = 'dislike'");

if(mysqli_num_rows($result)>0)
	{

	    $tmp=array();
		$response["rate"]=array();
		
	$data=mysqli_fetch_assoc($result);

			
			array_push($response["rate"],$data);
		
		
		
		$response["success"]=1;		
		echo json_encode($response);
		
	}
	
	else {
		
		$response["success"]=0;
		$response["message"]="Pas d'utilisatur !";
		
		echo json_encode($response);
		
		
	}
	
	
	



?>