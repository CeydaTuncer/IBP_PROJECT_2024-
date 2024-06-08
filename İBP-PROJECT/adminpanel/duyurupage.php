<?php
include 'C:/xampp/htdocs/ADMIN/phpdatabase/db_connect.php'; // Relative path kullanarak include ediyoruz
include 'C:/xampp/htdocs/ADMIN/phpdatabase/announce_process.php'; // Relative path kullanarak include ediyoruz

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duyuru İşlemleri</title>
    <style>
        /* Genel stil */
        body {
            font-family: Arial, sans-serif; /* Yazı tipi */
            background-color: #f0f0f0; /* Arka plan rengi */
        }

        /* Form stil */
        .form-container {
            max-width: 1000px; /* Formun maksimum genişliği */
            margin: 0 auto; /* Sayfanın ortasına hizalama */
            padding: 20px; /* Form etrafındaki boşluk */
            background-color: #fff; /* Form arka plan rengi */
            border-radius: 5px; /* Form köşelerini yuvarlama */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Forma hafif bir gölge ekleme */
        }

        /* Label stil */
        .form-label {
            display: block; /* Labelları blok element olarak ayarlama */
            margin-bottom: 20px; /* Labellar arasındaki boşluk */
        }

        /* Input ve textarea stil */
        .form-control {
            width: 100%; /* Input ve textarea'nın tam genişlikte olması */
            padding: 10px; /* Input ve textarea içindeki boşluk */
            margin-bottom: 20px; /* Input ve textarea arasındaki boşluk */
            border: 1px solid #ccc; /* Input ve textarea kenarlık rengi ve kalınlığı */
            border-radius: 5px; /* Input ve textarea köşelerini yuvarlama */
        }

        /* Textarea stil */
        .form-control-textarea {
            resize: none; /* Textarea'nın boyutunun değiştirilememesi */
        }

        /* Buton stil */
        .form-btn {
            padding: 10px 20px; /* Buton içindeki boşluk */
            background-color: #007bff; /* Buton arka plan rengi */
            color: #fff; /* Buton yazı rengi */
            border: none; /* Buton kenarlığının olmaması */
            border-radius: 5px; /* Buton köşelerini yuvarlama */
            cursor: pointer; /* Üzerine gelindiğinde imlecin el şeklini alması */
            width: 800px;
            margin-left: 80px;
            margin-bottom: 5px;
            margin-top: 30px ;

        }

        /* Butonun üzerine gelindiğinde renginin koyulaşması */
        .form-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <?php include 'C:\xampp\htdocs\ADMIN\menu.php'; ?>
    <!-- Sayfa içeriği buraya gelecek -->

    <div class="form-container">
        <h1 style="text-align: center;">DUYURU İŞLEMLERİ</h1> <!-- Başlık -->
        <form action="/ADMIN/phpdatabase/announce_process.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Gönderilecek Kullanıcı Email adresi </label>
                <input type="email" class="form-control" id="userdemail" name="userdemail" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Duyuru Başlığı</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Başlık" required>
            </div>
        
            <div class="mb-3">
                <label for="content" class="form-label">Duyuru İçeriği </label>
                <textarea class="form-control form-control-textarea" id="content" name="content" rows="3" required></textarea>
            </div>
            
            <div class="form-check mb-3">
                <label style="margin-top: 30px;" class="form-check-label">
                <input class="form-check-input" type="checkbox" id="check" name="check" required> Duyuruyu Geri Alamayacağımı biliyorum 
                </label>
            </div>
            <button type="submit" class="form-btn">Gönder</button> <!-- Buton -->
        </form>
    </div>
</body>
</html>
