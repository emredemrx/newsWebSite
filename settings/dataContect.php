<?php 
    try{
        $veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=xxxxxxxxxx;charset=UTF8","root","");
    }catch(PDOException $hata){
        /*echo "Bağlantı Hatası<br />";
        echo "Hata Mesajı : " . $hata->getMessage();*/ // hata mesajını kullanıcılar görmesin
        die();
    }
?>
