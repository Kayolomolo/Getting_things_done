<?php

require 'database.php';

$name = $_GET["name"];

$sql = "DELETE FROM inbox WHERE name = '$name'";

mysqli_query($conn, $sql);

$sql = "DELETE FROM calender WHERE action_name = '$name'";

mysqli_query($conn, $sql);

header("location: inbox.php");
