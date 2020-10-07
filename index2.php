<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedinavocat"]) || $_SESSION["loggedinavocat"] !== true){
    header("location: login.php");
    exit;
}
require_once "include/config.php";



?>
 <!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $sitename;?> - Tableau de bord</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include 'include/header.php';?>
<?php include 'sql/redirection.php';?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
				                <div class="content content-narrow">
																				<h3 class="kt-portlet__head-title">
													Faire une recherche
												</h3>
                    <form name="myform" action="afficherinfo.php" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="id"  placeholder="Prénom, nom de famille" required>
                            <div class="input-group-append">
                                <span onclick="myform.submit()" class="input-group-text">
                                    <i class="fa fa-fw fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
					<br>
                </div>


<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">								
								<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
									<div class="kt-portlet kt-portlet--mobile">
										<div class="kt-portlet__head kt-portlet__head--lg">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
												<i class="kt-font-brand flaticon2-line-chart"></i>
												</span>
												<h3 class="kt-portlet__head-title">
													Liste des derniers rapports
												</h3>
											</div>
										</div>
											<!--begin: Datatable -->
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
												
<thead>
													<tr>
														<th>#</th>
														<th>CLIENT</th>
														<th>AVOCAT</th>
														<th>TYPE DE RAPPORT</th>
														<th>ACTION</th>
													</tr>
												</thead>
												<tbody class="sortable">
												<?php 
$color = "style='background-color : red';";
$sql = "SELECT * FROM rapport_avocat ORDER BY id DESC LIMIT 20";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  echo "";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["client"]."</td><td> ".$row["avocat"]."</td><td>".$row["type"]."</td><th><a href='rapportinfo.php?id=" . $row['id'] . "'>Voir le rapport</a></th></tr>";
  }
  echo "</table>";
} else {
  echo "<tr><td>Aucun résultat</td><td></td><td></td><td></td><th></th></tr></table>";
}

?>
																										
																									</tbody>
				            </main>
        </div>
        </div>
        </div>
        </div>
        </div>
<br>
<br>
<br>
<br>          <div class="row">


          <!-- Content Row -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rapport</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php include 'sql/nombrerapport.php';?></div>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->



          <!-- Content Row -->
          <div class="row">


            <!-- Content Column -->
              <!-- Color System 
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Primary
                      <div class="text-white-50 small">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Success
                      <div class="text-white-50 small">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Info
                      <div class="text-white-50 small">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Warning
                      <div class="text-white-50 small">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Danger
                      <div class="text-white-50 small">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Secondary
                      <div class="text-white-50 small">#858796</div>
                    </div>
                  </div>
                </div>
              </div>
-->
            </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
