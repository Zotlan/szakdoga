<?php
include "layout/head.php";
?>


    <form action="index.php?page=profile&action=upload" method="post" enctype="multipart/form-data">
        <input type="file" name="profilePic" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        <input type="hidden" name="page" value="profile">
        <input type="hidden" name="action" value="upload">
    </form>



















<?php
include 'view/layout/footer.php';
?>