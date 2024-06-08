<?php
include 'C:/xampp/htdocs/ADMIN/phpdatabase/db_connect.php';
include 'C:/xampp/htdocs/ADMIN/phpdatabase/announce_process.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duyuru Listesi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .form-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <?php include 'C:\xampp\htdocs\ADMIN\usermenu.php'; ?>
    <h1 style="text-align: center;">DUYURU İŞLEMLERİ</h1> <!-- Başlık -->

    <div class="form-container">
        <!-- Arama kutusu -->
        <div class="row" style="margin-bottom:20px; margin-left:300px;">
            <div class="col-md-6">
                <input type="text" id="searchInput" class="form-control" placeholder="Duyuru ara...">
            </div>
        </div>
        <!-- Duyuru Listesi -->
        <div class="row mt-3">
            <div class="col-md-12">
                <ul id="announcementList" class="list-group">
                    <?php foreach ($announcements as $announcement): ?>
                        <li class="list-group-item">
                            <h5><?php echo htmlspecialchars($announcement['title']); ?></h5>
                            <p><?php echo htmlspecialchars($announcement['content']); ?></p>
                            <small><?php echo htmlspecialchars($announcement['created_at']); ?></small>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Arama kutusundaki metne göre duyuruları filtreleme
            $("#searchInput").on("keyup", function() {
                var searchText = $(this).val().toLowerCase();
                $("#announcementList li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1)
                });
            });
        });
    </script>
</body>
</html>
