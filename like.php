<?php 
include ("Connexion.php");

$response=array();

if (isset($_GET["like"]) && isset($_GET["Email"]) )
{
	$like = "like" ;
	$email=$_GET["Email"] ; 
	  	$req1 =mysqli_query($cnx ,"select Id  as id from utilisateur where Email='$email'");
		$cur=mysqli_fetch_array($req1);
			$p0 =$cur["id"];
 $req =mysqli_query($cnx ,"select Id  from rate where Id='$p0'");
		
if(mysqli_num_rows($req) == 0)     {	
	
  	$req =mysqli_query($cnx ,"insert into rate (value,Id) values ('$like','$p0')");

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
		
		
	}
	
}
else
{
	$response["success"]=0;
	$response["message"]="existe déja! ";
		
		echo json_encode($response);
	
	
}
}

?>