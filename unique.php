<?php 
include ("Connexion.php");

$response=array();

if (isset($_GET["Email"]))
{
	$Email=$_GET["Email"];
	//$Password=$_GET["Password"];
	
$verif_pseudo = mysqli_query($cnx,"SELECT Email FROM utilisateur WHERE Email='$Email'");
  if(mysqli_num_rows($verif_pseudo) == 0)              {	


		$response["success"]=1;
		$response["message"]="passe ";
		
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
	$response["message"]="no! ";
		
		echo json_encode($response);
	
	


}


?>