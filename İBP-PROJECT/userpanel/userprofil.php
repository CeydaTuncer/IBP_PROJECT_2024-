
<?php
session_start(); // Oturumları başlat
include 'C:/xampp/htdocs/ADMIN/phpdatabase/db_connect.php'; 
include 'C:/xampp/htdocs/ADMIN/phpdatabase/send_message.php'; 
include 'C:/xampp/htdocs/ADMIN/phpdatabase/user_login.php'; 


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
}

/* Full-width input fields */
input[type=password] {
  width: 100%;
  padding: 12px;
  margin: 6px 0 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for the submit button */
button {
  background-color: #007bff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
</style>
</head>
<body>
<?php include 'C:\xampp\htdocs\ADMIN\usermenu.php'; ?>

<h2 style="text-align:center;">Profil Bilgileri</h2>

<div class="container">
  <form action="update_password.php" method="post">
    <label for="email"><b>Email</b></label>
    <label for="email"><b>Email</b></label>
<input type="text" placeholder="Email adresiniz" name="email" value="<?php echo $_SESSION['useremail']; ?>" required disabled>

    <label for="newpsw"><b>Yeni Şifre</b></label>
    <input type="password" placeholder="Yeni şifrenizi girin" name="newpsw" required>

    <label for="newpsw-repeat"><b>Yeni Şifre Tekrar</b></label>
    <input type="password" placeholder="Yeni şifrenizi tekrar girin" name="newpsw-repeat" required>
        
    <button type="submit">Şifreyi Değiştir</button>
  </form>
</div>

</body>
</html>
