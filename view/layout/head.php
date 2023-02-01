<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; border-bottom-style: solid; border-color: goldenrod; ">

            <div class="collapse navbar-collapse flex-container" id="navbarSupportedContent">
                <div>
                    <a class="navbar-brand" href="index.php" style="color: goldenrod;"><img src="assets/icons/home.png" width="50" height="50"></a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <?php
                                $page = "";

                                $page = $_REQUEST['page'] ?? "";

                                if(isset($_SESSION['id'])){
                                    if($page != "chat"){
                                        echo '<a class="nav-link" href="index.php?page=chat" style="color: goldenrod;"><img src="assets/icons/chat.png" width="50" height="50"></a>';
                                    }
                                }
                            ?>
                        </li>
                        <li>
                        <?php
                            if(isset($_SESSION['id'])){
                                if($page != "forum"){
                                    echo '  <li>
                                                <a class="nav-link" href="index.php?page=forum" style="color: goldenrod;"><img src="assets/icons/forum.png" width="50" height="50"></a>
                                            </li>';
                                }
                            }
                        ?>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li>
                            <?php
                            if(isset($_SESSION['id'])){
                                echo'
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/icons/user.png" width="50" height="50">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item">Action</a>
                                        <a class="dropdown-item">
                                        <a class="nav-link" href="index.php?page=profile" style="color: goldenrod;"><img src="assets/icons/profile.png" width="50" height="50"></a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="nav-link" href="index.php?page=login&action=logout" style="color: goldenrod;"><img src="assets/icons/logout.png" width="50" height="50"> Logout</a>
                                        </div>
                                    </div>';
                            }
                            else{
                                echo'
                                <a class="nav-link" href="index.php?page=login&action=login" style="color: goldenrod;"><img src="assets/icons/login.png" width="50" height="50"> Login/Registartion</a>
                                ';
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
</nav>
</head>