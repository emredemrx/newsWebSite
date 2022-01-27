<?php
$haberler = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? and KategoriID <> ?  ORDER BY G_HaberID DESC");
$haberler->execute([1,4]);
$habersayi=$haberler->rowCount();
$haberkayitlar =$haberler->fetchAll(PDO::FETCH_ASSOC);


$haberAnaResimler = $veritabanibaglantisi->prepare("SELECT * FROM g_galeriresim where galeriID=? AND galeriResimDurumu =? LIMIT 1");
function haberResimSorgu($id){
    global $haberAnaResimler;
    $haberAnaResimler->execute([$id,1]);
    $haberresimkayitlar =$haberAnaResimler->fetch(PDO::FETCH_ASSOC); 
    return $haberresimkayitlar;
}

function dateGunformat($newsDate){
    $haberGun = date("d",$newsDate);
    return $haberGun;
}

$aykisiltmalari = array("Oca","Şub","Mar","Nis","May","Haz","Tem","Agu","Eyl","Eki","Kas","Ara");
function dateAyFormat($newsDate){
    global $aykisiltmalari;
    $haberAy = date("m",$newsDate) - 1;
    $h = $aykisiltmalari[$haberAy];
    return $h;
}

$rightHaberler = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? and  	KategoriID <> ? ORDER BY G_HaberID DESC  LIMIT 10");
$rightHaberler->execute([1,4]); // 4 kategori id olarak video haberleri getirmemesi için kullanılıyor 
$rightHabersayi=$rightHaberler->rowCount();
$rightHaberkayitlar =$rightHaberler->fetchAll(PDO::FETCH_ASSOC);



$haberlerKategori = $veritabanibaglantisi->prepare("SELECT * FROM haberkategori where G_HaberkategoriDurum=? AND kategoriid =?");
function haberlerKategoriGetir($id){
    global $haberlerKategori;
    $haberlerKategori->execute([1,$id]);
    $haberlerKategorikayitlar =$haberlerKategori->fetch(PDO::FETCH_ASSOC); 
    return $haberlerKategorikayitlar["G_Haberkategori"];
}