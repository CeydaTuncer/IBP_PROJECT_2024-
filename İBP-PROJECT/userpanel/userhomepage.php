<?php   
include 'C:/xampp/htdocs/ADMIN/phpdatabase/db_connect.php'; // Veritabanı bağlantısı
include 'C:/xampp/htdocs/ADMIN/phpdatabase/send_message.php';
// Son duyuruyu almak için SQL sorgusu
$sql = "SELECT title, content FROM announcements ORDER BY created_at DESC LIMIT 1";
$result = $baglan->query($sql);

$lastAnnouncement = null;
if ($result->num_rows > 0) {
    // Son duyuruyu al
    $lastAnnouncement = $result->fetch_assoc();
} else {
    $lastAnnouncement = [
        'title' => 'Duyuru Bulunamadı',
        'content' => 'Henüz duyuru eklenmemiş.'
    ];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÖĞRENCİ BİLGİ SİSTEMİ</title>

    <style>
        /* Genel stil */
      

        /* Kart stil */
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            width: 250px;
            height: 200px;
            background-color: transparent;
            margin-right: 450px;
        }

        /* Kartları dört adede bölmek için grid düzeni */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* İki sütun */
            grid-gap: 0; /* Boşluklar */
            margin-left: 450px;
        }
        

        /* Başlık stili */
        .card h5 {
            margin-top: 0;
        }

        /* İçerik stili */
        .card p {
            margin-bottom: 0;
        }   
   
    </style>
</head>
<body>

<?php include 'C:/xampp/htdocs/ADMIN/usermenu.php'; ?>
    <!-- Sayfa içeriği buraya gelecek -->

    <div class="grid-container">
        <div class="card">
            <h5>Son Bildirim</h5>
            <p>BİR YENİ MESAJ </p>
            <p>BİR YENİ DUYURU  </p>

        
        </div>
<?php

$sql_message = "SELECT message FROM messages ORDER BY timestamp DESC LIMIT 1";
$result_message = $baglan->query($sql_message);

$lastMessage = null;
if ($result_message->num_rows > 0) {
    $row_message = $result_message->fetch_assoc();
    $lastMessage = $row_message['message'];
} else {
    $lastMessage = "Henüz mesaj yok.";
}
?>
        <div class="card">
            <h5>Son Mesaj</h5>
            <p><?php echo htmlspecialchars($lastMessage); ?></p>
           
            </div>

<div class="card">
    <h5>Son Duyuru</h5>
    <p><strong>Başlık:</strong> <?php echo htmlspecialchars($lastAnnouncement['title']); ?></p>
    <p><strong>İçerik:</strong> <?php echo htmlspecialchars($lastAnnouncement['content']); ?></p>
</div>
</div>

</body>
</html>
