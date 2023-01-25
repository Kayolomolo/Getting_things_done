<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
    header("location: users_inloggen.php");
}

$id = $_SESSION['gebruiker']["id"];
$sql = "SELECT * FROM inbox WHERE creator_id = '$id'";


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
        <a class="active" href="inbox.php">Inbox</a>
        <a href="projects.php">Projects</a>
        <a href="waiting_for.php">Waiting for</a>
        <a href="calender.php">Calender</a>
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
                <th>Choose</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_inbox as $inbox) : ?>
                <tr>
                    <td><?php echo $inbox["name"] ?></td>
                    <td><?php echo $inbox["creation_date"] ?></td>
                    <td><?php echo $inbox["deadline"] ?></td>
                    <td><a href="delete_index.php?name=<?php echo $inbox["name"] ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                    <td><a href="inbox_view.php?id=<?php echo $inbox['id']; ?>">View</a></td>
                    <td>
                        <form method="post" action="inbox_choose.php">
                            <input type="hidden" name="id" value="<?php echo $inbox['id']; ?>">
                            <select id="select" name="select">
                                <option value="" disabled selected> choose option</option>
                                <option value="Projects">Projects</option>
                                <option value="Waiting_For">Waiting_For</option>
                            </select>
                            <input type="submit" name="submit" value="move">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>