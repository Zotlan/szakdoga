<!-- The popup window is from w3schools cause I'm not gonna bother with something this trivial, it is for the live chat -->
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn "><img src="assets/icons/send.png" width="20" height="20"></button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<<<<<<< Updated upstream
=======
>>>>>>> 6801f796cc29c0f8c0f5d971e7b8724c91e0b0cb
>>>>>>> Stashed changes
<<<<<<< Updated upstream
=======
>>>>>>> c762d8e3d497baef9fa1bac296c05f2b4e863c51
>>>>>>> Stashed changes
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
