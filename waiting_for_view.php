<?php

require "database.php";

$id = $_GET["id"];

$sql = "SELECT * FROM waiting_for WHERE id = '$id'";

$project = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css>
    <title>Document</title>
</head>

<body>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <tr>
                <td><?php echo $project["action_name"] ?></td><br>
                <td><?php echo $project["project_name"] ?></td><br>
                <td><?php echo $project["Text"] ?></td><br>
                <td><?php echo $project["wait_for"] ?></td><br>
                <td><?php echo $project["creation_date"] ?></td><br>
            </tr>
        </div>
    </div>
</body>

</html>