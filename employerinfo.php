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

  <title><?php echo $sitename;?> - Gestion des employés</title>

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
<?php include 'sql/redirectionboss.php';?>

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
																									    <img src="<?php 	 $sql = "SELECT * FROM `users_avocat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['photo']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" width="262" height="196">
												<br>
<br>
<br>
<br>
<br>

												<div class="col-4">

													<label>Agent</label>
												<select class="form-control" id="agent" name="agent" required>
<?php 

$username = $_SESSION["username"];

$sql = "SELECT * FROM users_avocat WHERE id='".$id."'";
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
													<label>Rang</label>
													<select class="form-control" id="rang" name="rang" required>
														<option  value="Aucun">Aucun</option>
														<option selected value="Jurist">Jurist</option>
														<option  value="Avocat">Avocat</option>
														<option  value="Bâtonnier">Bâtonnier</option>
														<option  value="Patron">Patron</option>
													</select>
										</div>
																								<div class="col-4">
													<label>Photo (262x196)</label>
													<input type="text" class="form-control" id="photo" name="photo" value="<?php 	 $sql = "SELECT * FROM `users_avocat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['photo']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>">
												</div>
												</div>
											<div class="form-group form-row">
												<div class="col-4">
													<label>Numéro de téléphone</label>
													<input type="text" class="form-control" name="phonenumber" value="<?php 	 $sql = "SELECT * FROM `users_avocat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['phonenumber']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>">
												</div>
												<div class="col-4">
													<label>Date de naissance</label>
													<?php 	 $sql = "SELECT * FROM `users_avocat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo ""; $numerodetelephone = $row['phonenumber'];  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>
													<input type="text" class="form-control" name="datedenaissance" value="<?php 	 $sql = "SELECT * FROM `users` WHERE `phone_number` = '".$numerodetelephone."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['dateofbirth']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" disabled>
												</div>
												<div class="col-4">
													<label>Sexe</label>
													<?php 	 $sql = "SELECT * FROM `users_avocat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo ""; $numerodetelephone = $row['phonenumber'];  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>
													<input type="text" class="form-control" name="sexe" value="<?php 	 $sql = "SELECT * FROM `users` WHERE `phone_number` = '".$numerodetelephone."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['sex']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" disabled>
												</div>
											</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
	  <button type="submit" name="submit" class="btn btn-success">Modifier</button>
	
		<?php
//creating connection to database
require_once "include/config.php";

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$rang = $link->real_escape_string($_POST['rang']);
$agent = $link->real_escape_string($_POST['agent']);
$photo = $link->real_escape_string($_POST['photo']);
$phonenumber = $link->real_escape_string($_POST['phonenumber']);
  //query to insert the variable data into the database
$sql="UPDATE `users_avocat` SET rank='".$rang."', photo='".$photo."', phonenumber='".$phonenumber."' where username='".$agent."'";

  //Execute the query and returning a message
if(!$result = $link->query($sql)){
die('Error occured [' . $link->error . ']');
}
else
	    header("location: employer.php");
    exit;
}

?>

	<?php 
$username = $_SESSION["username"];
$sql = "SELECT * from users_avocat where username='".$username."' AND rank='Patron' LIMIT 1";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  echo "";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<button type="envoyer" name="envoyer" class="btn btn-danger">Supprimer</button>';
  }
  echo "";
} else {
  echo "";
}

?>

<?php
//creating connection to database
require_once "include/config.php";

  //check whether submit button is pressed or not
if((isset($_POST['envoyer'])))
{
  //fetching and storing the form data in variables
  //query to insert the variable data into the database
//$sql="UPDATE `rapport` SET (`Suspect`, `Endroit`, `Plaque`, `Civilblesse`, `Agentblesse`, `Suspectblesse`, `ForceutiliseeC`, `ForceutiliseeA`, `Preuvesaisie`, `Informationsupplementaire`) VALUES ('".$Suspect."', '".$Endroit."', '".$Plaque."', '".$Civilblesse."', '".$Agentblesse."', '".$Suspectblesse."', '".$ForceutiliseeC."', '".$ForceutiliseeA."', '".$Preuvesaisie."', '".$Informationsupplementaire."') WHERE `rapport`.`id` ='".$id."'";
$sql="DELETE FROM `users_avocat` WHERE `users_avocat`.`id` ='".$id."'";
  //Execute the query and returning a message
if(!$result = $link->query($sql)){
die('Error occured [' . $link->error . ']');
}
else
	$alertmessage = '<br><br><div class="alert alert-danger" role="alert">
  Utilisateur supprimé.
</div>';
  echo "".$alertmessage."";
    exit;
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
