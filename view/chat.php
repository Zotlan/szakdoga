<?php
include "layout/head.php";
?>
<?php
//This UI is based on a template at https://blog.stackfindover.com/chat-box-design-html-css/ made by Thomas d’Aubenton, but I have excessively modified it, css included.
?>
    <div class="uiv">
        <div class="uv">
            <div id="mySidepanel" class="sidepanel">
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
                    </div>
                    <div class="roomManagement">
                        <?php
                            echo'
                                <button type="button" class="createRoomButton" id="createRoomButton" onclick="document.getElementById('.htmlspecialchars("'roomModal'").').style.display='.htmlspecialchars("'flex'").'">
                                    Create Room
                                </button>
                                ';
                        if($currentRoom == $ownedRoom){
                            echo'
                                <button type="button" class="createRoomButton" id="createRoomButton" onclick="document.getElementById('.htmlspecialchars("'inviteModal'").').style.display='.htmlspecialchars("'flex'").'">
                                        Add User
                                </button>
                                <button type="button" class="createRoomButton" id="createRoomButton" onclick="document.getElementById('.htmlspecialchars("'removeModal'").').style.display='.htmlspecialchars("'flex'").'">
                                        Remove User
                                </button>
                                <button type="button" class="createRoomButton" id="createRoomButton" onclick="document.getElementById('.htmlspecialchars("'deleteModal'").').style.display='.htmlspecialchars("'flex'").'">
                                        Delete Room
                                </button>
                                ';
                        }
                        ?>
                    </div>
                </div>
            <div id="roomModal" class="modal">
                    <form class="modal-content animate" action="" method="post">
                        <div>
                            <span onclick="document.getElementById('roomModal').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container">
                            <label for="roomName"> Room name:</label><br>
                            <input type="text" id="roomName" name="roomName" required>
                            <input type="submit" name="create" value="Create">
                        </div>
                    </form>
                </div>
            <div id="inviteModal" class="modal">
                    <form class="modal-content animate" action="" method="post">
                        <div>
                            <span onclick="document.getElementById('inviteModal').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container">
                            <label for="userName">User Name:</label><br>
                            <input type="text" id="userName" name="invited" required>
                            <input type="submit" name="add" value="Add">
                        </div>
                    </form>
                </div>
            <div id="removeModal" class="modal">
                    <form class="modal-content animate" action="" method="post">
                        <div>
                            <span onclick="document.getElementById('removeModal').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container">
                            <label for="toBeRemoved">Who Do You Wish To Remove:</label>
                            <select id="toBeRemoved" name="toBeRemoved" required style=" min-width: 100px">
                                <option value="" disabled selected></option>
                                <?php
                                for($i=0; $i<$memberNumber; $i++){
                                    $memberName = $chat->checkMemberNames($memberIDs[$i]);
                                    echo'
                                        <option value="'.$memberIDs[$i].'">'.$memberName.'</option>
                                    ';
                                }
                                ?>
                            </select>
                            <input type="submit" name="remove" value="Remove">
                        </div>
                    </form>
                </div>
            <div id="deleteModal" class="modal">
                    <form class="modal-content animate" action="" method="post">
                        <div>
                            <?php
                            echo '
                            Are You Sure That You Wish To Delete The Room Called:'.$currentRoomName.'?
                            ';
                            ?>
                        </div>
                        <div>
                            <button class="confirm" name="delete">
                                Yes
                            </button>
                            <button class="deconfirm" onclick="document.getElementById('deleteModal').style.display='none'">
                                No
                            </button>
                        </div>
                    </form>
                </div>
            <section class="chat">
                <div class="room_view chat_scroller" id="room_view">
                    <?php
                    for($i=0; $i<$roomMessages; $i++){
                        $userID = $chat->checkMessageSenderID($messageIDs[$i]);
                        if (file_exists('assets/profile_pictures/'.$userID.'.jpg')) {
                            $userPic = $userID;
                        } else {
                            $userPic = "default";
                        }
                        $userName = $chat->checkMessageSenderName($messageIDs[$i]);
                        $text = $chat->checkMessageText($messageIDs[$i], $_REQUEST['currentRoom']);
                        echo'
                            <div class="message-complete">
                                <div>
                                    <img class="photo" src="assets/profile_pictures/'.$userPic.'.jpg" alt="">
                                </div>
                                <div class="message">
                                    <div class="sender_name">'.$userName.'</div>
                                    <div class="message_text">'.$text.'</div>
                                </div>
                            </div>
                            ';}
                    ?>
                </div>
                <?php
                echo '
                <div class="footer-chat">
                <div class="button_ui_position">
                    <button class="openbtn" onclick="toggleNav()">☰ <br> Rooms</button>  
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