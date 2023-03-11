<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login_style.css">
</head>
<body>
<div class="form-container">
    <div class="wrapper">
        <form action="index.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username" placeholder="Please Enter Your Username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" placeholder="Please Enter Your Password" required><br>
            <input type="submit">
            <input type="hidden" name="action" value="login">
            <input type="hidden" name="page" value="login">
        </form>
        <p>New user? <a href="index.php?page=registry">Register</a>!</p>
    </div>
</div>
</body>
</html>