<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>

<body>
    <div class="container">
        <div class="title">New project</div>
        <form action="projects_toevoegen_check.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Project naam</span>
                    <input type="name" name="name" placeholder="Enter uw project naam" required>
                </div>
                <div class="input-box">
                    <span class="details">Action name</span>
                    <input type="action_name" name="action_name" placeholder="Enter uw action name">
                </div>
                <div class="input-box">
                    <span class="details">Tekst</span>
                    <input type="text" name="text" placeholder="Enter tekst">
                </div>
                <div class="input-box">
                    <span class="details">Deadline</span>
                    <input type="date" name="deadline" placeholder="Enter ur deadline">
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