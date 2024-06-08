<?php
include 'db_connect.php'; // Veritabanı bağlantısı

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı email adresini al
    $delete_username = $_POST['delete_username'];

    // SQL sorgusu ile kullanıcıyı sil
    $sql = "DELETE FROM users WHERE useremail = ?";

    // Hazır ifadeler kullanarak SQL sorgusunu hazırla
    $stmt = $baglan->prepare($sql);

    // Değişkenleri bağla
    $stmt->bind_param("s", $delete_username);

    // Sorguyu çalıştır
    if ($stmt->execute()) {
        echo "Kullanıcı başarıyla silindi.";
        header("Location: http://localhost/ADMIN/adminpanel/kullaniciislemleri.php");
        exit();
    } else {
        echo "Kullanıcı silinirken hata oluştu: " . $stmt->error;
    }

    // Sorguyu kapat
    $stmt->close();
}
?>
