<?php

require 'database.php';

$id = $_GET["id"];

$sql = "DELETE FROM calender WHERE id = $id";

mysqli_query($conn, $sql);

header("location: calender.php");
