<?php

require 'database.php';

$id = $_GET["id"];

$sql = "DELETE FROM waiting_for WHERE id = $id";

mysqli_query($conn, $sql);

header("location: waiting_for.php");
