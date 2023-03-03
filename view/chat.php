<?php
include "layout/head.php";
?>
<!-- This UI is based on a template at https://blog.stackfindover.com/chat-box-design-html-css/ made by Thomas d’Aubenton, but I have excessively modified it, css included.-->
    <div class="uiv">
        <div class="uv">
            <section class="chatrooms chat_scroller">
                <?php
                for($i=0; $i<$rooms; $i++){
                    $chatName = $chat->checkRoomNames($roomIDs[$i]);
                    echo '
                    <a href="index.php?page=chat&currentRoom='.($roomIDs[$i]).'">
                    <div class="chatroom">
                        <div class="room_name">'.($chatName).'</div>
                        <!--<div class="notify"></div >-->
                    </div >
                    </a>';
                }
                ?>
                <div class="footer-rooms">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#creatRoomModal">
                        Create Room
                    </button>
                    <div class="modal" id="creatRoomModal">
                        <div class="room_creator modal-dialog">
                            <div class="room_creator modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Create Your Own Private Room!</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="">
                                        <label for="roomName">Room name:</label><br>
                                        <input type="text" id="roomName">
                                        <input type="submit">
                                    </form>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="chat">
                <div class="room_view chat_scroller">
                    <?php
                    for($i=0; $i<$roomMessages; $i++){
                            $userName = $chat->checkMessageSender($messageIDs[$i]);
                            $text = $chat->checkMessageText($messageIDs[$i], $_REQUEST['currentRoom']);
                            echo
                                '<div class="message">
                                    <img class="photo" src="assets/profile_pictures/' . ($userName) . '.jpg" alt="">
                                    <div class="message_text">' . ($text) . '</div>
                                </div>';
                    }
                    ?>
                </div>
                <?php
                //$rand=rand();
                //$_SESSION['rand']=$rand;
                echo '
                <form class="footer-chat" action="" method="post">
                    <input type="text" class="message_field" name="message_field" placeholder="Type your message here" required>
                    <!-- <input class="send_button" type="submit" name="send_message" value="submit"> -->
                    <button class="send_button" type="submit" name="send_message" value="submit"><img src="assets/icons/send.png"></button>
                    <input type="hidden" name="action" value="send">
                    <input type="hidden" name="page" value="chat">
                    <input type="hidden" name="currentRoom" value="'.$_REQUEST['currentRoom'].'">
                </form>';
                //if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])
                //{
                    // Your code here
                //}
                ?>
            </section>
        </div>
    </div>
<?php
include 'view/layout/footer.php';
?>