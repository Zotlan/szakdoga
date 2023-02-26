<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <?php
        $page = "";
        $page = $_REQUEST['page'] ?? "";
        if($page == "chat"){
            echo '<link rel="stylesheet" href="assets/css/chat_style.css">';
        }
        ?>
</head>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">

    <div class="container-fluid" id="navbarSupportedContent">

        <a class="navbar-brand" href="index.php" style="color: goldenrod;"><img src="assets/icons/home.png" width="50" height="50"></a>
        <ul class="navbar-nav mr-auto flex-row d-flex">
                <?php
                if(isset($_SESSION['id'])){
                    if($page != "chat"){
                        echo '
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=chat"><img src="assets/icons/chat.png" width="50" height="50"></a>
                            </li>';
                    }
                }
                if(isset($_SESSION['id'])){
                    if($page != "forum"){
                        echo '  
                              <li class="nav-item">
                                  <a class="nav-link" href="index.php?page=forum"><img src="assets/icons/forum.png" width="50" height="50"></a>
                              </li>';
                    }
                }
                ?>
        </ul>
        <?php
        if(isset($_SESSION['id'])){
            echo'
                                    <div class="btn-group dropdown" aria-haspopup="true" aria-expanded="false">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                                        if (file_exists('assets/profile_pictures/'.$_SESSION['username'].'.jpg')) {
                                        echo '<img class="ppic" src="assets/profile_pictures/'.$_SESSION['username'].'.jpg" width="50" height="50">';
                                        } else {
                                            echo '<img class="ppic" src="assets/icons/user.png" width="50" height="50">';
                                        }
                                        echo
                                        '</button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="nav-link" href="index.php?page=profile"><img src="assets/icons/profile.png" width="50" height="50"> Profile</a>
                                            <a class="nav-link" href="index.php?page=mailbox"><img src="assets/icons/mailbox.png" width="50" height="50">Notifications</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="nav-link" href="index.php?page=login&action=logout"><img src="assets/icons/logout.png" width="50" height="50"> Logout</a>
                                        </div>
                                    </div>';
        }
        else{
            echo'
                                <a class="nav-link" href="index.php?page=login&action=login"><img src="assets/icons/login.png" width="50" height="50">Login</a>
                                ';
        }
        ?>
    </div>
</nav>