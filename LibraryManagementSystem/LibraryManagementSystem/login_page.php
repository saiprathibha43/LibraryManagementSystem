<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <h1>User register</h1>
    <form action="register_user.php" method="post">
    Username:<br><input type="text" name="username"><br><br>
    password:<br><input type="password" name="password"><br><br>
    <button cls="btn">Register</button>
    </form>
    <h1>User login</h1>
    <form action="login_user.php" method="post">
    Username:<br><input type="text" name="validate_username"><br><br>
    password:<br><input type="password" name="validate_password"><br><br>
    <button cls="btn">login</button>
</form>
</body>
</html>