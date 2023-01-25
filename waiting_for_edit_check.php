<?php

require 'database.php';

$id = $_POST["id"];
$action_name = $_POST["action_name"];
$project_name = $_POST["project_name"];
$text = $_POST["Text"];
$wait_for = $_POST["wait_for"];

$sql = "UPDATE waiting_for SET action_name = '$action_name', project_name = '$project_name', Text = '$text', wait_for = '$wait_for' WHERE id = '$id'";

mysqli_query($conn, $sql);

header("location: waiting_for.php");

mysqli_close($conn);
