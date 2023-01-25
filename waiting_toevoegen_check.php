<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
        header("location: users_inloggen.php");
}

$action_name = $_POST["action_name"];
$project_name = $_POST["project_name"];
$text = $_POST["text"];
$wait_for = $_POST["wait_for"];
$creator_id = $_SESSION['gebruiker']["id"];


$sql = "INSERT INTO waiting_for (creator_id, action_name, project_name, text, wait_for) 
        VALUES ('$creator_id', '$action_name', '$project_name', '$text', '$wait_for')";

mysqli_query($conn, $sql);

header("location: waiting_for.php");

mysqli_close($conn);
