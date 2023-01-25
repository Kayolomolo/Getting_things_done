<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
    header("location: users_inloggen.php");
}
$id = $_GET["id"];

$sql = "SELECT * FROM projects WHERE id = $id";

$result = mysqli_query($conn, $sql);

$all_project = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="test.css">
</head>

<body>
    <div class="container">
        <div class="title">Edit</div>
        <form action="project_edit_check.php" method="post">
            <div class="user-details">
                <input type="hidden" name="id" value="<?php echo $all_project['id']; ?>">
                <div class="input-box">
                    <span class="details">Project naam</span>
                    <input type="name" name="name" value="<?php echo $all_project['name'] ?>" placeholder="Enter uw project naam" required>
                </div>
                <div class="input-box">
                    <span class="details">Action name</span>
                    <input type="action_name" name="action_name" value="<?php echo $all_project['action_name'] ?>" placeholder="Enter uw action name">
                </div>
                <div class="input-box">
                    <span class="details">Tekst</span>
                    <input type="text" name="text" value="<?php echo $all_project['Text'] ?>" placeholder="Enter tekst">
                </div>
                <div class="input-box">
                    <span class="details">Deadline</span>
                    <input type="date" name="deadline" value="<?php echo $all_project['deadline'] ?>" placeholder="Enter ur deadline">
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Voeg toe">
            </div>
        </form>
        <form action="projects.php" method="post">
            <div class="button">
                <input type="submit" value="Terug">
            </div>
        </form>
    </div>
</body>

</html>