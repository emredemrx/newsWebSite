<?php 

$HaberGetirme = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? and turID= ? and KategoriID <> ? ORDER BY G_HaberID DESC ");
function icerikGetir($tur){
    global $HaberGetirme;
    $HaberGetirme->execute([1,$tur,4]);
    $HaberGetirmeSayisi=$HaberGetirme->rowCount();
    $HaberGetirmeKayit =$HaberGetirme->fetchAll(PDO::FETCH_ASSOC);
    
        return 
        [
            'HaberGetirmeSayisi' => $HaberGetirmeSayisi,
            'HaberGetirmeKayit' =>  $HaberGetirmeKayit,
        ];
    
}


$haberler = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? and KategoriID <> ?  ORDER BY G_HaberID DESC");
$haberler->execute([1,4]);
$habersayi=$haberler->rowCount();
$haberkayitlar =$haberler->fetchAll(PDO::FETCH_ASSOC);


$rightHaberler = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? and  	KategoriID <> ? ORDER BY G_HaberID DESC  LIMIT 10");
$rightHaberler->execute([1,4]); // 4 kategori id olarak video haberleri getirmemesi için kullanılıyor 
$rightHabersayi=$rightHaberler->rowCount();
$rightHaberkayitlar =$rightHaberler->fetchAll(PDO::FETCH_ASSOC);



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



$turidsorgusu = $veritabanibaglantisi->prepare("SELECT * FROM haberturu where turDurum =? and  	turAdi= ?  LIMIT 1");
function turid($tur){
    global $turidsorgusu;
    $turidsorgusu->execute([1,$tur]);
    $turidsorgusuSayisi=$turidsorgusu->rowCount();
    $turidsorgusuKayit =$turidsorgusu->fetch(PDO::FETCH_ASSOC);
    
    if($turidsorgusuSayisi>0){
        return $turidsorgusuKayit;
    }else{
        return 0;
    }
}

$haberlerKategori = $veritabanibaglantisi->prepare("SELECT * FROM haberkategori where G_HaberkategoriDurum=? AND kategoriid =?");
function haberlerKategoriGetir($id){
    global $haberlerKategori;
    $haberlerKategori->execute([1,$id]);
    $haberlerKategorikayitlar =$haberlerKategori->fetch(PDO::FETCH_ASSOC); 
    return $haberlerKategorikayitlar["G_Haberkategori"];
}


$haberAnaResimler = $veritabanibaglantisi->prepare("SELECT * FROM g_galeriresim where galeriID=? AND galeriResimDurumu =? LIMIT 1");
function haberResimSorgu($id){
    global $haberAnaResimler;
    $haberAnaResimler->execute([$id,1]);
    $haberresimkayitlar =$haberAnaResimler->fetch(PDO::FETCH_ASSOC); 
    return $haberresimkayitlar;
}

$sliderAdet= $veritabanibaglantisi->prepare("SELECT * FROM slidergosterilensayi where sliderAdi=? LIMIT 1");
function sliderAdet($slideradi){
    global $sliderAdet;
    $sliderAdet->execute([$slideradi]);
    $sliderAdetkayitlar =$sliderAdet->fetch(PDO::FETCH_ASSOC); 
    return $sliderAdetkayitlar["sliderAdet"];
}

function tarihDonustur($date){
   return date("d.m.Y",$date);
}

$videoHaberGetirme = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? and turID= ? and KategoriID = ? ORDER BY G_HaberID DESC LIMIT 3");
function videoHaberGetirme(){
    global $videoHaberGetirme;
    $videoHaberGetirme->execute([1,4,4]);
    $videoHaberGetirmeSayisi=$videoHaberGetirme->rowCount();
    $videoHaberGetirmeKayit =$videoHaberGetirme->fetchAll(PDO::FETCH_ASSOC);
    
        return ['videoHaberGetirmeSayisi' => $videoHaberGetirmeSayisi,'videoHaberGetirmeKayit' =>  $videoHaberGetirmeKayit,];
    
}