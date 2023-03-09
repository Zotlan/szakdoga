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
                        <!--<div class="notify"></div >-->
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
                            <button type="button" class="createRoomButton" data-toggle="modal" data-target="#inviteUserModal">
                                Create Room
                            </button>
                            ';
                            }
                            ?>
                            <?php
                            if($currentRoom == $ownedRoom){
                                echo'
                            <button type="button" class="createRoomButton" data-toggle="modal" data-target="#inviteUserModal">
                                Invite User
                            </button>
                            ';
                            }
                            ?>
                    </div>
                </div>
                <div class="modal" id="inviteUserModal">
                    <div class="room_creator modal-dialog">
                        <div class="room_creator modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title">Create Your Own private Room!</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <form action="" method="post">
                                    <label for="roomName" > Room name:</label><br>
                                    <input type = "text" id = "roomName" name="roomName">
                                    <input type = "submit" name = "create">
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <div class="modal" id="inviteUserModal">
                <div class="room_creator modal-dialog">
                    <div class="room_creator modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title">Invite Your Friends To Your Room!</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form action="" method="post">
                                <label for="userName">User Name:</label><br>
                                <input type="text" id="userName" name="invited">
                                <input type="submit" name="invite">
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
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
                <div>
                    <button class="openbtn" onclick="openNav()">☰ Toggle Rooms</button>  
                </div>
                    <div>
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