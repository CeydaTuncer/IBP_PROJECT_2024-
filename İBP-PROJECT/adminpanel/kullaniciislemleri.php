<?php 

include 'C:/xampp/htdocs/ADMIN/phpdatabase/db_connect.php';
include 'C:/xampp/htdocs/ADMIN/phpdatabase/register_user.php';
include 'C:/xampp/htdocs/ADMIN/phpdatabase/delete_user.php';
include 'C:/xampp/htdocs/ADMIN/phpdatabase/update_user.php';


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
  max-width: 1000px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
  margin-bottom: 20px; /* Form arasında boşluk bırakmak için */
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #007bff;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<?php include 'C:\xampp\htdocs\ADMIN\menu.php'; ?>
    <!-- Sayfa içeriği buraya gelecek -->
    <h1 style="text-align: center;">KULLANICI İŞLEMLERİ</h1> <!-- Başlık -->

<!-- Kullanıcı Kayıt Formu -->
<div class="container">
<form method="POST" action="/ADMIN/phpdatabase/register_user.php" >
    <h1 style="margin-left:350px">Kullanıcı Kayıt </h1>
    <hr>
    <label for="email"><b>AD</b></label>
    <input type="text" placeholder="Enter Name" name="username" id="username" required>
    <label for="email"><b>Soyad</b></label>
    <input type="text" placeholder="Enter Surname" name="userlastname" id="username" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="useremail" id="useremail" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="userpassword" id="userpassword" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repeatpassword" id="repeatpassword" required>
    
    <div class="form-check mb-3">
      <label style="margin-top: 30px;" class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Bilgileri Doğru Girdim  
      </label>

      <button type="submit" class="registerbtn">Kullanıcıyı Kaydet </button>
    </div>
  </form>
</div>

<!-- Kullanıcı Silme Formu -->
<div class="container">
        <form method="POST" action="/ADMIN/phpdatabase/delete_user.php">
            <h1 style="margin-left:350px">Kullanıcı Sil </h1>
            <hr>
            <label for="delete_username"><b>Kullanıcı Email</b></label>
            <input type="text" placeholder="Enter Email" name="delete_username" id="delete_username" required>
            <button type="submit" class="registerbtn">Kullanıcıyı Sil </button>
        </form>
    </div>

<!-- Kullanıcı Güncelleme Formu -->
<div class="container">
        <form method="POST" action="/ADMIN/phpdatabase/update_user.php">
            <h1 style="margin-left:350px">Kullanıcı Güncelle</h1>
            <hr>
            <label for="update_username"><b>Kullanıcı Email</b></label>
            <input type="text" placeholder="Enter Email" name="update_username" id="update_username" required>
            <label for="new_password"><b>Yeni Şifre</b></label>
            <input type="password" placeholder="Enter New Password" name="new_password" id="new_password" required>
            <button type="submit" class="registerbtn">Kullanıcıyı Güncelle</button>
        </form>
    </div>

</body>
</html>
