<?php
$serverName = "______";
$userName = "______";
$userPassword = "";
$dbname = "______";

try {
    $conn = new PDO(
        "mysql:host=______;dbname=______;charset=UTF8",
        ______,
        ______
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'You are now connecting to database!';
} catch (PDOException $e) {
    echo "Sorry! You cannot connect to database";
}
