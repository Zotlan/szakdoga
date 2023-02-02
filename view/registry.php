<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <style>
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
            $action = $_REQUEST['action'] ?? "";
                switch ($action){
                    case 'student':
                        echo '
                            <form action="index.php" method="post">
                                Email: <br>
                                <input type="text" name="email" placeholder="Please Enter Your Email Address" required><br>
                                Username: <br>
                                <input type="text" name="username" placeholder="Please Enter Your Username" required><br>
                                Password: <br>
                                <input type="password" name="password" placeholder="Please Enter Your Password" required><br>
                                <input type="submit">
<<<<<<< Updated upstream
                                <input type="hidden" name="action" value="student">
                                <input type="hidden" name="page" value="registry">
                            </form>';
=======
<<<<<<< HEAD
                                <input type="hidden" name="action" value="student">';
                            //if (){
                                echo '<input type="hidden" name="page" value="registry">

                            </form>';
                            //}
=======
                                <input type="hidden" name="action" value="student">
                                <input type="hidden" name="page" value="registry">
                            </form>';
>>>>>>> 6801f796cc29c0f8c0f5d971e7b8724c91e0b0cb
>>>>>>> Stashed changes
                    break;
                    case 'teacher':
                        echo '
                            <form action="index.php" method="post">
                                Email: <br>
                                <input type="text" name="email" placeholder="Please Enter Your Email Address" required><br>
                                Username: <br>
                                <input type="text" name="username" placeholder="Please Enter Your Username" required><br>
                                Password: <br>
                                <input type="password" name="password" placeholder="Please Enter Your Password" required"><br>
                                <input type="submit">
                                <input type="hidden" name="action" value="teacher">
                                <input type="hidden" name="page" value="registry">
                            </form>';
                    break;
                }
        ?>
                    
        <p>Back to the login page: <a href="index.php?page=login&action=login"><img src="assets/icons/back.png" width="10" height="10"></a></p>
    </body>
</html>