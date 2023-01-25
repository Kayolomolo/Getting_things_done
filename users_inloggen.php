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
        <div class="title">Inloggen</div>
        <form action="users_logging_check.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Enter uw email" required>
                </div>
                <div class="input-box">
                    <span class="details">Wachtwoord</span>
                    <input type="password" name="wachtwoord" placeholder="Enter uw wachtwoord" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Inloggen">
            </div>
        </form>
        <form action="users_registreren.php" method="post">
            <div class="button">
                <input type="submit" value="Registreren">
            </div>
        </form>
    </div>
</body>

</html>