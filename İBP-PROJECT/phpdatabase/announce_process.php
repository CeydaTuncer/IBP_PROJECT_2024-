<?php
include 'db_connect.php'; // Veritabanı bağlantısı

// Duyuru ekleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userdemail = $_POST['userdemail'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Veritabanına kaydetme işlemi
    $sql = "INSERT INTO announcements (userdemail, title, content) VALUES (?, ?, ?)";

    // Prepared statement kullanımı
    $stmt = $baglan->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sss", $userdemail, $title, $content);
        if ($stmt->execute()) {
            // Başarılı ekleme işlemi
            header("Location: http://localhost/ADMIN/adminpanel/duyurupage.php");
            exit();
        } else {
            // Hata durumu
            echo "Duyuru eklenirken bir hata oluştu.";
        }
        $stmt->close();
    } else {
        // Hata durumu
        echo "SQL hazırlama hatası: " . $baglan->error;
    }
}

// Duyuruları çekme işlemi
$sql = "SELECT title, content, created_at FROM announcements ORDER BY created_at DESC";
$result = $baglan->query($sql);

$announcements = array();
if ($result) {
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $announcements[] = $row;
        }
    } else {
        // Duyuru yoksa bir mesaj gösterilebilir
        echo "Henüz duyuru bulunmamaktadır.";
    }
    $result->close();
} else {
    // Hata durumu
    echo "Duyuru listesi alınamadı: " . $baglan->error;
}

$baglan->close();
?>
