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
        <div class="title">Registreren</div>
        <form action="users_registreren_check.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Voornaam</span>
                    <input type="text" name="voornaam" placeholder="Enter uw voornaam" required>
                </div>
                <div class="input-box">
                    <span class="details">Acternaam</span>
                    <input type="text" name="achternaam" placeholder="Enter uw achternaam" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Enter uw email" required>
                </div>
                <div class="input-box">
                    <span class="details">Geboortedatum</span>
                    <input type="date" name="date" placeholder="Enter uw geboortedatum" required>
                </div>
                <div class="input-box">
                    <span class="details">Wachtwoord</span>
                    <input type="password" name="password" placeholder="Enter uw wachtwoord" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm wachtwoord</span>
                    <input type="password" name="password_confirm" placeholder="Confirm uw wachtwoord" required>
                </div>
                <div class="input-box">
                    <span class="details">Telefoonnummer</span>
                    <input type="text" name="telefoonnumber" placeholder="Enter uw telefoonnummer" required>
                </div>
                <div class="input-box">
                    <span class="details">Aderes</span>
                    <input type="text" name="adress" placeholder="Enter uw aderes" required>
                </div>
                <div class="input-box">
                    <span class="details">Postcode</span>
                    <input type="text" name="zipcode" placeholder="Enter uw postcode" required>
                </div>
                <div class="input-box">
                    <span class="details">Stad</span>
                    <input type="text" name="city" placeholder="Enter uw stad" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Registreren">
            </div>

        </form>
        <form action="users_inloggen.php" method="post">
            <div class="button">
                <input type="submit" value="Inloggen">
            </div>
        </form>

    </div>
</body>

</html>