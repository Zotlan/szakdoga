<?php
include "layout/head.php";
?>
    <div class="uv">
        <section class="toolbar">
            <div class="tools">
                <div class="searchbar">
                    <form>
                        <input class="s-bar" type="search" placeholder="Search" aria-label="Search">
                        <button class="s-button" type="submit"><img src="assets/icons/search.png"></button >
                    </form>
                </div>
                <div class="collapsible-pos">
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
                </div>
            </div>
            <div class="button-pos">
                <div>
                    <button class="p-button" onclick="document.getElementById('id01').style.display='block'">Post</button>
                </div>
            </div>
            <div id="id01" class="modal">

                <form class="modal-content animate" action="" method="post">
                    <div class="close-container">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="container">
                        <div>
                            <div class="container-form">
                                <div>
                                    <label for="postTitle">Give the Post a Title:</label><br>
                                    <input type="text" name="postTitle" required><br>
                                    <label for="postContent">The Content of the Post:</label><br>
                                    <textarea id="postContent" name="postContent" rows="4" required></textarea><br>
                                    <label for="postCategory">Select a Category:</label><br>
                                    <select name="postCategory" required>
                                        <option value="" disabled selected></option>
                                        <?php
                                        for($i=0; $i<$Cats; $i++){
                                            $CatName = $forum->checkCategoryName($CatID[$i]);
                                            echo'
                                                <option value="'.$CatID[$i].'">'.$CatName.'</option>
                                                ';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="modal-button-pos">
                                <input type="submit" name="sendPost" id="sendPost">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="posts">
            <div>
                <?php
                    if($numberOfPosts != 0) {
                        $postID = $forum->checkPostID();
                    }
                    for($i=0; $i<$numberOfPosts; $i++){
                    $posterID = $forum->checkPosterID($postID[$i]);
                    $posterName = $forum->checkPosterName($postID[$i]);
                    $postTitle = $forum->checkPostTitle($postID[$i]);
                    $postCatID = $forum->checkPostCat($postID[$i]);
                    $CatName = $forum->checkCategoryName($postCatID);
                    $postContent = $forum->checkPostContent($postID[$i]);
                    echo '
                    <a class="post" href="">
                        <div class="post-content">
                            <div class="post-header">
                                <div class="post-name">'.$postTitle.'</div>
                                <label for="post-category">Category:</label><br>
                                <div class="post-category" id="post-category">'.$CatName.'</div>
                            </div>
                            <div class="post-body">
                                <div>'.$postContent.'</div>
                            </div>
                        </div>
                    </a>
                    ';
                }
                ?>
            </div>
        </section>
    </div>
<?php
include "layout/footer.php";
?>