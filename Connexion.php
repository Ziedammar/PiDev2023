<?php
		$cnx =mysqli_connect ("localhost","root","");


				if (!$cnx)
				{
					echo "Erreue de connexion au serveur" ;
				}

				$db=mysqli_select_db($cnx ,"iot");

				if(!$db)

				{
					echo "erreur de connexion à la base ";
				}

?>