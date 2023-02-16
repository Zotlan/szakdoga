<!-- The popup window is from w3schools cause I'm not gonna bother with something this trivial, it is for the live chat -->
<?php
    $page = "";

    $page = $_REQUEST['page'] ?? "";

    if(isset($_SESSION['id'])) {
        if ($page != "chat") {
            echo '
                <button class="open-button" onclick="openForm()">Chat</button>
                
                <div class="chat-popup" id="myForm">
                  <form action="/action_page.php" class="form-container">
                    <h1>Chat</h1>
                    <label for="msg"><b>Message</b></label>
                    <textarea placeholder="Type message.." name="msg" required></textarea>
                
                    <button type="submit" class="btn "><img src="assets/icons/send.png" width="20" height="20"></button>
                    <button type="button" class="btn cancel" onclick="closeForm()"><img src="assets/icons/close.png" width="20" height="20"></button>
                  </form>
                </div>
                
                <script>
                function openForm() {
                  document.getElementById("myForm").style.display = "block";
                }
                
                function closeForm() {
                  document.getElementById("myForm").style.display = "none";
                }
                </script>';
        }
    }
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
