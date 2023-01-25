<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
        header("location: users_inloggen.php");
}

$name = $_POST["name"];
$action_name = $_POST["action_name"];
$text = $_POST["text"];
$deadline = $_POST["deadline"];
$creator_id = $_SESSION['gebruiker']["id"];


$sql = "INSERT INTO projects (creator_id, name, action_name, text, deadline) 
        VALUES ('$creator_id', '$name', '$action_name', '$text', '$deadline')";

mysqli_query($conn, $sql);

header("location: projects.php");

mysqli_close($conn);
