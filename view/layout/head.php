<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
        <link rel="stylesheet" href="assets/css/style.css">

=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
        <link rel="stylesheet" href="assets/css/style.css">

=======
>>>>>>> Stashed changes
        <link rel="stylesheet" href="style.css">

<<<<<<< Updated upstream
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
=======
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
        <nav class="navbar navbar-expand-lg navbar-dark">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; border-bottom-style: solid; border-color: goldenrod; ">

            <div class="collapse navbar-collapse flex-container" id="navbarSupportedContent">
                <div>
<<<<<<< Updated upstream
=======
>>>>>>> 6801f796cc29c0f8c0f5d971e7b8724c91e0b0cb
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
                    <a class="navbar-brand" href="index.php" style="color: goldenrod;"><img src="assets/icons/home.png" width="50" height="50"></a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <?php
                                $page = "";

                                $page = $_REQUEST['page'] ?? "";

                                if(isset($_SESSION['id'])){
                                    if($page != "chat"){
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
                                        echo '<a class="nav-link" href="index.php?page=chat"><img src="assets/icons/chat.png" width="50" height="50"></a>';
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
                                        echo '<a class="nav-link" href="index.php?page=chat"><img src="assets/icons/chat.png" width="50" height="50"></a>';
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
                                        echo '<a class="nav-link" href="index.php?page=chat" style="color: goldenrod;"><img src="assets/icons/chat.png" width="50" height="50"></a>';
=======
<<<<<<< HEAD
                                        echo '<a class="nav-link" href="index.php?page=chat"><img src="assets/icons/chat.png" width="50" height="50"></a>';
=======
                                        echo '<a class="nav-link" href="index.php?page=chat" style="color: goldenrod;"><img src="assets/icons/chat.png" width="50" height="50"></a>';
>>>>>>> 6801f796cc29c0f8c0f5d971e7b8724c91e0b0cb
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
                                    }
                                }
                            ?>
                        </li>
                        <li>
                        <?php
                            if(isset($_SESSION['id'])){
                                if($page != "forum"){
                                    echo '  <li>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
                                                <a class="nav-link" href="index.php?page=forum"><img src="assets/icons/forum.png" width="50" height="50"></a>
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
                                                <a class="nav-link" href="index.php?page=forum"><img src="assets/icons/forum.png" width="50" height="50"></a>
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
                                                <a class="nav-link" href="index.php?page=forum" style="color: goldenrod;"><img src="assets/icons/forum.png" width="50" height="50"></a>
=======
<<<<<<< HEAD
                                                <a class="nav-link" href="index.php?page=forum"><img src="assets/icons/forum.png" width="50" height="50"></a>
=======
                                                <a class="nav-link" href="index.php?page=forum" style="color: goldenrod;"><img src="assets/icons/forum.png" width="50" height="50"></a>
>>>>>>> 6801f796cc29c0f8c0f5d971e7b8724c91e0b0cb
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
                                            </li>';
                                }
                            }
                        ?>
                        </li>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
                    </ul>
                </div>
                <div>
                    <ul>
<<<<<<< Updated upstream
=======
>>>>>>> 6801f796cc29c0f8c0f5d971e7b8724c91e0b0cb
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
                        <li>
                            <?php
                            if(isset($_SESSION['id'])){
                                echo'
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="assets/icons/user.png" width="50" height="50">
                                        </button>
<<<<<<< Updated upstream
                                        <div class="dropdown-menu">
=======
<<<<<<< HEAD
                                        <div class="dropdown-menu dropdown-menu-end">
=======
                                        <div class="dropdown-menu">
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
                                            <a class="nav-link" href="index.php?page=profile"><img src="assets/icons/profile.png" width="50" height="50"> Profile</a>
                                            
                                            <div class="dropdown-divider"></div>
                                            <a class="nav-link" href="index.php?page=login&action=logout"><img src="assets/icons/logout.png" width="50" height="50"> Logout</a>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
>>>>>>> 6801f796cc29c0f8c0f5d971e7b8724c91e0b0cb
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
                                        </div>
                                    </div>';
                            }
                            else{
                                echo'
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
                                <a class="nav-link" href="index.php?page=login&action=login"><img src="assets/icons/login.png" width="50" height="50"> Login/Registartion</a>
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
                                <a class="nav-link" href="index.php?page=login&action=login"><img src="assets/icons/login.png" width="50" height="50"> Login/Registartion</a>
=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
                                <a class="nav-link" href="index.php?page=login&action=login" style="color: goldenrod;"><img src="assets/icons/login.png" width="50" height="50"> Login/Registartion</a>
=======
<<<<<<< HEAD
                                <a class="nav-link" href="index.php?page=login&action=login"><img src="assets/icons/login.png" width="50" height="50"> Login/Registartion</a>
=======
                                <a class="nav-link" href="index.php?page=login&action=login" style="color: goldenrod;"><img src="assets/icons/login.png" width="50" height="50"> Login/Registartion</a>
>>>>>>> 6801f796cc29c0f8c0f5d971e7b8724c91e0b0cb
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
                                ';
                            }
                            ?>
                        </li>
                    </ul>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD

=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
<<<<<<< HEAD

=======
>>>>>>> Stashed changes
<<<<<<< Updated upstream
                </div>
=======
<<<<<<< HEAD

=======
                </div>
>>>>>>> 6801f796cc29c0f8c0f5d971e7b8724c91e0b0cb
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> 9422ec84c1c1a25915d21fb56829e930e763ddc4
>>>>>>> Stashed changes
            </div>
</nav>
</head>