<?php 


$contractdata = $veritabanibaglantisi->prepare("SELECT * FROM siteiletisim LIMIT 1");
$contractdata->execute();
$contractdataNumber =$contractdata->rowCount();
$contact =$contractdata->fetch(PDO::FETCH_ASSOC);

 
$contractkunyedata = $veritabanibaglantisi->prepare("SELECT * FROM g_yonetimkunye ");
$contractkunyedata->execute();
$contractkunyedataNumber =$contractkunyedata->rowCount();
$contractkunye=$contractkunyedata->fetchAll(PDO::FETCH_ASSOC);

