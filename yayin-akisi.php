<?php 
require_once("settings/dataContect.php");
require_once("settings/sitepage.php");
require_once("settings/site-function.php");
require_once("php/streamingSorgu.php");

if(isset($_GET["gun"]) and isset($_GET["dateDataID"]) ){
    $dayname = guvenlikKodu($_GET["gun"]);
    $dayID = guvenlikKodu($_GET["dateDataID"]);
}else{
    $dayname = "";
    $dayID= "";
}

?>
<link rel="stylesheet" href="plugin/swiperSlider/css/swiper-bundle.css" />
<link rel="stylesheet" href="plugin/swiperSlider/css/swiper-bundle.min.css" />
<link rel="stylesheet" href="css/sitecss/streaming.css">

<?php 
    $datebaseGunler = array('Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi','Pazar');
    $guntarihleri = array();
    for($i = 0;$i < count($datebaseGunler);$i++){
        array_push($guntarihleri,tarihgetir($datebaseGunler[$i]));
    }
   
?>
<div class="streaming-up">
    <div class="container">
        <div class="pt-5">
            <div class="col-12 streaming-logo" >
                <img id="logo_image"src="images/logoicon/logo.png" alt="">
                <span>Yayın Akışı</span>
            </div>
            <div class="d-none d-xl-block col-12 mt-5 p-0 week-area" data-getDay="<?php echo $dayname;?>" data-gun="<?php echo $datemerge;?>">
                <ul>
                <?php 
                    for($i=0;$i <count($gunler);$i++){
                    ?>
                    <a  href="?sPage=6&gun=<?php echo $i + 1; ?>&dateDataID=<?php echo tarihIDgetir($guntarihleri[$i]); ?>">
                        <li class="yayinGunleri  <?php echo $i + 1; ?>" data-gunayyil="<?php echo datemerge($guntarihleri[$i]); ?>">
                            <div class="day">
                               <?php echo $gunler[$i] ?>
                            </div>
                            <div class="date">
                                <?php echo $guntarihleri[$i]; ?>
                            </div>
                        </li>
                    </a>
                    <?php
                    }
                ?>

                <!-- //for ile yaapmadan önceki hali
                    <a  href="?sPage=6&gun=1&dateDataID=<?php echo tarihIDgetir($guntarihleri[0]); ?>">
                        <li class="yayinGunleri 1" data-gunayyil="<?php echo datemerge($guntarihleri[0]); ?>">
                            <div class="day">
                                Pazartesi
                            </div>
                            <div class="date">
                                <?php echo $guntarihleri[0]; ?>
                            </div>
                        </li>
                    </a>
                -->
                </ul>
            </div>
        </div>
       
        <div class="row Akis-slider">
            <div class="d-block d-xl-none col-12 mt-5" style="display: flex;justify-content:center">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php 
                            for($i=0;$i <count($gunler);$i++){
                            ?>
                            <a href="?sPage=6&gun=<?php echo $i + 1; ?>&dateDataID=<?php echo tarihIDgetir($guntarihleri[$i]); ?>" class="<?php echo $i + 1; ?> swiper-slide yayinGunleri" data-gunayyil="<?php echo datemerge($guntarihleri[$i]); ?>">
                                <div class="day">
                                    <?php echo $gunler[$i] ?>
                                </div>
                                <div class="date">
                                <?php echo $guntarihleri[$i]; ?>
                                </div>
                            </a>
                            <?php
                            }
                        ?>
                        <!-- //for ile yaapmadan önceki hali
                            <a href="?sPage=6&gun=1&dateDataID=<?php echo tarihIDgetir($guntarihleri[0]); ?>" class="1 swiper-slide yayinGunleri" data-gunayyil="<?php echo datemerge($guntarihleri[6]); ?>">
                                <div class="day">
                                    Pazartesi
                                </div>
                                <div class="date">
                                <?php echo $guntarihleri[0]; ?>
                                </div>
                            </a>
                        -->
                    </div>
                   
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="streaming-alt">
    <div class="container">
        <div class="row">
            <div class="col-12 yayin-saatleri">
                <ul>
                    <li>
                        <div class="row">
                        <?php 
                        // $rrr = strtotime("22.07.2021 10:45");
                        // echo  $rrr;  
                        // echo date("H:i.s",$rrr);

                        $yayinicerikleri = streamingData($dayID);
                        if(count($yayinicerikleri) >0){
                            foreach ($yayinicerikleri  as $data) {
                                ?>    
                                    <div class="col-12 saatlikveri" data-livecontent="<?php echo donusumleriGeriDondur(hourData($data["YayinicerikSaati"])) ?>" data-hour="">
                                        <div class="c"></div>
                                        <div class="akis">
                                            <span class="icerikadi" style="width:50%;text-align:center"><?php echo donusumleriGeriDondur($data["Yayinicerik"]) ?></span>
                                            <span class="saatVerisi" style="width:50%;text-align:center"><?php echo donusumleriGeriDondur(hourData($data["YayinicerikSaati"])) ?></span>
                                        </div>
                                    </div>
                                <?php
                            }
                        }else{
                        ?>    
                            <div class="col-12 saatlikveri">
                                <div class="c"></div>
                                <div class="akis">
                                    <span class="icerikadi" style="width:100%;text-align:center">Kayıt Oluşturulmadı</span>
                                </div>
                            </div>
                        <?php
                        }
                        ?>                           
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
 </div>

<script src="plugin/swiperSlider/js/swiper-bundle.js"></script>
<script src="plugin/swiperSlider/js/swiper-bundle.min.js"></script> 
<script src="plugin/swiperSlider/js/swiper-bundle.js.map"></script>
<script src="plugin/swiperSlider/js/swiper-bundle.min.js.map"></script>

<script src="js/sitejs/streaming.js"></script>
