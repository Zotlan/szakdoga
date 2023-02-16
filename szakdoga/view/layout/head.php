<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php
        $page = "";

        $page = $_REQUEST['page'] ?? "";
        if($page == "chat"){
            echo '<link rel="stylesheet" href="assets/css/chat_style.css">';
        }
        ?>
        <link rel="stylesheet" href="assets/css/style.css">


        <nav class="navbar navbar-expand-lg navbar-dark">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <a class="navbar-brand" href="index.php" style="color: goldenrod;"><img src="assets/icons/home.png" width="50" height="50"></a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <?php


                                if(isset($_SESSION['id'])){
                                    if($page != "chat"){
                                        echo '<a class="nav-link" href="index.php?page=chat"><img src="assets/icons/chat.png" width="50" height="50"></a>';
                                    }
                                }
                            ?>
                        </li>
                        <li>
                        <?php
                            if(isset($_SESSION['id'])){
                                if($page != "forum"){
                                    echo '  <li>
                                                <a class="nav-link" href="index.php?page=forum"><img src="assets/icons/forum.png" width="50" height="50"></a>
                                            </li>';
                                }
                            }
                        ?>
                        </li>
                        <li>
                            <?php
                            if(isset($_SESSION['id'])) {
                                if ($page == "forum") {
                                    echo '
                                    <form class="form-inline my-2 my-lg-0" >
                                        <input class="form-control mr-sm-2" type = "search" placeholder = "Search" aria - label = "Search" >
                                        <button class="btn btn-outline-success my-2 my-sm-0" type = "submit" ><img src = "assets/icons/search.png" width = "50" height = "50" > Search</button >
                                    </form >';
                                }
                            }
                            ?>
                        </li>
                        <li>
                            <?php
                            if(isset($_SESSION['id'])){
                                echo'
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/icons/user.png" width="50" height="50"></button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="nav-link" href="index.php?page=profile"><img src="assets/icons/profile.png" width="50" height="50"> Profile</a>
                                            <a class="nav-link" href="index.php?page=mailbox"><img src="assets/icons/mailbox.png" width="50" height="50">Notifications</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="nav-link" href="index.php?page=login&action=logout"><img src="assets/icons/logout.png" width="50" height="50"> Logout</a>
                                        </div>
                                    </div>';
                            }
                            else{
                                echo'
                                <a class="nav-link" href="index.php?page=login&action=login"><img src="assets/icons/login.png" width="50" height="50"> Login/Registration</a>
                                ';
                            }
                            ?>
                        </li>
                    </ul>

            </div>
</nav>
</head>