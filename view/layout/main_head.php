<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; border-bottom-style: solid; border-color: goldenrod; ">
            <a class="navbar-brand" href="index.php" style="color: goldenrod;">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="color: goldenrod;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: goldenrod;">Chat</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: goldenrod;">
                    Forum
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
                        <?php
                        echo '<a class="dropdown-item" href="index.php?page=forum" style="color: goldenrod;">Main</a>';
                        echo '<a class="dropdown-item" href="#" style="color: goldenrod;">Math</a>';
                        echo '<a class="dropdown-item" href="#" style="color: goldenrod;">Literature</a>';
                        echo '<a class="dropdown-item" href="#" style="color: goldenrod;">Biology</a>';
                        ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: goldenrod;">Profile</a>
                </li>
                <li>
                <?php
                    if(isset($_SESSION['id'])){
                        echo '<a class="nav-link" href="index.php?page=user&action=logout" style="color: goldenrod;">Logout</a>';
                    }
                    else{
                        echo '<a class="nav-link" href="index.php?page=user&action=login" style="color: goldenrod;">Login</a>';
                    }
                    ?>
                    
                </li>
                </ul>
            </div>
</nav>
</head>