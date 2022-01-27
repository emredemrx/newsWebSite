<?php 
require_once("dataContect.php");

$siteinformation = $veritabanibaglantisi->prepare("SELECT * FROM sitegenelbilgi LIMIT 1");
$siteinformation->execute();
    $siteinformationNumberOfRecords=$siteinformation->rowCount();
    $siteinformationrecords =$siteinformation->fetch(PDO::FETCH_ASSOC);

if($siteinformationNumberOfRecords>0){
    $SiteAdi            = $siteinformationrecords["siteAdi"];
    $SiteTitle          = $siteinformationrecords["siteTitle"];
    $SiteDescription    = $siteinformationrecords["siteDescription"];
    $SiteLogo           = $siteinformationrecords["siteLogo"];
    $siteURL            = $siteinformationrecords["siteURL"];
    $siteSlogan         = $siteinformationrecords["siteSlogan"];
    $siteMail           = $siteinformationrecords["siteMail"];
    $siteMailSifre      = $siteinformationrecords["siteMailSifre"];
    $siteMailHost       = $siteinformationrecords["siteMailHost"];

    $siteisletmeResmiAd        = $siteinformationrecords["isletmeResmiAd"]; 
}else{

    echo "site ayar sorgusuasdasd hatası<br />"; // hata mesajını kullanıcılar görmesin
    die();
}

$contractTexts = $veritabanibaglantisi->prepare("SELECT * FROM sozlesmemetinleri LIMIT 1");
$contractTexts->execute();
$contractTextsNumberOfRecords =$contractTexts->rowCount();
$contract =$contractTexts->fetch(PDO::FETCH_ASSOC);

if ($contractTextsNumberOfRecords > 0) {
    $metinid                = $contract["metinid"];
    $HakkimizdaMetin                = $contract["HakkimizdaMetin"];
    $GizlilikSözlesmesiMetin        = $contract["GizlilikSozlesmesiMetin"];
    $KullanimKosullariMetin         = $contract["KullanimKosullariMetin"];
    $cerezpolitikasi                = $contract["cerezpolitikasi"];

}else{

    echo "site ayar sorgusu hatassssı<br />";  // hata mesajını kullanıcılar görmesin
    die();
}
$webPage = $veritabanibaglantisi->prepare("SELECT * FROM sitepage where pagesNumber=? LIMIT 1");

function pageNameCome($number){
    global $webPage;

    $webPage->execute([$number]);
    $webPageNumber =$webPage->rowCount();
    $webPageRecords =$webPage->fetch(PDO::FETCH_ASSOC);
    if($webPageNumber>0){
        return $webPageRecords["pageName"];
    }else{
        $warning = "Sayfa VeriTabanında Bulunamadı";
        return $warning;
    }
}





?>