<?php
header("refresh: 15;");
  $host = 'localhost';
  $dbname = 'iot';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
    $texte = file_get_contents('exemple.txt');
            
            
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
      <a href="index.php" class="logo d-flex align-items-center">
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
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid" ></i>
          <span >Dashboard</span>
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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section profile">
      <div class="row">
        <center>

        <div class="col-xl-10">

          <div class="card" >
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Les statistiques</button>
                </li>

           
              </ul>
			  <center>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 
				
				
				                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6"style='border:2'>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                        
											<i class='fas fa-map-marker-alt' style='font-size:48px;color:green'></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
											
<?php
  $sql = "SELECT COUNT(*) as reserve FROM `finalepacmetre` WHERE CONVERT(DATE_ADD(date,INTERVAL duree*60 MINUTE),date)>=CURRENT_DATE";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
<h4  style="text-align:center;font-family:Fantasy">
       <?php echo htmlspecialchars($row['reserve'])  ?></h4>
	   
            
	          							
		    <?php endwhile; ?>	
											
											
											
											</div>
											<h5 style="text-align:center;font-family:Cursive">
                                            <div>Place Reservée</div> </h5>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                          <i class='fas fa-map-marker-alt' style='font-size:48px;color:red'></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
<?php
  $sql = "SELECT COUNT(*) as reserve FROM `finalepacmetre` WHERE CONVERT(DATE_ADD(date,INTERVAL duree*60 MINUTE),date)>=CURRENT_DATE";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
<h4  style="text-align:center;font-family:Fantasy">

       <?php echo htmlspecialchars(($row['reserve'])-8)/-1  ?></h4>
	          							
		    <?php endwhile; ?>	
								
								
											
											</div>
											<h5 style="text-align:center;font-family:Cursive">
                                            <div>Place vide </div></h5>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class='far fa-money-bill-alt' style='font-size:48px;color:blue'></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
										
										
<!DOCtYPE html>

<html>
<?php
  $sql = "SELECT SUM(duree) as gain FROM finalepacmetre WHERE CONVERT(date,date)=CURRENT_DATE;";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
<h4  style="text-align:center;font-family:Fantasy">
       <?php echo htmlspecialchars(($row['gain'])+0).'DT'?></h4>
	          							<?php
            //On écrit tout le texte dans notre fichier
            file_put_contents('exemple.txt','Gain du jour :'  .$row['gain'] . 'DT');  
			?>
		    <?php endwhile; ?>	
		<h5 style="text-align:center;font-family:Cursive">
                                            <div >Gain du jour</div></h5>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                       
                    </div>
				

                </div>



              </div><!-- End Bordered Tabs -->
			  	 

            </div>
          </div>

        </div>
      </div>
	  </center></center>
    </section>
	<div id="Global" > 
	
	 <div class="card" id="gauche"  >
            <div class="card-body pt-1">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
			
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Bénéfice</button>
                </li>

           
              </ul>

<!DOCTYPE html>
<html>
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid w-75" > 
        <div class="row">
            <div class="col-md-12 my-5 d-flex justify-content-center">
				<h1 style="text-align:center;font-family:Cursive">
                Totale par jour</h1>
            </div>
            <div class="col-md-12">
                <canvas id="graph"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            showGraph();
        });

        const showGraph = () => {
            {
                $.post("data.php",function (data)
                {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].date);
                        marks.push(data[i].gain);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Gain par jour',
                                backgroundColor: 'blue',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graph");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
                });
            }
        }
    </script>
</body>
</html>

			  </div>
			  </div>
			  
			   <div class="card"  id="droite" >
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
			
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"> Reservation par place</button>
                </li>
</ul>
           


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
<div class="container-fluid w-75"  > 
        <div class="row">
            <div class="col-md-12 my-5 d-flex justify-content-center">
			<br>
			<br>
				<h2 style="text-align:center;font-family:Cursive">
                Nombre de reservation par place</h2>
            </div>
			</div>
<?php 
  $con = new mysqli('localhost','root','','iot');
  $query = $con->query("
    SELECT place ,count(*) as nb FROM `finalepacmetre` WHERE CONVERT(DATE_ADD(date,INTERVAL duree*60 MINUTE),date)>=CURRENT_DATE GROUP by place
  ");

  foreach($query as $data)
  {
    $month[] = $data['place'];
    $amount[] = $data['nb'];
  }

?>


<div style="width: 500px;">
  <canvas id="myChart"></canvas>
</div>
 
<script>
  // === include 'setup' then 'config' above ===
  const labels = <?php echo json_encode($amount) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Nombre de reservation par place',
      data: <?php echo json_encode($month) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
</body>
</html>		  
			  
			  </div>
			  </div>
			  
			  </div>
			  </div>
			  </div>
	  <div id="Global">
			  <div class="card" id="gauche">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
			
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Impayé </button>
				  
                </li>
				</ul>
 <!DOCtYPE html>

<html>
<?php
$sql = "SELECT id_place,time FROM `finaleidplace` where statut=0";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

  <div class="container">

            <div class="card-body">
              <h5 class="card-title"> </h5>
			    <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Place</th>
				    <th scope="col">Alerte</th>
					
                  </tr>
                </thead>
                <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

            
 
     <tr>
       <td><?php echo htmlspecialchars($row['id_place']); ?></td>
	   <td><button type="submit" title="Agent 1"  > <a href="sendalert.php?Num=<?php echo htmlspecialchars('+21650122990'); ?>&Id=<?php echo htmlspecialchars($row['id_place']); ?>"> <i class="fa fa-phone" style="color:green"></i></button>
	   <button type="submit" title="Agent 2"  > <a href="sendalert.php?Num=<?php echo htmlspecialchars('+21652636447'); ?>&Id=<?php echo htmlspecialchars($row['id_place']); ?>"> <i class="fa fa-phone" style="color:red"></i></button>
	   <button type="submit" title="Agent 1"  > <a href="sendalert.php?Num=<?php echo htmlspecialchars('+21655659090'); ?>&Id=<?php echo htmlspecialchars($row['id_place']); ?>"> <i class="fa fa-phone" style="color:yellow"></i></button>
 

  
	 

     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
</html>
           
              </ul>
	</div>
	</div>
	</div>
	</div>
	</div>
	<br>
<div class="card"  id="droite" >
            <div class="card-body pt-2">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
			
                  <button class="nav-link ript
				  " data-bs-toggle="tab" data-bs-target="#profile-overview">Les reservation en cours</button>
                </li>

           
              </ul>
			  
			  <!DOCtYPE html>

<html>
<?php
  $sql = "SELECT place,DATE_ADD(date,INTERVAL duree*60 MINUTE) as fin ,date as debut FROM `finalepacmetre` where DATE_ADD(date,INTERVAL duree*60 MINUTE) >= CURRENT_DATE;";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

  <div class="container">

            <div class="card-body">
              <h5 class="card-title"> </h5>
			    <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Place</th>
				    <th scope="col">Date Début</th>
					<th scope="col">Date Fin</th>
					
                  </tr>
                </thead>
                <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

            
 
     <tr>
       <td><?php echo htmlspecialchars($row['place']); ?></td>
	          <td><?php echo htmlspecialchars($row['debut']); ?></td>
	          <td><?php echo htmlspecialchars($row['fin']); ?></td>

  
	 

     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
</html>
			</div>
			  </div>
			  </div>
			    
			  </div>
<br> <br> <br> <br> 
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