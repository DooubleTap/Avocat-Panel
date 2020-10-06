<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'newlife_live');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$link->set_charset("utf8");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Configuration
$sitename = "NewLife Roleplay"; // Nom du site
$headersite = "NewLife"; // Nom du site
$headersite2 = "Roleplay"; // Nom du site
$footer = "NewLife Roleplay 1.0 © 2020"; // Footer
?>