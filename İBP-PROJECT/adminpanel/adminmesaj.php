<?php
// Veritabanı bağlantı dosyasını içe aktar

include 'C:/xampp/htdocs/ADMIN/phpdatabase/db_connect.php'; 
include 'C:/xampp/htdocs/ADMIN/phpdatabase/send_message.php'; 
include 'C:/xampp/htdocs/ADMIN/phpdatabase/admin_login.php'; 

// Admin oturumunu başlatın


// Oturumdan admin e-posta adresini alın
$admin_email = $_SESSION['email'];

// Gönderilen mesajları getir
$sql_messages = "SELECT * FROM messages";
$result_messages = $baglan->query($sql_messages);

// Mesajları depolamak için bir dizi oluşturun
$messages = array();

if ($result_messages->num_rows > 0) {
    while($row = $result_messages->fetch_assoc()) {
        if ($row["sender_email"] == $admin_email) {
            $messages[] = '<div class="message-box sent"><p>' . $row["message"] . '</p></div>';
        } else {
            $messages[] = '<div class="message-box"><p>' . $row["message"] . '</p></div>';
        }
    }
} else {
    $messages[] = "Henüz mesaj yok.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mesajlaşma Sayfası</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
  }
  
  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .message-box {
    background-color: #f9f9f9;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
  }
  
  .message-box.sent {
    text-align: right;
  }
  
  textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: none;
  }
  
  button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
</head>
<body>
<?php include 'C:/xampp/htdocs/ADMIN/menu.php'; ?>


<div class="container">
    <?php
    // Mesajları ekrana yazdır
    foreach ($messages as $message ) {  
        echo $message;
    }
    ?>
    
  <!-- Admin'e mesaj gönderme alanı -->
  <textarea id="message" name="message" rows="4" placeholder="Mesajınızı buraya yazın..."></textarea>
  <button onclick="sendMessage()">Gönder</button>
</div>

<script>
function sendMessage() {
  var message = document.getElementById("message").value;
  if (message.trim() !== "") {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var messageBox = document.createElement("div");
        messageBox.classList.add("message-box", "sent");
        messageBox.innerHTML = "<p>" + message + "</p>";
        document.querySelector(".container").appendChild(messageBox);
        document.getElementById("message").value = "";
      }
    };
    xmlhttp.open("POST", "http://localhost/ADMIN/phpdatabase/send_message.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("message=" + message);
  }
}
</script>
</body>
</html>
