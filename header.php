<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo donusumleriGeriDondur($SiteAdi); ?></title>
        <meta name="description" content="<?php echo donusumleriGeriDondur($SiteDescription); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="tr">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/anacss.css">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body style="background: linear-gradient(#02001b, #082434 50%);">
<?php 
require_once("settings/dataContect.php");
require_once("settings/sitepage.php");
require_once("settings/site-function.php");
require_once("php/headerSorgu.php");
require_once("php/icerikaktifligi.php");

// $pageNumber = $_GET["sPage"];
?>
<link rel="stylesheet" href="css/sitecss/header.css">

<?php 

$sonDakikaDurum = icerikaktiflikSorgusu("sondakika");

if($sonhaberBasliksayisi > 0){
    if($sonDakikaDurum == 1){
        ?>
        <div class="sondakika">
            <div class="container">
                <div class="">
                    <div class="position-relative marquee-container">
                        <div class="marquee">
                            <?php 
                                foreach ($sonhaberBaslikkayitlar as $a ) {
                                    ?> 
                                    <span><?php echo donusumleriGeriDondur($a["G_HaberBaslik"]); ?></span>
                                    <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
    }
}else{

}
?>

<div class="header ">
    <div class="container">
        <div class="row">
            <div class="header-bolum">
                <div class="col-12" >
                    <div class="logo">
                        
                       <a href="?sPage=0"><img  id="logoid" class="" src="images/logoicon/<?php echo donusumleriGeriDondur($SiteLogo);?>" alt="<?php echo seo(donusumleriGeriDondur($SiteAdi));?>"></a> 
                    </div>
                    <div class="pageisimleri d-none d-xl-block">
                        <ul >
                            <li><a href="?sPage=0" >Anasayfa</a></li>  
                            <li><a href="?sPage=5" >Haberler</a></li>
                            <li><a href="?sPage=6" >Yayın Akışı</a></li>
                            <li><a href="?sPage=4" >Künye</a></li>
                            <li><a href="?sPage=3" >iletişim</a></li>
                        </ul>
                    </div>
                    <div class="canliButton">
                        <button onclick="canliyayinAcKapa()" id="btn" class="btn yayinButton">Canlı Yayın</button>
                    </div>
                    <div class= "d-block d-xl-none" id="nav-icon4"  onclick="ac();">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="na" style="display: none;z-index:200;">
    <div class="nav" id="nav">
        <div class="col-12 text-rigtht">
            <div  id="nav-iconkapali" class="nav-close "onclick="kapat();">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="nav-menu" class="nav-menu" >
            <ul>
                <li><a href="?sPage=0" >Anasayfa</a></li>  
                <li><a href="?sPage=5" >Haberler</a></li>
                <li><a href="?sPage=6" >Yayın Akışı</a></li>
                <li><a href="?sPage=4" >Künye</a></li>
                <li><a href="?sPage=3" >iletişim</a></li>
            </ul>
        </div>
    </div>
</div>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/sitejs/header.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js"></script>

