<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
        header("location: users_inloggen.php");
}

$name = $_POST["name"];
$text = $_POST["text"];
$deadline = $_POST["deadline"];
$creator_id = $_SESSION['gebruiker']["id"];


$sql = "INSERT INTO inbox (creator_id, name, text, deadline) 
        VALUES ('$creator_id', '$name', '$text', '$deadline')";

mysqli_query($conn, $sql);


$sql = "INSERT INTO calender (creator_id, action_name, deadline)
        VALUES ('$creator_id', '$name', '$deadline')";

mysqli_query($conn, $sql);

header("location: inbox.php");

mysqli_close($conn);
