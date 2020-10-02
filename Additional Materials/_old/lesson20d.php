<?php
define("MYSQLUSER", "dgonzale_001");
define("MYSQLPASS", "Boca2298");
define("HOSTNAME", "localhost");
define("MYSQLDB", "dgonzale_Class001");

$connection = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
if ($connection->connect_error) {
  die('Connect Error: ' . $connection->connect_error);
} else {
  echo 'Successful connection to MySQL <br />';
  if ($result = $connection->query("SHOW TABLES")) {
    $count = $result->num_rows;
    echo "Tables: ($count)<br />"; 
    while ($row =$result->fetch_array()) {
      echo $row[0]. '<br />';
    }
  }
}
