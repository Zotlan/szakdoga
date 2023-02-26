<?php
include "layout/head.php";
?>
<!-- This UI is based on a template at https://blog.stackfindover.com/chat-box-design-html-css/ made by Thomas d’Aubenton, but I have excessively modified it, css included.-->
    <div class="uiv">
        <div class="uv">
            <section class="chatrooms scroller">
                <?php
                for($i=0; $i<100; $i++){
                    echo '
                    <div class="chatroom">
                        <img class="photo" src="" alt="">
                        <div class="desc-contact" >
                            <p class="room_name">Name of chatroom</p >
                        </div>
                        <div class="notify">appears if there is an unread message</div >
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
                            <p class="message_text">Example message</p>
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