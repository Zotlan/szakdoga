<?php
include "layout/head.php";
?>
<!-- This UI is based on a template at https://blog.stackfindover.com/chat-box-design-html-css/ made by Thomas d’Aubenton, but I have excessively modified it, css included.-->
    <div class="uiv">
        <div class="uv">
            <section class="chatrooms">
                <div id="mySidepanel" class="sidepanel">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <div class="room_list chat_scroller" id="rooms">
                        <?php
                            for($i=0; $i<$publics; $i++){
                                $chatName = $chat->checkRoomNames($publicIDs[$i]);
                                if ($publicIDs[$i] == $currentRoom){
                                    $class = "chatroom-active";
                                }
                                else{
                                    $class = "chatroom";
                                }
                                echo '
                            <a href="index.php?page=chat&currentRoom='.($publicIDs[$i]).'">
                            <div class="'.$class.'">
                            <div class="room_name">'.($chatName).'</div>
                            </div >
                            </a>';
                            }
                            if($privates != 0){
                                for ($i = 0; $i < $privates; $i++) {
                                    $chatName = $chat->checkRoomNames($privateIDs[$i]);
                                    if ($privateIDs[$i] == $currentRoom) {
                                        $class = "chatroom-active";
                                    } else {
                                        $class = "chatroom";
                                    }
                                    echo '
                                        <a href="index.php?page=chat&currentRoom='.($privateIDs[$i]).'">
                                        <div class="'.$class.'">
                                            <div class="room_name">'.($chatName).'</div>
                                        </div >
                                        </a>';
                                }
                            }
                        ?>
                        <?php
                            if($ownedRoom == 0) {
                                echo'
                                <div>
                                <button type="button" class="createRoomButton" id="createRoomButton" onclick="document.getElementById('.htmlspecialchars("'roomModal'").').style.display='.htmlspecialchars("'flex'").'">
                                    Create Room
                                </button>
                                ';
                            }
                        ?>
                        <?php
                            if($currentRoom == $ownedRoom){
                                echo'
                                <button type="button" class="createRoomButton" id="createRoomButton" onclick="document.getElementById('.htmlspecialchars("'inviteModal'").').style.display='.htmlspecialchars("'flex'").'">
                                        Invite User
                                </button>
                                ';
                            }
                        ?>
                    </div>
                </div>
                <div id="roomModal" class="modal">
                    <form class="modal-content animate" action="" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('roomModal').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container">
                            <label for="roomName" > Room name:</label><br>
                            <input type = "text" id = "roomName" name="roomName" required>
                            <input type = "submit" name = "create">
                        </div>
                    </form>
                </div>
                <div id="inviteModal" class="modal">
                    <form class="modal-content animate" action="" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('inviteModal').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container">
                            <label for="userName">User Name:</label><br>
                            <input type="text" id="userName" name="invited" required>
                            <input type="submit" name="invite">
                        </div>
                    </form>
                </div>
            </section>
            <section class="chat">
                <div class="room_view chat_scroller" id="room_view">
                    <?php
                    for($i=0; $i<$roomMessages; $i++){
                        $userName = $chat->checkMessageSender($messageIDs[$i]);
                        $text = $chat->checkMessageText($messageIDs[$i], $_REQUEST['currentRoom']);
                        echo'
                            <div class="message">
                                <img class="photo" src="assets/profile_pictures/' . ($userName) . '.jpg" alt="">
                                <div class="message_text">' . ($text) . '</div>
                            </div>
                            ';}
                    ?>
                </div>
                <?php
                echo '
                <div class="footer-chat">
                <div class="button_ui_position">
                    <button class="openbtn" onclick="openNav()">☰ <br> Rooms</button>  
                </div>
                    <div class="send_ui_position">
                        <form class="send_ui" action="" method="post">
                            <input type="text" class="message_field" name="message_field" placeholder="Type your message here" required>
                            <!-- <input class="send_button" type="submit" name="send_message" value="submit"> -->
                            <button class="send_button" type="submit" name="send_message" value="submit"><img src="assets/icons/send.png"></button>
                            <input type="hidden" name="action" value="send">
                            <input type="hidden" name="page" value="chat">
                            <input type="hidden" name="currentRoom" value="'.$_REQUEST['currentRoom'].'">
                        </form>
                    </div>
                </div>
                ';
                ?>
            </section>
        </div>
<?php
include 'view/layout/footer.php';
?>