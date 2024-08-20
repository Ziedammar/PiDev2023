<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iot");
if ( isset($_GET["Email"]))
{
$Email=$_GET["Email"];
	$req1 =mysqli_query($conn ,"select Id  as id from utilisateur where Email='$Email'");
		$cur=mysqli_fetch_array($req1);
			$p0 =$cur["id"];
$result=mysqli_query($conn,"select count(*) as nb from  reclamation WHERE Id_user = '$p0'");

if(mysqli_num_rows($result)>0)
	{

	    $tmp=array();
		$response["rec"]=array();
		
	$data=mysqli_fetch_assoc($result);

			
			array_push($response["rec"],$data);
		
		
		$response["success"]=1;		
		echo json_encode($response);
		
	}
	
	else {
		
		$response["success"]=0;
		$response["message"]="Pas de reclamation !";
		
		echo json_encode($response);
		
		
	}
	
	
}



?>