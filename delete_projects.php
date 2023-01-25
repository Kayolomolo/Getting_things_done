<?php

require 'database.php';

$id = $_GET["id"];

$sql = "DELETE FROM projects WHERE id = $id";

mysqli_query($conn, $sql);

header("location: projects.php");
