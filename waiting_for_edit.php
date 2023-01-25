<?php

require 'database.php';

session_start();

if (!isset($_SESSION["gebruiker"])) {
    header("location: users_inloggen.php");
}
$id = $_GET["id"];

$sql = "SELECT * FROM waiting_for WHERE id = $id";

$result = mysqli_query($conn, $sql);

$waiting_for = mysqli_fetch_assoc($result);

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
        <form action="waiting_for_edit_check.php" method="post">
            <div class="user-details">

                <input type="hidden" name="id" value="<?php echo $waiting_for['id']; ?>">

                <div class="input-box">
                    <span class="details">Project naam</span>
                    <input type="project_name" name="project_name" value="<?php echo $waiting_for['project_name'] ?>" placeholder="Enter uw project naam" required>
                </div>
                <div class="input-box">
                    <span class="details">Action name</span>
                    <input type="action_name" name="action_name" value="<?php echo $waiting_for['action_name'] ?>" placeholder="Enter uw action name">
                </div>
                <div class="input-box">
                    <span class="details">Tekst</span>
                    <input type="Text" name="Text" value="<?php echo $waiting_for['Text'] ?>" placeholder="Enter tekst">
                </div>
                <div class="input-box">
                    <span class="details">Wachten op</span>
                    <input type="wait_for" name="wait_for" value="<?php echo $waiting_for['wait_for'] ?>" placeholder="Wachten op">
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Voeg toe">
            </div>
        </form>
        <form action="waiting_for.php" method="post">
            <div class="button">
                <input type="submit" value="Terug">
            </div>
        </form>
    </div>
</body>

</html>