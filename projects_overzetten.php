<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
    header("location: users_inloggen.php");
}

$id = $_POST["id"];

$sql = "INSERT INTO projects (name, Text, deadline, creator_id)
SELECT name, Text, deadline, creator_id FROM inbox WHERE id = '$id'";

mysqli_query($conn, $sql);

$sql = "DELETE FROM inbox WHERE id = $id";

mysqli_query($conn, $sql);

header("location: inbox.php");
