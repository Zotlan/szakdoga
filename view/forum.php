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
            <?php
            //This modal was created using the tutorial under this link:https://www.webdesignerdepot.com/2012/10/creating-a-modal-window-with-html5-and-css3/
            ?>
            <div>
            <a href="#openModal">Post</a>

            <div id="openModal" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <form action="">
                        <input type="text">
                        <input type="text">
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
            <br>

            <button class="collapsible">Categories:</button>
            <div class="content">
                <?php
                for($i=0; $i<$Cats; $i++){
                    echo '
                    <a href="">Example category</a><br>
                    ';
                }
                ?>
            </div>
        </section>

        <section class="posts">
            <?php
            for($i=0; $i<$numberOfPosts; $i++){
                echo '
                <a class="post" href="">
                <div class="post-content">
                    <div class="post-header">
                        <div class="post-name">Example Post Name</div>
                        <div class="post-category">Category: Example</div>
                    </div>
                    <div class="post-body">
                        <div></div>
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