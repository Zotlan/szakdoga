<?php
include "layout/head.php";
?>

<div class="grid-container">
    <div class="roomlist"> <!--List of chatrooms-->
        <div class="chatroom">
            
        </div>
        <br>
        <?php
            for($i=0; $i<9; $i++){
                echo'
                <div class="chatroom">
                    
                </div>
                <br>
                ';
            }
        ?>
    </div>
    <div class="roomview">

    </div>
    <div class="toolbar">

    </div>
</div>



<?php
include 'view/layout/footer.php';
?>