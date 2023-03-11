<?php
include "layout/head.php";
?>

    <div>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="fileToUpload">
                <?php
                    echo '
                        <img class="profilePic" src="assets/profile_pictures/'.$userPic.'.jpg" alt="">
                    ';
                ?>
            </label><br>
            <input class="form-control d-none" type="file" id="fileToUpload" name="fileToUpload">
            <label for="uploadFile">Upload New Profile Picture</label><br>
            <input class="form-control d-none" type="submit" id="uploadFile" name="ppUpload">
        </form>
    </div>


















<?php
include 'view/layout/footer.php';
?>