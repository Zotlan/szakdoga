<?php
if(!isset($_SESSION['id'])) {
    header("Location: index.php?page=login&action=login");
    exit();
}
else{
    header("Location: index.php?page=forum");
    exit();
}