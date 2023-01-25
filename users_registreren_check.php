<?php

require 'database.php';



$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$email = $_POST["email"];
$password = $_POST["password"];
$dob = $_POST["date"];
$telefoonnumber = $_POST["telefoonnumber"];
$adres = $_POST["adress"];
$zipcode = $_POST["zipcode"];
$city = $_POST["city"];
$role = "gebruiker";


$sql = "INSERT INTO users (firstname, lastname, email, password, date_of_birth, phonenumber, adress, zipcode, city, role) 
        VALUES ('$voornaam', '$achternaam', '$email', '$password', '$dob', '$telefoonnumber', '$adres', '$zipcode', '$city', '$role')";

mysqli_query($conn, $sql);

header("location: users_inloggen.php");

mysqli_close($conn);
