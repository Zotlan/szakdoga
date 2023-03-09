<?php
include "layout/head.php";
?>
    <div class="uv">
        <section class="toolbar sticky-top">
            <div class="searchbar">
                <form>
                    <input class="s-bar" type="search" placeholder="Search" aria-label="Search">
                    <button class="s-button" type="submit"><img src="assets/icons/search.png"></button >
                </form>
            </div>
            <button class="collapsible">Categories:</button>
            <div class="content">
                <?php
                for($i=0; $i<$Cats; $i++){
                    $CatName = $forum->checkCategoryName($CatID[$i]);
                    echo '
                    <a href="">'.$CatName.'</a><br>
                    ';
                }
                ?>
            </div>
            <br>
            <div>
                <div class="button-pos">
                    <button class="p-button" onclick="document.getElementById('id01').style.display='block'">Post</button>
                </div>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <div class="container">
                                <input type="text" name="postTitle" required><br>
                                <input type="text" name="postContent" required><br>
                                <select name="postCategory" required>
                                    <option value="" disabled selected>Choose category</option>
                                    <?php
                                    for($i=0; $i<$Cats; $i++){
                                        $CatName = $forum->checkCategoryName($CatID[$i]);
                                        echo'
                                        <option value="'.$CatID[$i].'">'.$CatName.'</option>
                                        ';
                                    }
                                    ?>
                                </select><br>
                                <input type="submit" name="sendPost" id="sendPost">
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="posts">
            <?php
            for($i=0; $i<$numberOfPosts; $i++){
                $posterID = $forum->checkPosterID($postID[$i]);
                $posterName = $forum->checkPosterName($postID[$i]);
                $postTitle = $forum->checkPostTitle($postID[$i]);
                $CatName = $forum->checkCategoryName($CatID[$i]);
                $postContent = $forum->checkPostContent($postID[$i]);
                echo '
                <a class="post" href="">
                    <div class="post-content">
                        <div class="post-header">
                            <div class="post-name">'.$postTitle.'</div>
                            <div class="post-category">Category: '.$CatName.'</div>
                        </div>
                        <div class="post-body">
                            <div>'.$postContent.'</div>
                        </div>
                    </div>
                </a>
                ';
            }
            ?>
        </section>

        <section class="void"></section>
    </div>
<?php
include "layout/footer.php";
?>