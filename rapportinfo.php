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

  <title><?php echo $sitename;?> - Voir un rapport</title>

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
													<label>Avocat</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport_avocat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['avocat']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" disabled>
												</div>
												<div class="col-4">
													<label>Type de rapport</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport_avocat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['type']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" disabled>
												</div>
												<div class="col-4">
													<label>Date</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport_avocat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['date']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" disabled>
												</div>
											</div>
											
											<div class="form-group form-row">
												<div class="col-4">
													<label>Client</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `rapport_avocat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['client']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" disabled>
												</div>
											</div>
											
											
											
											<div class="form-group form-row">
												<div class="col-12">
													<label>Information supplémentaire</label>
													<textarea class="form-control" id="infosupp" name="infosupp" rows="6"><?php 	 $sql = "SELECT * FROM `rapport_avocat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['informationsupplementaire']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?> </textarea>
												</div>
											</div>


<br>
<br>
<button type="modifier" name="modifier" class="btn btn-info">Modifier</button>
		<?php
//creating connection to database
require_once "include/config.php";

  //check whether submit button is pressed or not
if((isset($_POST['modifier'])))
{
  //fetching and storing the form data in variables
$infosupp = $link->real_escape_string($_POST['infosupp']);
  //query to insert the variable data into the database
$sql="UPDATE `rapport_avocat` SET `informationsupplementaire` = '".$infosupp."' WHERE `rapport_avocat`.`id` ='".$id."'";
  //Execute the query and returning a message
if(!$result = $link->query($sql)){
die('Error occured [' . $link->error . ']');
}
else
		$alertmessage = '<br><br><div class="alert alert-success" role="alert">
  La modification à bien été apporté!
</div>';
  echo "".$alertmessage."";
  $redirection1 = '<script language="Javascript">
document.location.replace("';
$redirection2 = '");
</script>';
echo "".$redirection1."rapportinfo.php?id=".$id."".$redirection2."";
}

?>


											<?php 
$username = $_SESSION["username"];
$sql = "SELECT * from users_avocat where username='".$username."' AND rank='Patron' OR rank='Juge' LIMIT 1";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  echo "";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<button type="envoyer" name="envoyer" class="btn btn-danger">Supprimer</button>';
  }
  echo "</table>";

} else {
  echo "<tr><td></td><td></td><td></td><td></td><th></th></tr></table>";
}

?>

											
																					</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
          <!-- Content Row -->

		  
		  	<?php
//creating connection to database
require_once "include/config.php";

  //check whether submit button is pressed or not
if((isset($_POST['envoyer'])))
{
  //fetching and storing the form data in variables
  //query to insert the variable data into the database
//$sql="UPDATE `rapport` SET (`Suspect`, `Endroit`, `Plaque`, `Civilblesse`, `Agentblesse`, `Suspectblesse`, `ForceutiliseeC`, `ForceutiliseeA`, `Preuvesaisie`, `Informationsupplementaire`) VALUES ('".$Suspect."', '".$Endroit."', '".$Plaque."', '".$Civilblesse."', '".$Agentblesse."', '".$Suspectblesse."', '".$ForceutiliseeC."', '".$ForceutiliseeA."', '".$Preuvesaisie."', '".$Informationsupplementaire."') WHERE `rapport`.`id` ='".$id."'";
$sql="DELETE FROM `rapport_avocat` WHERE `rapport_avocat`.`id` ='".$id."'";
  //Execute the query and returning a message
if(!$result = $link->query($sql)){
die('Error occured [' . $link->error . ']');
}
else
			$alertmessage = '<br><br><div class="alert alert-success" role="alert">
  Le rapport à été supprimer!
</div>';
  echo "".$alertmessage."";
  	  $redirection1 = '<script language="Javascript">
document.location.replace("';
$redirection2 = '");
</script>';
echo "".$redirection1."index2.php".$redirection2."";

}

?>

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
