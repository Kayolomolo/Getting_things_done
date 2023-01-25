<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
    header("location: users_inloggen.php");
}

$id = $_SESSION['gebruiker']["id"];
$sql = "SELECT * FROM calender WHERE creator_id = '$id' ORDER BY deadline";


$result = mysqli_query($conn, $sql);

$all_calender = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="navigationbar.css">
</head>

<body>
    <div class="topnav">
        <a href="inbox.php">Inbox</a>
        <a href="projects.php">Projects</a>
        <a href="waiting_for.php">Waiting for</a>
        <a class="active" href="calender.php">Calender</a>
        <a href="users_uitloggen.php" class="split red">Logout</a>
        <a href="inbox_toevoegen.php" class="split ">New project</a>
    </div>

    <table class="table table-light table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Creation date</th>
                <th>Deadline</th>
                <th>Delete</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_calender as $calender) : ?>
                <tr>
                    <td><?php echo $calender["action_name"] ?></td>
                    <td><?php echo $calender["creation_date"] ?></td>
                    <td><?php echo $calender["deadline"] ?></td>
                    <td><a href="delete_calender.php?id=<?php echo $calender['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                    <td><a href="calender_view.php?id=<?php echo $calender['id']; ?>">View</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>