<?php
$host = '139.59.235.179';
$port = '5432';
$dbname = 'keswa';
$user = 'keswa';
$password = '@#Keswa123';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Failed to connect to PostgreSQL.";
    exit;

}


?>