
<?php 
include ("Connexion.php");

$response=array();

if ( isset($_GET["Email"]) )

{
$e=$_GET["Email"];

	  
		$result =mysqli_query($cnx , "select Password as mdp from utilisateur WHERE Email ='$e'"  );
			

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