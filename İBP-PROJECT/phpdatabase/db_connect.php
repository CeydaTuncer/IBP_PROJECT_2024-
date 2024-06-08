<?php
$vt_sunucu="localhost";
$vt_kullanici= "root";
$vt_sifre= "159357";
$vt_adi= "dbibp";


$baglan=mysqli_connect("$vt_sunucu","$vt_kullanici","$vt_sifre","$vt_adi");


if(!$baglan){
    die("vertitabanı işlemi başarısız".mysqli_connect_error());
}


$sql = "SELECT useremail FROM users ORDER BY id DESC LIMIT 1";
$result = mysqli_query($baglan, $sql); // Sorguyu çalıştır

$sonkullanici = ""; // Değişkeni boş bir değerle önceden tanımla

if ($result) {
    // Sonuçlar varsa
    if (mysqli_num_rows($result) > 0) {
        // Verileri döngüyle al
        while ($row = mysqli_fetch_assoc($result)) {
            $sonkullanici = $row["useremail"];
        }
    } else {
        $sonkullanici = "Veritabanında kullanıcı bulunamadı";
    }
} else {
    echo "Sorgu başarısız: " . mysqli_error($baglan);
}

?>