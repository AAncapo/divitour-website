<?php

$host = 'localhost';
$user = 'root';
$pwd = '';
$dbname = 'divitour_db';
$connect = mysqli_connect($host,$user,$pwd,$dbname);

if (mysqli_connect_errno()) {
    exit('-- Failed to connect to MySQL: ' . mysqli_connect_error() . ' --');
}