<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedinavocat"]) || $_SESSION["loggedinavocat"] !== true){
    header("location: login.php");
    exit;
}
require_once "include/config.php";



$id = $_GET['id'];
$id2 = (isset($_GET['uid']) ? $_GET['uid'] : NULL);
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

  <title><?php echo $sitename;?> - Ajouter un rapport</title>

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
				
          <!-- Page Heading -->
                <!-- Page Content -->
<main id="main-container">				
				<div class="content">					
					<div class="row">
                        <div class="col-lg-12">
                            <!-- Block Tabs Animated Fade -->
                            <div class="block">
                                <div class="block-content">
									<div>
									  <form class="form" method="POST">
											<div class="form-group form-row">
												<div class="col-4">
													<label>Avocat</label>
												<select class="form-control" id="avocat" name="avocat" required>
<?php 

$username = $_SESSION["username"];

$sql = "SELECT * FROM users_avocat WHERE username='".$username."'";
$result = $link->query($sql);


  while($row = $result->fetch_assoc()) {
    
	unset($name);
    $name = $row['username'];
	echo '<option value="'.$name.'">'.$name.'</option>';
  }
  echo "</select>";

?>

</div>
												<div class="col-4">
													<label>Type de rapport</label>
													<select class="form-control" id="type" name="type" required>
														<option selected value="Demande de révision de dossier">Demande de révision de dossier</option>
													</select>
												</div>
																								<div class="col-4">
													<label>Date</label>
													<select class="form-control" id="date" name="date" required>
<?php 
    $date1 = "" . date("Y/m/d") . "";
	
	echo '<option value="'.$date1.'">'.$date1.'</option>';
  echo "</select>";

?>												</div>

											</div>
											
											<div class="form-group form-row">
												<div class="col-4">
													
													<label>Client</label>
												<select class="form-control" id="client" name="client" required>
<?php 


$sql = "SELECT * FROM users WHERE identifier='".$id."'";
$result = $link->query($sql);


  while($row = $result->fetch_assoc()) {
    
	unset($name);
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
	echo '<option value="'.$firstname.' '.$lastname.'">'.$firstname.' '.$lastname.'</option>';
  }
  echo "</select>";

?>

</div>

											</div>
																																												
											<div class="form-group form-row">
												<div class="col-12">
													<label>Information supplémentaire</label>
													<textarea class="form-control" id="informationsupplementaire" name="informationsupplementaire" rows="6" value=""></textarea>
												</div>
											</div>
											
																					
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	  <button type="submit" name="submit" class="btn btn-success">Envoyer</button>
	
	<br>
	<br>
		<?php
//creating connection to database
require_once "include/config.php";

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$client = $link->real_escape_string($_POST['client']);
$avocat = $link->real_escape_string($_POST['avocat']);
$type = $link->real_escape_string($_POST['type']);
$date = $link->real_escape_string($_POST['date']);
$informationsupplementaire = $link->real_escape_string($_POST['informationsupplementaire']);
  //query to insert the variable data into the database
$sql="INSERT INTO `rapport_avocat` (`id`, `identifier`, `client`, `avocat`, `type`, `date`, `informationsupplementaire`) VALUES ('','".$id."', '".$client."', '".$avocat."', '".$type."', '".$date."', '".$informationsupplementaire."')";
  //Execute the query and returning a message
if(!$result = $link->query($sql)){
die('Error occured [' . $link->error . ']');
}
else
		$alertmessage = '<br><br><div class="alert alert-success" role="alert">
  Le dossier est maintenant créer.
</div>';
  echo "".$alertmessage."";
}

?>

	
	</form>

          <!-- Content Row -->

          <div class="row">



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

            <div class="col-lg-6 mb-4">

              <!-- Approach -->
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
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
