<?php
 $host = 'localhost';
  $dbname = 'iot';
  $username = 'root';
  $password = '';
    
if (isset($_POST["Upload"] ))
{
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  $sql = "SELECT * FROM utilisateur WHERE Email='$Email' and Password= '$Password'";

  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
 $row = $stmt->fetch(PDO::FETCH_ASSOC)  ;

       if (($row['role'])=="admin"){
		 header('location:index - Copie.php');
		 
	 }
	 else if (($row['role'])=="agent"){
		 header('location:index.php');
	 
    }else
	
	{  ?>
	   	
	
		    	
		
	
	  <!-- Large Modal -->
             
			  

              <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
					   <h5 class="modal-title">
					<i class='fas fa-exclamation-triangle' style='font-size:20px;color:red'></i></h5>

                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
					<center>
					  <p style="color:#FF0000";>  Echec de Connexion Votre  Email ou Mot de passe est incorrect !   </p>

                                    
					 
					 </center></div>
                    
                  </div>
                </div>
              </div><!-- End Large Modal-->
			 <?php
	}
}
  ?>
	


<!DOCTYPE html>
<html lang="en">
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - ParkByPhone</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo1.png" alt="">
                  <span class="d-none d-lg-block">ParkByPhone</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Se Connecter</h5>
                    <p class="text-center small">Bienvenue chez ParkByPhone </p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate   action="" method="post">

                    <div class="col-12">
                      <label for="inputText" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text"  class="form-control" name= "Email"  required>
                        <div class="invalid-feedback">Saisi votre Email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label  for="inputText" class="form-label">Mot de passe</label>
                      <input type="password"  class="form-control" name= "Password"  required>
                      <div class="invalid-feedback">Saisi votre Mot de passe.</div>
                    </div>

                   
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="Upload" data-bs-toggle="modal" data-bs-target="#largeModal">Se Connecter</button>
                    </div>
                
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>