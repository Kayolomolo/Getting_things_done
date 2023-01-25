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
        <form action="waiting_toevoegen_check.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Project naam</span>
                    <input type="project_name" name="project_name" placeholder="Enter uw project naam" required>
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
                    <span class="details">Wachten op</span>
                    <input type="wait_for" name="wait_for" placeholder="Wachten op">
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