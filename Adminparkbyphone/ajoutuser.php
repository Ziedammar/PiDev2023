<?php
header("refresh: 15;");
session_start();
$cnx=mysqli_connect("localhost","root","");
mysqli_select_db($cnx,"iot");


$response=array();

if (isset($_POST["Upload"] ))
{
	$E=$_POST["Email"];
	$P=$_POST["Password"];
	
	$req =mysqli_query($cnx ,"insert into utilisateur (Email,Password) values('$E', '$Password')");
	
   if ($req)
   {
	   header('location:index - Copie.php');
	   
	   
   }
   else {
	   die(mysqli_error($cnx));
	   
	   
   }
}

?>
    
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<!-- Favicons -->
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<style>
#Global #gauche {
    float:left;
    width:51%;
}
#Global #droite {
    margin-left:46%   
}
.styled {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color:white;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(200, 0, 0, 1);
    background-image: linear-gradient(to top left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, 0.6), inset -2px -2px 3px rgba(0, 0, 0, 0.6);
}

.styled:hover {
    background-color: rgba(200, 0, 0, 1);
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, 0.6), inset 2px 2px 3px rgba(0, 0, 0, 0.6);
}

</style>

</head>

<body>
  <header id="header" class="header fixed-top d-flex align-items-center" style="  background: linear-gradient(90deg,Gainsboro, white);">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index - Copie.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">ParkByPhone</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

   
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
		<script language="javascript">

function afficheMessage() {

alert('Mail est envoyé');

}

</script>
     
 



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/logo.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">ParkByPhone</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>ParkByPhone</h6>
              <span>Site Web</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>Mon Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Paramétres</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Déconnexin</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style="  background: linear-gradient(45deg, white,Gainsboro);">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index - Copie.php">
          <i class="bi bi-grid" ></i>
          <span >Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-grid" ></i>
          <span >Gestion des utilisateurs</span>
        </a>
      </li><!-- End Dashboard Nav -->
     

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

  
<!--<button style="border-radius:100px; background: linear-gradient(45deg, Darkgrey,white);  padding: 10px"> <a href="mail.php" onClick="afficheMessage()" style="color:black">Bilan du jour </button>
-->
      <li class="nav-item" onClick="afficheMessage()">
        <a class="nav-link collapsed" href="mail.php" >
          <i class="bi bi-envelope" ></i>
          <span >Bilan du jour</span>
        </a>
      </li><!-- End Contact Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
 <main id="main" class="main"  style="background: linear-gradient(70deg,grey, white);" >

    <div class="pagetitle">
      <h1>Ajouter Un utilisateur</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Ajouter Un utilisateur</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
	  <center>
        <div class="col-lg-9">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter Un utilisateur</h5>

              <!-- General Form Elements -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


	   
         <form name="frm" action="" method="post">
              <div class="row mb-3">                 

			 <label  for="inputText" class="col-sm-2 col-form-label">Email </label>
				 <div class="col-sm-10">
                    <input type="text" class="form-control"  name="Email">
                  </div>
                </div> 
				<div class="row mb-3">                 

                <label  for="inputText" class="col-sm-2 col-form-label">Mot de passe</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="Password"  minlength="8" required >
                  </div>
                </div> 
				
				
                    <button type="submit" class="btn btn-primary" name="Upload">Ajouter</button>
  
				
		</form>  
		</div>
</div>

</section>

</main>

<?php
if(isset($_SESSION['msg']))
 {
	 echo $_SESSION['msg'];
	 unset($_SESSION['msg']);
 }
?>
</center>
</body>
</html>
 
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ParkByPhone</span></strong>.Tous les droits sont réservés
    </div>
   
  </footer><!-- End Footer -->

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