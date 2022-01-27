<?php 

//künye Database information of the  table
$kunye = $veritabanibaglantisi->prepare("SELECT * FROM sitekunyebilgileri");
$kunye->execute([]);
$kunyebilgisayisi=$kunye->rowCount();

$kunyegetirmebolum =ceil($kunyebilgisayisi/2);

$kunyebilgi1 = $veritabanibaglantisi->prepare("SELECT * FROM sitekunyebilgileri  LIMIT 0, $kunyegetirmebolum");
$kunyebilgi1->execute([]);
$kunyebilgisayisi1=$kunyebilgi1->rowCount();
$kunyebilgiKayitlari1 =$kunyebilgi1->fetchAll(PDO::FETCH_ASSOC);

$kunyebilgi2 = $veritabanibaglantisi->prepare("SELECT * FROM sitekunyebilgileri  LIMIT $kunyegetirmebolum, $kunyegetirmebolum");
$kunyebilgi2->execute([]);
$kunyebilgisayisi2=$kunyebilgi2->rowCount();
$kunyebilgiKayitlari2 =$kunyebilgi2->fetchAll(PDO::FETCH_ASSOC);

//$g_yonetimkunyebilgi Database information of the  table
$g_yonetimkunyebilgi = $veritabanibaglantisi->prepare("SELECT * FROM g_yonetimkunye where durum=?");
$g_yonetimkunyebilgi->execute([1]);
$g_yonetimkunyebilgisayisi=$g_yonetimkunyebilgi->rowCount();
$g_yonetimkunyebilgiKayitlari =$g_yonetimkunyebilgi->fetchAll(PDO::FETCH_ASSOC);


$hostandmail = $veritabanibaglantisi->prepare("SELECT * FROM hostandmail where durum=?");
$hostandmail->execute([1]);
$hostandmailsayisi=$hostandmail->rowCount();
$hostandmailKayitlari =$hostandmail->fetchAll(PDO::FETCH_ASSOC);