<?php 
require_once("dataContect.php");
date_default_timezone_set('Europe/Istanbul');


$IPadresim = $_SERVER["REMOTE_ADDR"];
$zamanDamgasi = time();
$tarihSaat = date("d.m.Y H:i.s",$zamanDamgasi);
// echo $zamanDamgasi ;
// echo date("d.m.Y H:i.s", $zamanDamgasi+86400);
$yil = date("Y",$zamanDamgasi);

function unixzamandamgasiuret($d,$m,$y){
    return $timestamp = mktime("00","00","00",$d ,$m, $y);
}
function rakamHaricSil($deger){ //içerisinde rakamlar hariç her şeyi siler
    $islem = preg_replace("/[^0-9]/","",$deger);
    $sonuc = $islem;
    return $sonuc;
}
function tumBosluklariSil($deger){ 
    $islem     = preg_replace("/\s|&nbsp;/","", $deger);
    $sonuc     = $islem;
    return $sonuc;
}
function donusumleriGeriDondur($deger){
    $geridondur = htmlspecialchars_decode($deger, ENT_QUOTES);
    $sonuc     = $geridondur;
    return $sonuc;
}
function guvenlikKodu($deger){
    $bosluksil  = trim($deger);
    $taglarisil = strip_tags($bosluksil);
    // $etkisizyap = htmlspecialchars($taglarisil, ENT_QUOTES,"<h4></h4>");
    $sonuc      = $taglarisil;
   
    return $sonuc;
    
}

function seo($text) {
    $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
    $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
    $text = strtolower(str_replace($find, $replace, $text));
    $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    $text = str_replace(' ', '-', $text);

    return $text;
}
function valid_email( $str ){
    return (!preg_match( "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$str))? FALSE : TRUE;
}




