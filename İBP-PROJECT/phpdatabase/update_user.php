<?php
include 'db_connect.php'; // Veritabanı bağlantısı

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $update_username = $_POST['update_username'];
    $new_password = $_POST['new_password'];

    // Check if the new password is provided
    if (empty($new_password)) {
        echo "Yeni şifre girilmelidir.";
        exit();
    }

    // SQL query to update the user's password
    $sql = "UPDATE users SET userpassword = ? WHERE useremail = ?";

    // Prepare the SQL statement
    $stmt = $baglan->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("ss", $new_password, $update_username);

    // Execute the query
    if ($stmt->execute()) {
        echo "Şifre başarıyla güncellendi.";
        header("Location: http://localhost/ADMIN/adminpanel/kullaniciislemleri.php");
        exit();
    } else {
        echo "Şifre güncellenirken hata oluştu: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>
