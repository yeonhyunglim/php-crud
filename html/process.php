<?php
$host = "127.0.0.1";
$port = "3308";
$mysqli = new mysqli("mysql:3306", 'crud', 'crud', 'crud') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $location=$_POST['location'];

    $mysqli->query("INSERT INTO data (name, location) VALUES ('$name', '$location')") or
            die($mysqli->error);
}