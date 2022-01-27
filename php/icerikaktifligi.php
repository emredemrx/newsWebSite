<?php 
 $icerikaktifligi = $veritabanibaglantisi->prepare("SELECT * FROM  siteicerikdurumu where icerikAdi =? and icerikDurumu=? LIMIT 1");
 
function icerikaktiflikSorgusu($icerik){
    global $icerikaktifligi;
    $icerikaktifligi->execute([$icerik,1]);
    $icerikaktifligisayisi=$icerikaktifligi->rowCount();
    $icerikaktifligikayitlar =$icerikaktifligi->fetch(PDO::FETCH_ASSOC);
    return [
        'icerikaktifligisayisi' => $icerikaktifligisayisi,
        'icerikaktifligikayitlar' =>  $icerikaktifligikayitlar,
    ];
}


// $icerikaktifligiID = $veritabanibaglantisi->prepare("SELECT * FROM  siteicerikdurumu where icerikAdi =? and icerikDurumu=? LIMIT 1");
 
// function icerikaktiflikIDSorgusu($icerik){
//     global $icerikaktifligiID;
//     $icerikaktifligiID->execute([$icerik,1]);
//     $icerikaktifligiIDayisi=$icerikaktifligiID->rowCount();
//     $icerikaktifligiIDkayitlar =$icerikaktifligiID->fetch(PDO::FETCH_ASSOC);
//     return [
//         'icerikaktifligisayisi' => $icerikaktifligiIDayisi,
//         'icerikaktifligikayitlar' =>  $icerikaktifligiIDkayitlar,
//       ];
// }













