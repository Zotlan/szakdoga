<?php
include "layout/head.php";
?>
<!-- This UI is based on a template at https://blog.stackfindover.com/chat-box-design-html-css/ made by Thomas d’Aubenton, but I have excessively modified it, css included.-->
    <div class="uiv">
        <div class="uv">
            <section class="chatrooms chat_scroller">
                <?php

                $NoR = $rooms;//the number of public rooms in the database



                for($i=0; $i<$NoR; $i++){
                    $chatName = $chat->checkRoomNames($i+1);
                    echo '
                    <div class="chatroom">
                        <div class="room_name">'.($chatName).'</div>
                        <!--<div class="notify"></div >-->
                    </div >';
                }
                ?>
            </section>
            <section class="chat">
                <div class="room_view chat_scroller">
                    <?php
                    for($i=0; $i<100; $i++){
                        echo
                        '<div class="message">
                            <img class="photo" src="" alt="">
                            <div class="message_text">Example message</div>
                        </div>';
                    }
                    ?>
                </div>
                <div class="footer-chat">
                    <input type="text" class="message_field" placeholder="Type your message here">
                    <a class="send_button" href=""><img src="assets/icons/send.png"></a>
                </div>
            </section>
        </div>
    </div>
<?php
include 'view/layout/footer.php';
?>