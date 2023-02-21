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
                    <label for="email">Email:</label><br>
                    <input type="text" name="email" placeholder="Please Enter Your Email Address" required><br>
                    <label for="username">Username:</label><br>
                    <input type="text" name="username" placeholder="Please Enter Your Username" required><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" placeholder="Please Enter Your Password" required><br>
                    <input type="submit">
                    <input type="hidden" name="action" value="student">
                    <input type="hidden" name="page" value="registry">
                </form>
                <p>Back to the login page: <a href="index.php?page=login&action=login"><img src="assets/icons/back.png" width="25" height="25"></a></p>
            </div>
        </div>
    </body>
</html>