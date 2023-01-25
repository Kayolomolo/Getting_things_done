<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
    header("location: users_inloggen.php");
}

$id = $_SESSION['gebruiker']["id"];
$sql = "SELECT * FROM projects WHERE creator_id = '$id'";


$result = mysqli_query($conn, $sql);

$all_inbox = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="navigationbar.css">
</head>

<body>
    <div class="topnav">
        <a href="inbox.php">Inbox</a>
        <a class="active" href="projects.php">Projects</a>
        <a href="waiting_for.php">Waiting for</a>
        <a href="calender.php">Calender</a>
        <a href="users_uitloggen.php" class="split red">Logout</a>
        <a href="projects_toevoegen.php" class="split">New project</a>
    </div>

    <table class="table table-light table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>action name</th>
                <th>text</th>
                <th>creation date</th>
                <th>deadline</th>
                <th>edit</th>
                <th>view</th>
                <th>delete</th>
                <th></th>


            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_inbox as $inbox) : ?>
                <tr>
                    <td><?php echo $inbox["name"] ?></td>
                    <td><?php echo $inbox["action_name"] ?></td>
                    <td><?php echo $inbox["Text"] ?></td>
                    <td><?php echo $inbox["creation_date"] ?></td>
                    <td><?php echo $inbox["deadline"] ?></td>
                    <td><a href="projects_edit.php?id=<?php echo $inbox['id']; ?>">Edit</a></td>
                    <td><a href="projects_view.php?id=<?php echo $inbox['id']; ?>">View</a></td>
                    <td><a href="delete_projects.php?id=<?php echo $inbox['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                    <td>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>