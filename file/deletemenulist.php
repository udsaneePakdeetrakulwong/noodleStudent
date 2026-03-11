<?php

if (isset($_GET[' __________________'])) {
    require '../connect.php';

    $query = "______";
    $stmt = $conn->______
    $stmt->bindParam('______', $_GET['foodmenuID']);

    if ($stmt->______()) {
        $mess = "list Deleted!!!";
        header('location:index.php');
    } else {
        $mess = "Failed Delete!!!";
    }

    echo ______;
    $conn = null;

}



?>