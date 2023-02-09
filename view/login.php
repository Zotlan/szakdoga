<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/login_style.css">
    </head>
    <body>
        <div style="margin: auto">
            <div class="login_div">
                <form action="index.php" method="post">
                    Username: <br>
                    <input type="text" name="username" placeholder="Please Enter Your Username" required><br>
                    Password: <br>
                    <input type="password" name="password" placeholder="Please Enter Your Password" required"><br>
                    <input type="submit">
                    <input type="hidden" name="action" value="login">
                    <input type="hidden" name="page" value="login">
                </form>
                <p>Don't have an account yet? You can register right <a href="index.php?page=registry&action=student">here</a>!</p>
                <a href="index.php"><img src="assets/icons/home.png" width="25px" height="25px"></a>
            </div>
        </div>
    </body>
</html>