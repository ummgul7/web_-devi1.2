<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
    <style>
        body {
            background-image: url('fotograflar/Leaf\ 4.jpeg'); 
            background-size: cover; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0;
            font-family: Arial, sans-serif;
            color: white; 
            text-align: center;
        }
        .message {
            font-size: 2em; 
            background-color: rgba(86, 28, 36); 
            padding: 20px;
            border-radius: 10px;
        }
        a {
            color: #00f;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $kullanici_adi = $_POST['adi'];
    $sifre = $_POST['sifre'];

    // değikenlere değer ataması 
    $dogru_kullanici_adi = "ummugulcaglar@gmail.com";
    $dogru_sifre = "b231210030";

    // Doğrulama işlemi
    if ($kullanici_adi == $dogru_kullanici_adi && $sifre == $dogru_sifre) {
        // E-posta adresindeki @gmail.com kısmını kaldır
        $kullanici_adi_gosterim = str_replace("@gmail.com", "", $kullanici_adi);
        echo "<div class='message'>Giriş başarılı! Hoşgeldiniz, $kullanici_adi_gosterim.<br>Ana sayfaya dönmek için tıklayın!<br><a href='login_html.html'>Ana sayfa</a></div>";

    } else {
        echo "<div class='message'>Kullanıcı adı veya şifre hatalı!<br><a href='login_html.html'>Tekrar dene</a></div>";
    }
} else {
    echo "<div class='message'>Geçersiz istek yöntemi.</div>";
}
?>
</body>
</html>










