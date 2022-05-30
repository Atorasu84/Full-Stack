<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h1>register</h1>
    <?php session_start(); ?>
    <form action="src/register.php" method="post">
        <p><label for="email">Email</label><input type="email" name="email"  required></p>

        <p><label for="password">Password</label><input type="password" name="password"  required></p>

        <p><label for="conf_password">Confirmation de mot de passe</label><input type="password" name="conf_password" required/></p>

        <button type="submit">Register</button>
        <a href="loginpage.php">Have an account ? Login</a>
    </form>
</body>
</html>