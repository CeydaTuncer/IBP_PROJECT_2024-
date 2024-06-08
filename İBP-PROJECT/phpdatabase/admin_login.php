<?php
// Veritabanı bağlantı dosyasını içe aktar
ob_start();
session_start();
include 'db_connect.php'; 

// POST isteğinden gelen kullanıcı giriş bilgilerini al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı giriş bilgilerini al
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kullanıcı giriş bilgilerini ekrana yazdır
    echo "Kullanıcı Giriş Bilgileri:<br>";
    echo "E-posta: " . $email . "<br>";
    echo "Şifre: " . $password . "<br>";

    // Kullanıcı giriş bilgilerini doğrula
    $query = "SELECT * FROM dbibp.admins WHERE email = ? AND password = ?";
    $statement = $baglan->prepare($query);
    $statement->bind_param('ss', $email, $password);
    $statement->execute();
    $result = $statement->get_result();

    // Kullanıcı bulunamadıysa veya şifre yanlışsa hata göster
    if ($result->num_rows == 0) {
        echo "Geçersiz e-posta veya şifre. Lütfen tekrar deneyin.";
    } else {
        // Kullanıcı bulunduysa, giriş yap ve ana sayfaya yönlendir
        session_start();
        $_SESSION['email'] = $email;
        header("Location: http://localhost/ADMIN/adminpanel/adminhomepage.php");
        exit(); // İleri yönlendirme işleminden sonra betik sonlandırılmalıdır
    }
}
?>
