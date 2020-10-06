<?php 

$username = $_SESSION["username"];
$sql = "SELECT * FROM users_avocat WHERE username='".$username."' AND rank='Aucun'";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  echo "";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    	  $redirection1 = '<script language="Javascript">
document.location.replace("';
$redirection2 = '");
</script>';
echo "".$redirection1."error.php".$redirection2."";
  }
  echo "";
} else {
    echo '';
}

?>
