<?php 
$sonhaberBaslik = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? ORDER BY G_HaberID DESC LIMIT 4");
$sonhaberBaslik->execute([1]);
$sonhaberBasliksayisi=$sonhaberBaslik->rowCount();
$sonhaberBaslikkayitlar =$sonhaberBaslik->fetchAll(PDO::FETCH_ASSOC);