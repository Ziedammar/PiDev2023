<?php 
include ("Connexion.php");

$response=array();

if (isset($_GET["matricule"]) && isset($_GET["place"])&& isset($_GET["duree"])&& isset($_GET["date"]))
{
	$matricule=$_GET["matricule"];
	$place=$_GET["place"];
	$duree=$_GET["duree"];
	$date=$_GET["date"];

  	$req =mysqli_query($cnx ,"insert into  parcmetre (matricule,place,duree,date) values ('$matricule','$place','$duree','$date')");

	if ($req)
	
	{
		$response["success"]=1;
		$response["message"]="Ajouter ! ";
		
		echo json_encode($response);
		
	}
	
	else {
		
		$response["error"]=0;
		$response["message"]="Echec !";
		
		echo json_encode($response);
echo mysqli_error($cnx); 		
		
	}
}




?>