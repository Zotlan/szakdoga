<?php
include "layout/head.php";
?>
<div class="uv">
    <div class="profile_ui">
        <form class="profile_pic_ui" action="" method="post" enctype="multipart/form-data">
            <div class="profile_pic">
                <div>
                    <div>
                        <label for="fileToUpload">
                            <?php
                                echo '
                                    <img class="photo" src="assets/profile_pictures/'.$userPic.'.jpg" alt="">
                                ';
                            ?>
                        </label>
                    </div>
                    <div>

                    </div>
                </div>
                <div class="photo_form">
                    <input class="form-control d-none" type="file" id="fileToUpload" name="fileToUpload">
                    <label for="uploadFile">Update Profile Picture</label><br>
                    <input class="form-control d-none" type="submit" id="uploadFile" name="ppUpload">
                </div>
                <div class="photo_form">
                    <?php
                    echo $uploadResponse;
                    ?>
                </div>
            </div>
        </form>
        <div class="update_tabs">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'username')" id="defaultOpen">Username</button>
                <button class="tablinks" onclick="openTab(event, 'email')">Email</button>
                <button class="tablinks" onclick="openTab(event, 'password')">Password</button>
            </div>

            <div id="username" class="tabcontent">
                <div class="updateTitle">
                    <h5>Change Your Username</h5>
                </div>
                <div class="updateForm">
                    <form action="" method="post">
                        <div>
                            <input type="text" name="username">
                        </div>
                        <div>
                            <input type="submit" name="changeName">
                        </div>
                    </form>
                </div>
                <div class="updateResponse">
                    <?php
                    echo $updateResponse;
                    ?>
                </div>
            </div>

            <div id="email" class="tabcontent">
                <div class="updateTitle">
                    <h5>Change Your Email</h5>
                </div>
                <div class="updateForm">
                    <form action="" method="post">
                        <div>
                            <input type="text" name="email">
                        </div>
                        <div>
                            <input type="submit" name="changeEmail">
                        </div>
                    </form>
                </div>
                <div class="updateResponse">
                    <?php
                    echo $updateResponse;
                    ?>
                </div>
            </div>

            <div id="password" class="tabcontent">
                <div class="updateTitle">
                    <h5>Change Your Password</h5>
                </div>
                <div class="updateForm">
                    <form action="" method="post">
                        <div>
                            <input type="text" name="password">
                        </div>
                        <div>
                            <input type="submit" name="changePass">
                        </div>
                    </form>
                </div>
                <div class="updateResponse">
                    <?php
                    echo $updateResponse;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'view/layout/footer.php';
?>