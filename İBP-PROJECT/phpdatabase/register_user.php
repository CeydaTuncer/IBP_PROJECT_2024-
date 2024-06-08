<?php
include 'C:/xampp/htdocs/ADMIN/phpdatabase/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $userlastname = $_POST['userlastname'];
    $userpassword = $_POST['userpassword'];
    $repeatpassword = $_POST['repeatpassword'];
    $useremail = $_POST['useremail'];
    $role = 'user'; // Varsayılan rol

    // Şifrelerin eşleşip eşleşmediğini kontrol et
    if ($userpassword !== $repeatpassword) {
        echo "Şifreler eşleşmiyor!";
        exit;
    }

    // SQL sorgusu ile kullanıcıyı ekleyin
    $sql = "INSERT INTO users (username, userlastname, userpassword, repeatpassword, useremail, role) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Hazır ifadeler kullanarak SQL sorgusunu hazırla
    $stmt = $baglan->prepare($sql);

    // Değişkenleri bağla
    $stmt->bind_param("ssssss", $username, $userlastname, $userpassword, $repeatpassword, $useremail, $role);

    // Sorguyu çalıştır
    if ($stmt->execute()) {
        header("Location: http://localhost/ADMIN/adminpanel/kullaniciislemleri.php");
        exit();
    } else {
        echo "Kullanıcı eklenirken hata oluştu: " . $stmt->error;
    }
   
}
?>
