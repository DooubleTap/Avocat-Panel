<?php

require_once "include/config.php";
    

$username = $_SESSION["username"];

$sql = "SELECT * FROM users_avocat WHERE username='".$username."' LIMIT 1";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["username"]. "";
    }
} else {
    echo "";
	    header("location: /police/error.php");
    exit;

}

$sql = "SELECT * FROM users_avocat WHERE username='".$username."' LIMIT 1";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " | Rang: " . $row["rank"]. "";
    }
} else {
    echo "";
	    header("location: /police/error.php");
    exit;

}

?>