<?php
require_once "include/config.php";

foreach($link->query('SELECT COUNT(*) FROM rapport') as $row) {
echo "<tr>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "</tr>";
}
?>