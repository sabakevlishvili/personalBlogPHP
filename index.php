<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class = "auth-container">
    <form action="adminAuth.php" method="post">
        <h1 style="margin-bottom: 0px;">Admin</h1>
        Username:<input type="text" name="adminUsername" placeholder="User Name">
        <br>
        Password:<input type="password" name="adminPassword" placeholder="Password">
        <br>
        <input type="submit" value="Login" class="submit-button">
    </form>
    
    <form action="userAuth.php" method="post">
        <h1 style="margin-bottom: 0px;">User</h1>
        Username:<input type="text" name="userUsername" placeholder="User Name">
        <br>
        Password:<input type="password" name="userPassword" placeholder="Password">
        <br>
        <input type="submit" value="Login" class="submit-button">
    </form>

    <h1 style="position:absolute; color:green; bottom: 0; ">don't have an account? register <a href="registerUser.php" style="font-weight:bold">here</a></h1>

</div>
</body>
</html>

