<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>





    <form action="index.php" method="post">
        Email:
        <input type="text" name="email" placeholder="Please Enter Your Username" required><br>
        Username: <br>
        <input type="text" name="username" placeholder="Please Enter Your Username" required><br>
        Password: <br>
        <input type="password" name="password" placeholder="Please Enter Your Password" required"><br>
        <input type="submit">
        <input type="hidden" name="action" value="login">
        <input type="hidden" name="page" value="user">
    </form>






<?php
include 'view/layout/footer.php';
?>