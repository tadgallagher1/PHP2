<?php
$connection = @new mysqli('localhost', 'dgonzale_001', 'Boca2298');
if ($connection->connect_error) {
  die('Connect Error: ' . $connection->connect_error);
} else {
  echo 'Successful connection to MySQL';
}
