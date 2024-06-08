<?php
// Veritabanı bağlantı dosyasını içe aktar

include 'db_connect.php'; 

// POST isteğinden gelen kullanıcı giriş bilgilerini al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı giriş bilgilerini al
    $useremail = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];

    // Kullanıcı giriş bilgilerini doğrula
    $query = "SELECT * FROM dbibp.users WHERE useremail = ? AND userpassword = ?";
    $statement = $baglan->prepare($query);
    $statement->bind_param('ss', $useremail, $userpassword);
    $statement->execute();
    $result = $statement->get_result();

    // Kullanıcı bulunamadıysa veya şifre yanlışsa hata göster
    if ($result->num_rows == 0) {
        echo "Geçersiz e-posta veya şifre. Lütfen tekrar deneyin.";
    } else {
        // Kullanıcı bulunduysa, giriş yap ve ana sayfaya yönlendir
        $_SESSION['useremail'] = $useremail;
        
        header("Location: http://localhost/ADMIN/userpanel/userhomepage.php");
        exit(); // İleri yönlendirme işleminden sonra betik sonlandırılmalıdır
    }
}
?>
