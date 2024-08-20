
<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iot");

if ( isset($_GET["Email"]) )

{
	$Id=$_GET["Email"];

$result=mysqli_query($conn,"select Id from utilisateur WHERE Email = '$Id'");

if(mysqli_num_rows($result)>0)
	{

	    $tmp=array();
		$response["utilisateur"]=array();
		
	$data=mysqli_fetch_assoc($result);

			
			array_push($response["utilisateur"],$data);
		
		
		
		$response["success"]=1;		
		echo json_encode($response);
		
	}
	
	else {
		
		$response["success"]=0;
		$response["message"]="Pas d'utilisatur !";
		
		echo json_encode($response);
		
		
	}
	
	
	
	
	
	
}
else
{
	$response["success"]=0;
	$response["message"]="filed ! ";
		
		echo json_encode($response);
	
	
}



?>