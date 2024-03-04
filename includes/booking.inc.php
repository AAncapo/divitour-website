<?php
declare(strict_types=1);
include('../includes/dbh.inc.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $destino = $_POST['destino'];
    $passengers = $_POST['psgrs'];
    $date_start = $_POST['datestart'];

    if ($stmt=$connect->prepare('SELECT * FROM servicios where destino_id = ?')) {
        $stmt->bind_param('s',$destino);
        $stmt->execute();
        // echo 'Nigga we made it!';
    } else {
        echo 'Failed to make a connection to database';
    }
} else {
    header('Location: ../index.php');
}
