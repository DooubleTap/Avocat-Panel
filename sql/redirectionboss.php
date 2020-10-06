<?php 

$username = $_SESSION["username"];
$sql = "SELECT * FROM users_avocat WHERE username='".$username."' AND rank='Patron'";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  echo "";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    	  
  }
  echo "";
} else {
$redirection1 = '<script language="Javascript">
document.location.replace("';
$redirection2 = '");
</script>';
echo "".$redirection1."index2.php".$redirection2."";
}

?>
