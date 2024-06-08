<?php
include 'C:/xampp/htdocs/ADMIN/phpdatabase/db_connect.php';
include 'C:/xampp/htdocs/ADMIN/phpdatabase/user_login.php';   // Veritabanı bağlantı dosyasını dahil et

if(isset($_POST['message'])) {
    // Örnek olarak, kullanıcı oturum açmışsa oturum verilerini kullanarak sender_email'i alabilirsiniz
    $useremail = $_SESSION['useremail'];

    $message = $_POST['message']; // Mesaj içeriğini al

    // Mesajın veritabanına eklenmesi için SQL sorgusu
    $sql_insert = "INSERT INTO messages (sender_email, message, timestamp) VALUES ('$useremail', '$message', NOW())";

    if ($baglan->query($sql_insert) === TRUE) { // Düzeltme: $conn yerine $baglan kullanılmalı
        echo "Mesaj başarıyla gönderildi.";
        // Yönlendirmeden sonra kodun çalışmasını durdur
    } else {
        echo "Hata: " . $sql_insert . "<br>" . $baglan->error; // Düzeltme: $conn yerine $baglan kullanılmalı
    }


}
?>
