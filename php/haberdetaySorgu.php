<?php
$gunler = array('Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi','Pazar'); 
$aylar = array('Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık');


$haberBilgi = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? and G_HaberID=? LIMIT 1");
function haberBilgisigetir($id){
    global $haberBilgi;
    $haberBilgi->execute([1,$id]);
    $haberkayitlar =$haberBilgi->fetch(PDO::FETCH_ASSOC);
    
    return $haberkayitlar;
}

function haberDetaytarihformat($date){
    $d =date("N.d.m.Y H:i.s",$date);
    $x = explode(".",$d);
    $gunSayi = date("d",$date);
    $gunAd = gunDonusturme($x[0]);
    $ayAd = ayadiDonusturme($x[0]);
    $yil = date("Y",$date);
    $saat = date("H:i",$date);
    return  $gunSayi.".".$ayAd.".".$yil." ".$gunAd." ".$saat;
}

function gunDonusturme($g){
    global $gunler;
    return $gunler[$g];
}
function ayadiDonusturme($a){
    global $aylar;
    return $aylar[$a];
}

$haberAnaResimler = $veritabanibaglantisi->prepare("SELECT * FROM g_galeriresim where galeriID=? AND galeriResimDurumu =? LIMIT 1");
function haberResimSorgu( $id){
    global $haberAnaResimler;
    $haberAnaResimler->execute([$id,1]);
    $haberresimkayitlar =$haberAnaResimler->fetch(PDO::FETCH_ASSOC); 
    return $haberresimkayitlar;
}

$rightHaberler = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? and  	KategoriID <> ? ORDER BY G_HaberID DESC  LIMIT 10");
$rightHaberler->execute([1,4]); // 4 kategori id olarak video haberleri getirmemesi için kullanılıyor 
$rightHabersayi=$rightHaberler->rowCount();
$rightHaberkayitlar =$rightHaberler->fetchAll(PDO::FETCH_ASSOC);


$kategoriSorgu = $veritabanibaglantisi->prepare("SELECT * FROM haberkategori where G_HaberkategoriDurum =? and kategoriid=? LIMIT 1");
function kategoriGetir($kategoriid){
    global $kategoriSorgu;
    $kategoriSorgu->execute([1,$kategoriid]);
    $kategoriSorgukayitlar =$kategoriSorgu->fetch(PDO::FETCH_ASSOC);

    return $kategoriSorgukayitlar["G_Haberkategori"];
}


$kontrol = $veritabanibaglantisi->prepare("SELECT * FROM  gorunntulemeip WHERE ipAdresi=? AND haberid=?");

function goruntulenmeKontrol($ip,$haberid){
    global $kontrol;
    $kontrol->execute([$ip,$haberid]);
    $kontrolSayi=$kontrol->rowCount();
    $kontrolkayitlar =$kontrol->fetch(PDO::FETCH_ASSOC);
    if($kontrolSayi<=0 ||  $kontrolkayitlar["girissayisi"]>3){
        goruntulenmeipadresiekle($ip,$haberid);
    }else if($kontrolkayitlar["girissayisi"]<=3){
        kontrolgirisArttirma($kontrolkayitlar["id"]);
    }
}

$kontrolgirisarttir = $veritabanibaglantisi->prepare("UPDATE gorunntulemeip SET  girissayisi = girissayisi+1 WHERE id=?");
function kontrolgirisArttirma($id){
    global $kontrolgirisarttir;
    $kontrolgirisarttir->execute([$id]);
}

$goruntulenmeipadresiekle = $veritabanibaglantisi->prepare("INSERT INTO gorunntulemeip (ipAdresi,haberid)VALUES(?,?) ");
function goruntulenmeipadresiekle($ip,$haberid){
    global $goruntulenmeipadresiekle;
    $goruntulenmeipadresiekle->execute([$ip,$haberid]);
    $goruntulenmeipAdresiEkleSayi=$goruntulenmeipadresiekle->rowCount();
    if( $goruntulenmeipAdresiEkleSayi>0){
        goruntulenmeArttir($haberid);
    }
}

$goruntulenmeArttirmaSorgusu = $veritabanibaglantisi->prepare("UPDATE g_haber SET G_Goruntulenme = G_Goruntulenme+1 WHERE G_HaberID = ?");
function goruntulenmeArttir($id){
    global $goruntulenmeArttirmaSorgusu;
    $goruntulenmeArttirmaSorgusu->execute([$id]);
}

$socialmediaRecord = $veritabanibaglantisi->prepare("SELECT * FROM sitesosyalmedyalink where linkDurumu=?");
$socialmediaRecord->execute([1]);
$sitesocialRecordlinknumber=$socialmediaRecord->rowCount();
$sitesocialRecord =$socialmediaRecord->fetchAll(PDO::FETCH_ASSOC);


$oncekiHaberSorgu = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? AND G_HaberID=? LIMIT 1");
function oncekiHaber($haberid){
    global $oncekiHaberSorgu;
    --$haberid;
    
    $oncekiHaberSorgu->execute([1,$haberid]);
    $oncekiHaberSorgukayitSayisi=$oncekiHaberSorgu->rowCount();
    $oncekiHaberSorgukayit =$oncekiHaberSorgu->fetch(PDO::FETCH_ASSOC);
    if($oncekiHaberSorgukayitSayisi>0){
        return $oncekiHaberSorgukayit;
    }else{
        return 0;
    }


    
}

$SonrakiHaberSorgu = $veritabanibaglantisi->prepare("SELECT * FROM g_haber where Durum =? AND G_HaberID=? LIMIT 1");
function SonrakiHaber($haberid){
    global $SonrakiHaberSorgu;
    ++$haberid;
    $SonrakiHaberSorgu->execute([1,$haberid]);
    $SonrakiHaberSorgukayitSayisi=$SonrakiHaberSorgu->rowCount();
    $SonrakiHaberSorgukayit =$SonrakiHaberSorgu->fetch(PDO::FETCH_ASSOC);
    if($SonrakiHaberSorgukayitSayisi>0){
        return $SonrakiHaberSorgukayit;
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