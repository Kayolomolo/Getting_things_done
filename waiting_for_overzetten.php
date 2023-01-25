<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
    header("location: users_inloggen.php");
}

$id = $_POST["id"];

$sql = "INSERT INTO waiting_for (Text, creation_date, project_name, creator_id)
SELECT Text, creation_date, name, creator_id FROM inbox WHERE id = '$id'";

mysqli_query($conn, $sql);

$sql = "DELETE FROM inbox WHERE id = $id";

mysqli_query($conn, $sql);

header("location: inbox.php");
