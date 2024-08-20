<?php



   	$conn =mysqli_connect ("localhost","root","");


				if (!$conn)
				{
					echo "Erreue de connexion au serveur" ;
				}

				$db=mysqli_select_db($conn,"iot");

				if(!$db)

				{
					echo "erreur de connexion à la base ";
				}


    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $sql = "SELECT * FROM utilisateur WHERE Email='$Email' and Password='$Password'";

    $response = mysqli_query($conn, $sql);
    
    if ($response->num_rows >0) {
     echo "okk";   
    }else
	
	{
		echo"nooooo" ;
	}


?>