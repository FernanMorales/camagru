<?php
session_start();
$DB_DSN = 'mysql:host=localhost:3306;dbname=test;charset=utf8';
$DB_USER = 'root';
$DB_PASSWORD = 'fernan';
try {
    $db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
} catch(PDOException $ex) {
    echo "An Error occured! : ".$ex->getMessage();
}

?>
