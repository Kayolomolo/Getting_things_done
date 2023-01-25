<?php

require 'database.php';

$email = $_POST["email"];
$wachtwoord = $_POST["wachtwoord"];

$sql = "SELECT * FROM users WHERE email = ? AND password = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $wachtwoord);
$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result
$gebruiker = $result->fetch_assoc(); // fetch data


// $gebruiker = mysqli_fetch_assoc($result);

if (is_null($gebruiker)) {
    header("location: users_inloggen.php");
    exit;
}
if (is_array($gebruiker)) {

    session_start();
    $_SESSION["gebruiker"] = $gebruiker;

    switch ($gebruiker["role"]) {
        case 'gebruiker':
            header("location: inbox.php");
            break;
        case 'admin':
            header("location: admin.php");
            break;
    }
}
