<?php 

$saat =  date("H", $zamanDamgasi);
$gunayyil = date("d.m.Y",$zamanDamgasi);
$datemerge = datemerge($gunayyil); // tarihden noktalrı kaldırıp birleştiriyoruz

$cikansaniyetoplami = $saat * 3600; //gün içinde saatlerin saniyesini buluyoruz

$gunbaslangici = $zamanDamgasi - $cikansaniyetoplami; //gün içinde saatlerin saniyesini bulduktan sonra çıkarıyoruz
    $gunler = array('Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi','Pazar'); 
    $aylar = array('Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık');
    $ay = $aylar[date('m') - 1];
    $gun = $gunler[date('N') - 1];

    //fist ve last degerlerini almak için kullanılan sorgu 
    $fistlastSorgu = $veritabanibaglantisi->prepare("SELECT * FROM tarihler where haftaDurumu=? LIMIT 1");
    $fistlastSorgu->execute([1]);
    $firstlastSorguKayit = $fistlastSorgu->fetch(PDO::FETCH_ASSOC);
    //--------------------
    
    $guntarihleri=array();
if(true){
    switch ($gun) {
        case "Salı":
            $Pazartesi      = date("d.m.Y",$gunbaslangici - (86400));
            $PazartesiGun   = date("d",$gunbaslangici - (86400));
            $Sali           = date("d.m.Y",$gunbaslangici);
            $Carsamba       = date("d.m.Y",$gunbaslangici + (86400));
            $Perşembe       = date("d.m.Y",$gunbaslangici + (86400*2));
            $Cuma           = date("d.m.Y",$gunbaslangici + (86400*3));
            $Cumartesi      = date("d.m.Y",$gunbaslangici + (86400*4));
            $Pazar          = date("d.m.Y",$gunbaslangici + (86400*5));
            $PazarGun       = date("d",$gunbaslangici + (86400*5));
            break;
        case "Çarşamba":
            $Pazartesi      = date("d.m.Y",$gunbaslangici - (86400*2));
            $PazartesiGun   = date("d",$gunbaslangici - (86400*2));
            $Sali           = date("d.m.Y",$gunbaslangici - (86400));
            $Carsamba       = date("d.m.Y",$gunbaslangici);
            $Perşembe       = date("d.m.Y",$gunbaslangici + (86400));
            $Cuma           = date("d.m.Y",$gunbaslangici + (86400*2));
            $Cumartesi      = date("d.m.Y",$gunbaslangici + (86400*3));
            $Pazar          = date("d.m.Y",$gunbaslangici + (86400*4));
            $PazarGun       = date("d",$gunbaslangici + (86400*4));
            break;
        case "Perşembe":
            $Pazartesi      = date("d.m.Y",$gunbaslangici - (86400*3));
            $PazartesiGun   = date("d",$gunbaslangici - (86400*3));
            $Sali           = date("d.m.Y",$gunbaslangici - (86400*2));
            $Carsamba       = date("d.m.Y",$gunbaslangici - (86400));
            $Perşembe       = date("d.m.Y",$gunbaslangici);
            $Cuma           = date("d.m.Y",$gunbaslangici + (86400));
            $Cumartesi      = date("d.m.Y",$gunbaslangici + (86400*2));
            $Pazar          = date("d.m.Y",$gunbaslangici + (86400*3));
            $PazarGun       = date("d",$gunbaslangici + (86400*3));
            break;
        case "Cuma":
            $Pazartesi      = date("d.m.Y",$gunbaslangici - (86400*4));
            $PazartesiGun   = date("d",$gunbaslangici - (86400*4));
            $Sali           = date("d.m.Y",$gunbaslangici - (86400*3));
            $Carsamba       = date("d.m.Y",$gunbaslangici - (86400*2));
            $Perşembe       = date("d.m.Y",$gunbaslangici - (86400));
            $Cuma           = date("d.m.Y",$gunbaslangici);
            $Cumartesi      = date("d.m.Y",$gunbaslangici + (86400));
            $Pazar          = date("d.m.Y",$gunbaslangici + (86400*2));
            $PazarGun       = date("d",$gunbaslangici + (86400*2));
            break;
        case "Cumartesi":
            $Pazartesi      = date("d.m.Y",$gunbaslangici - (86400*5));
            $PazartesiGun   = date("d",$gunbaslangici - (86400*5));
            $Sali           = date("d.m.Y",$gunbaslangici - (86400*4));
            $Carsamba       = date("d.m.Y",$gunbaslangici - (86400*3));
            $Perşembe       = date("d.m.Y",$gunbaslangici - (86400*2));
            $Cuma           = date("d.m.Y",$gunbaslangici - (86400));
            $Cumartesi      = date("d.m.Y",$gunbaslangici);
            $Pazar          = date("d.m.Y",$gunbaslangici + (86400));
            $PazarGun       = date("d",$gunbaslangici + (86400));
            break;
        case "Pazar":
            $Pazartesi      = date("d.m.Y",$gunbaslangici - (86400*6));
            $PazartesiGun   = date("d",$gunbaslangici - (86400*6));
            $Sali           = date("d.m.Y",$gunbaslangici - (86400*5));
            $Carsamba       = date("d.m.Y",$gunbaslangici - (86400*4));
            $Perşembe       = date("d.m.Y",$gunbaslangici - (86400*3));
            $Cuma           = date("d.m.Y",$gunbaslangici - (86400*2));
            $Cumartesi      = date("d.m.Y",$gunbaslangici - (86400));
            $Pazar          = date("d.m.Y",$gunbaslangici);
            $PazarGun       = date("d",$gunbaslangici);
            break;
        default:
            $Pazartesi      = date("d.m.Y",$gunbaslangici);
            $PazartesiGun   = date("d",$gunbaslangici);
            $Sali           = date("d.m.Y",$gunbaslangici + (86400));
            $Carsamba       = date("d.m.Y",$gunbaslangici + (86400*2));
            $Perşembe       = date("d.m.Y",$gunbaslangici + (86400*3));
            $Cuma           = date("d.m.Y",$gunbaslangici + (86400*4));
            $Cumartesi      = date("d.m.Y",$gunbaslangici + (86400*5));
            $Pazar          = date("d.m.Y",$gunbaslangici + (86400*6));
            $PazarGun       = date("d",$gunbaslangici + (86400*6));
    }
   
    array_push($guntarihleri,$Pazartesi,$Sali,$Carsamba,$Perşembe,$Cuma,$Cumartesi,$Pazar);
 
    $haftakontrol = $veritabanibaglantisi->prepare("SELECT * FROM tarihler where haftaDurumu =?"); //durum kontrol etme varmı yok mu 
    $haftakontrol->execute([1]);
    $haftakontrolNumber =$haftakontrol->rowCount();
     if($haftakontrolNumber>0){

        if($firstlastSorguKayit["firstdate"] != $PazartesiGun){
            $haftaDurumuSifirla = $veritabanibaglantisi->prepare("UPDATE tarihler SET haftaDurumu=? WHERE haftaDurumu =?"); //durumu 1 olan varsa burda durumu bir olanı 0 yapıyoruz ki yenisi ekleyeyim  
            $haftaDurumuSifirla->execute([0,1]);
            $haftaDurumuSifirlaNumber =$haftaDurumuSifirla->rowCount();


            for($i = 0; $i < count($guntarihleri);$i++){
                $gunekle = $veritabanibaglantisi->prepare("INSERT INTO tarihler (tarih,gunad,haftaDurumu,firstdate,lastdate) VALUE(?,?,?,?,?)");//durumu 1 olanı 0 yaptıktan sonra yeni gün yarihleri ekliyoruzz 
                $gunekle->execute([$guntarihleri[$i],$gunler[$i],1,$PazartesiGun,$PazarGun]);
                $gunekleNumber =$gunekle->rowCount();         
                
            }
            
        }else{
            //tarihler zaten ekli ise buraya girer
        }
    }else{
        if($firstlastSorguKayit["firstdate"] != $PazartesiGun){
            for($i = 0; $i< count($guntarihleri);$i++){
                $gunekle = $veritabanibaglantisi->prepare("INSERT INTO tarihler (tarih,gunad,haftaDurumu,firstdate,lastdate) VALUE(?,?,?,?,?)");//durumu 1 olanı 0 yaptıktan sonra yeni gün yarihleri ekliyoruzz 
                $gunekle->execute([$guntarihleri[$i],$gunler[$i],1,$PazartesiGun,$PazarGun]);
                $gunekleNumber =$gunekle->rowCount();        
                
            }
        }else{
            //tarihler zaten ekli ise buraya girer
        }
    }
}

function datemerge($dt){
    return explodeMerge(explode(".",$dt));
}

function explodeMerge($i){
  return $i[0].$i[1].$i[2];
}



$tarihler   = $veritabanibaglantisi->prepare("SELECT * FROM  tarihler where haftaDurumu=? and gunad=? LIMIT 1");

function tarihgetir($gun){
    global $tarihler;
    $tarihler->execute([1,$gun]);
    $tarihlernumber=$tarihler->rowCount();
    $tarihlerRecord =$tarihler->fetch(PDO::FETCH_ASSOC);
    if($tarihlernumber>0){
        return $tarihlerRecord["tarih"];
    }else{
        return "";
    }
}

$gelenID   = $veritabanibaglantisi->prepare("SELECT * FROM  tarihler where tarih=? and haftaDurumu=? LIMIT 1");

function tarihIDgetir($gelentarih){
    global $gelenID;
    $gelenID->execute([$gelentarih,1]);
    $gelenIDnumber=$gelenID->rowCount();
    $gelenIDRecord =$gelenID->fetch(PDO::FETCH_ASSOC);
    if($gelenIDnumber>0){
        return $gelenIDRecord["id"];
    }else{
        return "";
    }
}


$streamingdatafunction = $veritabanibaglantisi->prepare("SELECT * FROM yayinakisi where YTarihID=? and durum=? ORDER BY YayinicerikSaati asc");

function streamingData($id){
    global $streamingdatafunction;
    $streamingdatafunction->execute([$id,1]);
    
    $streamingdata=$streamingdatafunction->fetchAll(PDO::FETCH_ASSOC);
    return $streamingdata;
}


function hourData($uniDate){
    return date("H:i",$uniDate);
}