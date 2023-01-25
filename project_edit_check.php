<?php

require 'database.php';

$id = $_POST["id"];

$name = $_POST["name"];
$action_name = $_POST["action_name"];
$text = $_POST["text"];
$deadline = $_POST["deadline"];

$sql = "UPDATE projects SET name = '$name', action_name = '$action_name', Text = '$text', deadline = '$deadline' WHERE id = '$id'";

mysqli_query($conn, $sql);

header("location: projects.php");

mysqli_close($conn);
