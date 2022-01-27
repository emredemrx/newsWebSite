<?php 

$socialmediaRecord = $veritabanibaglantisi->prepare("SELECT * FROM sitesosyalmedyalink where linkDurumu=?");
$socialmediaRecord->execute([1]);
$sitesocialRecordlinknumber=$socialmediaRecord->rowCount();
$sitesocialRecord =$socialmediaRecord->fetchAll(PDO::FETCH_ASSOC);

$contact   = $veritabanibaglantisi->prepare("SELECT * FROM siteiletisim LIMIT 1");
$contact->execute();
$contactdatanumber=$contact->rowCount();
$contactRecord =$contact->fetch(PDO::FETCH_ASSOC);
