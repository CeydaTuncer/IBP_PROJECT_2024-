<?php
// Veritabanı bağlantısını içe aktar
include 'C:/xampp/htdocs/ADMIN/phpdatabase/db_connect.php';

// Formdan gelen verileri al
$email = $_POST['email'];
$newPassword = $_POST['newpsw'];
$newPasswordRepeat = $_POST['newpsw-repeat'];

// Yeni şifrelerin eşleşip eşleşmediğini kontrol et
if ($newPassword !== $newPasswordRepeat) {
    echo "Yeni şifreler eşleşmiyor. Lütfen tekrar deneyin.";
    exit;
}

// Kullanıcının şifresini güncelle
$sql = "UPDATE users SET password = ? WHERE email = ?";
$statement = $baglan->prepare($sql);
$statement->bind_param('ss', $newPassword, $email);

if ($statement->execute()) {
    echo "Şifre başarıyla güncellendi.";
} else {
    echo "Şifre güncelleme işlemi başarısız oldu: " . $baglan->error;
}

// Bağlantıyı kapat
$statement->close();
$baglan->close();
?>
