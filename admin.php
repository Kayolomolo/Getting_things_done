<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
    header("location: users_inloggen.php");
}

$id = $_SESSION['gebruiker']["id"];
$sql = "SELECT * FROM users WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="navigationbar.css">
</head>

<body>
    <div class="topnav">
        <a href="users_uitloggen.php" class="split red">Logout</a>
        <a href="users_registreren.php" class="split ">New users</a>
    </div>

    <table class="table table-light table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>password</th>
                <th>dob</th>
                <th>phonenumber</th>
                <th>adress</th>
                <th>zipcode</th>
                <th>city</th>
                <th>role</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_users as $users) : ?>
                <tr>
                    <td><?php echo $users["id"] ?></td>
                    <td><?php echo $users["firstname"] ?></td>
                    <td><?php echo $users["lastname"] ?></td>
                    <td><?php echo $users["email"] ?></td>
                    <td><?php echo $users["password"] ?></td>
                    <td><?php echo $users["date_of_birth"] ?></td>
                    <td><?php echo $users["phonenumber"] ?></td>
                    <td><?php echo $users["adress"] ?></td>
                    <td><?php echo $users["zipcode"] ?></td>
                    <td><?php echo $users["city"] ?></td>
                    <td><?php echo $users["role"] ?></td>
                    <td><a href="delete_users.php?id=<?php echo $users['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>