<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="auth-container">
        <form action="register.php" method="post" class="register-form">
            <h4 style="margin-bottom: 0px;">Register User</h4>
            <input type="text" name="registerUsername" placeholder="Username">
            <input type="password" name="registerPassword" placeholder="Password">
            <input type="password" name="confirmRegisterPassword" placeholder="Password Again">
            <input type="submit" value="Register" class ="submit-button">

            <p style = "color: red;">please provide password with one uppercase letter numbers and at least one lowercase letter</p>
        </form>
    </div>
</body>
</html>