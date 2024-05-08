<?php

if(isset($_POST["kayit"])){

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST['adi'];
      $password = $_POST['sifre'];
      
      if (empty($username) || empty($password)) {
          echo "lütfen şifre giriniz.";
          echo '<br><a href="javascript:history.go(-1)">Geri Dön</a>';
      } else {

         $email = $_POST["adi"];
         $pos = strpos($email, "@"); // "@" işaretinin konumunu bul
         if ($pos !== false) { // "@" işareti bulunduysa
             $username = substr($email, 0, $pos); // E-posta adresinin başından "@" işaretine kadar olan kısmı al
             echo "Hoşgeldiniz ". $username; // Kullanıcı adını yazdır
      
      
         }
        
         
      }
  }
    
}
else{
   echo "Beklenmeyen bir hata oluştu daha sonra tekrar deneyin";
}

?>

