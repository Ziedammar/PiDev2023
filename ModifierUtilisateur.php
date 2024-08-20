<?php 
include ("Connexion.php");

$response=array();

if (isset($_GET["Id"]) && isset($_GET["Email"]) && isset($_GET["Password"]))
{
	$Id=$_GET["Id"];
	$Email=$_GET["Email"];
	$Password=$_GET["Password"];
	
	$req =mysqli_query($cnx ,"update  utilisateur set Email='$Email',Password='$Password' where Id='$Id' ");
	
	if ($req)
	
	{
		$response["success"]=1;
		$response["message"]="Mise à jour ! ";
		
		echo json_encode($response);
		
	}
	
	else {
		
		$response["error"]=0;
		$response["message"]="Echec !";
		
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