<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
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
                                        <form method="post">
											<div class="form-group form-row">
												<div class="col-4">
													<label>Agent</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Agent']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" disabled>
												</div>
												<div class="col-4">
													<label>Superviseur</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Superviseur']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" disabled>
												</div>
												<div class="col-4">
													<label>Type d'infraction</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Typeinfraction']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" disabled>
												</div>
											</div>
											
											<div class="form-group form-row">
												<div class="col-4">
													<label>Suspect</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Suspect']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" >
												</div>
												<div class="col-4">
													<label>Endroit</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Endroit']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" >
												</div>
												<div class="col-4">
													<label>Plaque</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Plaque']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" >
												</div>
											</div>
											
											<div class="form-group form-row">
												<div class="col-4">
													<label>Civil blessé</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Civilblesse']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" >
												</div>
												<div class="col-4">
													<label>Agent blessé</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Agentblesse']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" >
												</div>
												<div class="col-4">
													<label>Suspect blessé</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Suspectblesse']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" >
												</div>
											</div>
											
											<div class="form-group form-row">
												<div class="col-4">
													<label>Force utilisée (Criminel)</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['ForceutiliseeC']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" >
												</div>
												<div class="col-4">
													<label>Force utilisée (police)</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['ForceutiliseeA']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" >
												</div>
												<div class="col-4">
													<label>Preuve saisie</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Preuvesaisie']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" >
												</div>
											</div>
											
											<div class="form-group form-row">
												<div class="col-6">
													<label>Charge</label>
													<textarea class="form-control" id="Agentimplique" name="Agentimplique" rows="6" disabled><?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Charge']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?></textarea>
												</div>
												<div class="col-6">
													<label>Agent impliqué</label>
													<textarea class="form-control" id="Agentimplique" name="Agentimplique" rows="6" disabled><?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Agentimplique']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?></textarea>
												</div>
											</div>
											
											<div class="form-group form-row">
												<div class="col-12">
													<label>Information supplémentaire</label>
													<textarea class="form-control" id="infosupp" name="infosupp" rows="6" ><?php 	 $sql = "SELECT * FROM `rapport` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['Informationsupplementaire']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?> </textarea>
												</div>
											</div>
												  <button type="submit" name="submit" class="btn btn-success">Supprimer</button>

																					</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
          <!-- Content Row -->
          <div class="row">


	<?php
//creating connection to database
require_once "include/config.php";

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Agent = $link->real_escape_string($_POST['agent']);
$Superviseur = $link->real_escape_string($_POST['superviseur']);
$Typeinfraction = $link->real_escape_string($_POST['typeinfraction']);
$Suspect = $link->real_escape_string($_POST['suspect']);
$Endroit = $link->real_escape_string($_POST['endroit']);
$Plaque = $link->real_escape_string($_POST['plaque']);
$Civilblesse = $link->real_escape_string($_POST['civilblesse']);
$Agentblesse = $link->real_escape_string($_POST['agentblesse']);
$Suspectblesse = $link->real_escape_string($_POST['suspectblesse']);
$ForceutiliseeC = $link->real_escape_string($_POST['forceutiliseeC']);
$ForceutiliseeA = $link->real_escape_string($_POST['forceutiliseeA']);
$Preuvesaisie = $link->real_escape_string($_POST['preuvesaisie']);
$Charge = $link->real_escape_string($_POST['charge']);
$Agentimplique = $link->real_escape_string($_POST['Agentimplique']);
$Informationsupplementaire = $link->real_escape_string($_POST['informationsupplementaire']);
  //query to insert the variable data into the database
//$sql="UPDATE `rapport` SET (`Suspect`, `Endroit`, `Plaque`, `Civilblesse`, `Agentblesse`, `Suspectblesse`, `ForceutiliseeC`, `ForceutiliseeA`, `Preuvesaisie`, `Informationsupplementaire`) VALUES ('".$Suspect."', '".$Endroit."', '".$Plaque."', '".$Civilblesse."', '".$Agentblesse."', '".$Suspectblesse."', '".$ForceutiliseeC."', '".$ForceutiliseeA."', '".$Preuvesaisie."', '".$Informationsupplementaire."') WHERE `rapport`.`id` ='".$id."'";
$sql="DELETE FROM `rapport` WHERE `rapport`.`id` ='".$id."'";
  //Execute the query and returning a message
if(!$result = $link->query($sql)){
die('Error occured [' . $link->error . ']');
}
else
   echo "Le rapport à été mis à jour! ".$sql."";
}

?>

<?php
$sql = "SELECT * FROM rapport WHERE id='".$id."'";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "";
    }
} else {
    echo "";
	    header("location: /police/modifier.php");
    exit;

}
?>

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
