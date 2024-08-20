<?php 
include ("Connexion.php");

$response=array();

if (isset($_GET["Contenu"]) &&  isset($_GET["Email"]))
{
	
	$Contenu=$_GET["Contenu"];
	$Email=$_GET["Email"];
	$req1 =mysqli_query($cnx ,"select Id  as id from utilisateur where Email='$Email'");
		$cur=mysqli_fetch_array($req1);
			$p0 =$cur["id"];
  	$req =mysqli_query($cnx ,"insert into  reclamation (Contenu,id_user) values ('$Contenu','$p0')");

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