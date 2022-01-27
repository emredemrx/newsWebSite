<?php 
require_once("settings/dataContect.php");
require_once("php/icerikaktifligi.php");
require_once("php/homeSorgu.php");
?>
<link rel="stylesheet" href="plugin/swiperSlider/css/swiper-bundle.css" />
<link rel="stylesheet" href="plugin/swiperSlider/css/swiper-bundle.min.css" />
<style>
    .lazy {
        
        display: block;
    }
</style>
<link rel="stylesheet" href="css/sitecss/home.css">
<div class="home">
    <div class="canli canlikapat " id="c">
        <div class="container">
            <div class="video" id="v">
            </div>
        </div>
    </div>
    <?php 
        $usticerik = "Ust Manset";
        $ustbolum = icerikaktiflikSorgusu($usticerik);

   
        if($ustbolum["icerikaktifligisayisi"]>0){
            ?> 
            <div class="usthaber">
                    <div class="container">
                        <div class="row">
                            <div class="col-12" >
                                <div class="row p-2">
                                    <?php 
                                        $icerikadi = "Manset";
                                        $turid = turid($icerikadi);
                                        $ustbolum = icerikGetir($turid["turid"]);
                                       
                                    ?>
                                    <div class="col-md-8 col-12 homeBigNew">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row p-1">
                                                    <div class="col-12 p-0 homebignewimagecol">
                                                        <a href="?sPage=7&haber=<?php echo donusumleriGeriDondur(guvenlikKodu($ustbolum["HaberGetirmeKayit"][0]["G_HaberID"])) ?>" title="<?php echo seo(donusumleriGeriDondur($ustbolum["HaberGetirmeKayit"][0]["G_HaberBaslik"])); ?>" class="main item homebignewimages" target="_blank">
                                                            <img class="full-wh-bg-img img-fluid haberimageszoom " src="images/newsimages/<?php echo haberResimSorgu($ustbolum["HaberGetirmeKayit"][0]["G_AnaResimID"])["galeriResimAdi"]; ?>" alt="<?php echo seo(donusumleriGeriDondur($ustbolum["HaberGetirmeKayit"][0]["G_HaberBaslik"])); ?>">
                                                            <div>
                                                                <span class="kategori"><?php echo donusumleriGeriDondur(haberlerKategoriGetir($ustbolum["HaberGetirmeKayit"][0]["KategoriID"])); ?></span>
                                                            </div>
                                                            <div>
                                                                <div class="fivelex-gradient ">
                                                                    <div class="title"><?php echo donusumleriGeriDondur($ustbolum["HaberGetirmeKayit"][0]["G_HaberBaslik"]); ?></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12  homeBigNew">
                                        <div class="row">
                                            <?php 
                                                for ($i=1; $i<=2 ; $i++) { 
                                                   ?>
                                                    <div class="col-12 homesmallupnews">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row p-1">
                                                                    <div class="col-12 homebignewimagecol p-0">
                                                                        <a href="?sPage=7&haber=<?php echo donusumleriGeriDondur(guvenlikKodu($ustbolum["HaberGetirmeKayit"][$i]["G_HaberID"])) ?>" title="<?php echo seo(donusumleriGeriDondur($ustbolum["HaberGetirmeKayit"][$i]["G_HaberBaslik"])); ?>" class="main item homesmallnewimages" target="_blank" style=" width: 100%;">
                                                                        <img class="full-wh-bg-img img-fluid haberimageszoom " src="images/newsimages/<?php echo haberResimSorgu($ustbolum["HaberGetirmeKayit"][$i]["G_AnaResimID"])["galeriResimAdi"]; ?>" alt="<?php echo seo(donusumleriGeriDondur($ustbolum["HaberGetirmeKayit"][$i]["G_HaberBaslik"])); ?>">
                                                                            <div>
                                                                                <span class="kategori"><?php echo donusumleriGeriDondur(haberlerKategoriGetir($ustbolum["HaberGetirmeKayit"][$i]["KategoriID"])); ?></span>
                                                                            </div>
                                                                            <div>
                                                                                <div class="fivelex-gradient ">
                                                                                    <div class="title"><?php echo donusumleriGeriDondur($ustbolum["HaberGetirmeKayit"][$i]["G_HaberBaslik"]); ?></div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php
                                                }
                                            ?>
                                           <!--  <div class="col-12 homesmalldownnews">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row p-1">
                                                            <div class="col-12 img-fluid homebignewimagecol p-0">
                                                                <a href="xxxxxxxxx" title="xxxx" class="main item homesmallnewimages"  target="_blank">
                                                                    <img class="full-wh-bg-img img-fluid haberimageszoom "  src="images/newsimages/2.png" alt="" >
                                                                    <div>
                                                                        <span class="kategori">Ekonimi</span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="fivelex-gradient">
                                                                            <div class="title">Bayram tatili kaç gün olacak? Kabine yarın toplanıyor</div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php 
        }
        ?>
    <div class="anaHaber ">
        <div class="container">
            <div class="col-12 homePageBlockTitle pt-4">
                <h4>Haber</h4>
                <div class="cizgi"></div>
                <?php 
                    $icerikadi = "Genel";
                    $turid = turid($icerikadi);
                    $Genelbolum = icerikGetir($turid["turid"]);
                   
                ?>
            </div>
            <div class="haberSlider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php 
                        $genelSlider  =  sliderAdet("homegenelhaber");
                        if(($Genelbolum["HaberGetirmeSayisi"])>=$genelSlider){
                            $genelSliderAdet  =  $genelSlider;
                        }else{
                            $genelSliderAdet  =  $Genelbolum["HaberGetirmeSayisi"];
                        }
                            for ($i=0; $i < $genelSliderAdet ; $i++) { 
                                ?> 
                                 <div class="swiper-slide ">
                                    <a href="?sPage=7&haber=<?php echo $Genelbolum["HaberGetirmeKayit"][$i]["G_HaberID"]; ?>">

                                        <div class="images">
                                            <img class="img-fluid" src="images/newsimages/<?php echo haberResimSorgu($Genelbolum["HaberGetirmeKayit"][$i]["G_AnaResimID"])["galeriResimAdi"]; ?>" alt="<?php echo seo(donusumleriGeriDondur($Genelbolum["HaberGetirmeKayit"][0]["G_HaberBaslik"])); ?>" style="object-fit: cover;" >
                                        </div>
                                        <div>
                                            <span class="kategori"><?php echo donusumleriGeriDondur(haberlerKategoriGetir($Genelbolum["HaberGetirmeKayit"][$i]["KategoriID"])); ?></span>
                                        </div>
                                        <div class="slideralt">
                                            <div class="col-12   tarih">
                                                <i class="far fa-clock"></i>
                                                <span><?php echo donusumleriGeriDondur(tarihDonustur($Genelbolum["HaberGetirmeKayit"][$i]["G_Tarih"])); ?></span>
                                            </div>
                                            <div class="col-12 anahaberSliderBaslik">
                                                <h4 class="anahaberSliderBaslikmetini"><?php echo donusumleriGeriDondur($Genelbolum["HaberGetirmeKayit"][$i]["G_HaberBaslik"]); ?></h4>
                                            </div>
                                            <div class="goruntulenme">
                                                <i class="far fa-eye"></i><span><?php echo donusumleriGeriDondur($Genelbolum["HaberGetirmeKayit"][$i]["G_Goruntulenme"]); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    $videoHaberAdi = "Video Haber";
    $videoHaber = icerikaktiflikSorgusu($videoHaberAdi);
                            
    if($videoHaber["icerikaktifligisayisi"]>0){
        $videoHabericerik =  videoHaberGetirme();
       
        if($videoHabericerik["videoHaberGetirmeSayisi"] >2){
            $videoHaber  =  sliderAdet("videohaber");
            
        ?>
            <div class="videohaber lazy">
                <div class="container">
                    <div class="col-12 homePageBlockTitle pt-4">
                        <h4>Video Haberleri</h4>
                        <div class="cizgi"></div>
                    </div>
                    <div class="videoHaberContainer" data-website="<?php echo $siteURL; ?>">
                        <div class="col-12">
                            <div class="row">
                                <?php 
                                    $iddizi = array("video1","video2","video3");
                                    for ($i=0; $i < $videoHaber; $i++) { 
                                        ?>
                                             
                                            <div class="col-md-4 col-12 videocol">
                                                <div class="row p-2">
                                                    <div class="col-12 videodiv lazy" style="background: url(images/resim.jpg);" data-loader="youtubeLoader" data-video="tH2TvzgFCU0"  id="<?php echo $iddizi[$i] ?>" data-videoid="<?php echo $videoHabericerik["videoHaberGetirmeKayit"][$i]["videoKodu"] ?>">
                                                    </div>
                                                    <div class="col-12 date">
                                                        <i class="far fa-clock"></i>
                                                        <span><?php echo donusumleriGeriDondur(tarihDonustur($videoHabericerik["videoHaberGetirmeKayit"][$i]["G_Tarih"])) ?></span>
                                                    </div>
                                                </div>
                                            </div>
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
    }

    ?>
    <?php 
        $icerikadi = "Slider Manset";
        $turid = turid($icerikadi);
        $altMansetbolum = icerikGetir($turid["turid"]);
        

        $altmansetAdiaktiflik = "slider manset";
        $altmanset = icerikaktiflikSorgusu($altmansetAdiaktiflik);           
        if($altmanset["icerikaktifligisayisi"]>0){
            if($altMansetbolum["HaberGetirmeSayisi"]>3){
                ?>
                    <div class="mansethaberleri ">
                        <div class="container">
                            <div class="col-12 homePageBlockTitle pt-4">
                                <h4>Manşet Haberleri</h4>
                                <div class="cizgi"></div>
                            </div>
                            <div class="col-12">
                                <div class="slider">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                        <?php 
                                            $mansetSlider  =  sliderAdet("anasayfamansetslider");
                                            
                                            if(($altMansetbolum["HaberGetirmeSayisi"])>=$mansetSlider){
                                                $mansetSliderAdet  =  $mansetSlider;
                                            }else{
                                                $mansetSliderAdet  =  $altMansetbolum["HaberGetirmeSayisi"];
                                            }
                                                for ($i=0; $i < $mansetSliderAdet ; $i++) { 
                                                    ?> 
                                                    <div class="swiper-slide">
                                                        <a href="?sPage=7&haber=<?php echo $altMansetbolum["HaberGetirmeKayit"][$i]["G_HaberID"]; ?>">
                                                            <div class="images">
                                                                <img  class="img-fluid lazy" src="images/resim.jpg" data-src="images/newsimages/<?php echo haberResimSorgu($altMansetbolum["HaberGetirmeKayit"][$i]["G_AnaResimID"])["galeriResimAdi"]; ?>" alt="<?php echo seo(donusumleriGeriDondur($altMansetbolum["HaberGetirmeKayit"][0]["G_HaberBaslik"])); ?>"   style="object-fit: cover;">
                                                            </div>
                                                            <div>
                                                                <span class="kategori"><?php echo donusumleriGeriDondur(haberlerKategoriGetir($altMansetbolum["HaberGetirmeKayit"][$i]["KategoriID"])); ?></span>
                                                            </div>
                                                            <div class="slideralt">
                                                                <div class="col-12 tarih">
                                                                    <i class="far fa-clock"></i>
                                                                    <span><?php echo donusumleriGeriDondur(tarihDonustur($altMansetbolum["HaberGetirmeKayit"][$i]["G_Tarih"])) ?></span>
                                                                </div>
                                                                <div class="col-12 anahaberSliderBaslik">
                                                                    <h4 class="mansethaberSliderBaslikmetini"><?php echo donusumleriGeriDondur($altMansetbolum["HaberGetirmeKayit"][$i]["G_HaberBaslik"]); ?></h4>
                                                                </div>
                                                                <div class="goruntulenme">
                                                                    <i class="far fa-eye"></i><span><?php echo donusumleriGeriDondur(rakamHaricSil($altMansetbolum["HaberGetirmeKayit"][$i]["G_Goruntulenme"])); ?></span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php 
                                                    }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
            }
        }  
        ?>


    <div class="downnews lazy">
        <div class="container">
            <div class="col-12 p-1">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <?php 
                                if($habersayi >0){
                                    foreach ($haberkayitlar as $newsData) {
                                        ?>
                                        <div class="col-lg-4 col-6 snipNews hideme">
                                            <div class="row p-2 ">
                                                <div class="col-12 p-0">
                                                    <a href="?sPage=7&haber=<?php echo donusumleriGeriDondur(guvenlikKodu($newsData["G_HaberID"])) ?>">
                                                        <div class="snip1527">
                                                            <?php $res =  haberResimSorgu($newsData["G_AnaResimID"]) ?>
                                                            <img src="images/resim.jpg" class="lazy" data-src="images/newsimages/<?php echo donusumleriGeriDondur($res["galeriResimAdi"]) ?>" alt="<?php echo seo(donusumleriGeriDondur($newsData["G_HaberBaslik"])) ?>" />
                                                            <span class="kategori"><?php echo donusumleriGeriDondur(haberlerKategoriGetir(rakamHaricSil($newsData["KategoriID"])))  ?></span>
                                                            <div class="new-footer">
                                                                <div class="date">
                                                                    <span class="day"><?php echo donusumleriGeriDondur(dateGunformat($newsData["G_Tarih"])) ?></span>
                                                                    <span class="month"><?php echo donusumleriGeriDondur(dateAyformat($newsData["G_Tarih"])) ?></span>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 title">
                                                                        <span><?php echo donusumleriGeriDondur($newsData["G_HaberBaslik"]) ?></span>
                                                                    </div> 
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 paragraf">
                                                                        <span class="newsNewstitle">
                                                                            <?php echo donusumleriGeriDondur($newsData["G_AnaAciklama"]) ?>
                                                                        </span>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }else{
                                    echo "Yazı bulunamadı";
                                }
                            ?>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-12 homedownbaslikhaber">
                        <div class="row p-1">
                            <div class="col-12 sonHaber">
                                <span class="sonHabertitle">
                                    Güncel Haberler
                                </span>
                            </div>
                            <div class="col-12 sonHaberler">
                                <ol>
                                <?php 
                                    $say=1;
                                        if($rightHabersayi >0){
                                            foreach ($rightHaberkayitlar as $newsData) {
                                            ?>
                                            <?php 
                                                $res =  haberResimSorgu($newsData["G_AnaResimID"]) ?>
                                               
                                                    <a class="hideme" href="?sPage=7&haber=<?php echo donusumleriGeriDondur(guvenlikKodu($newsData["G_HaberID"])) ?>">
                                                        <li>
                                                            <div class="shadow">
                                                                <div class="gorsel">
                                                                    <img class="gor img-fluid lazy" src="images/resim.jpg" data-src="images/newsimages/<?php echo donusumleriGeriDondur($res["galeriResimAdi"]) ?>" alt="" style="object-fit: cover;height: 100px;width: 120px;">
                                                                </div>
                                                                <span class="number"><?php echo $say; ?></span>
                                                                <div class="haberTitle" >
                                                                    <span class="haberTitleKisalt"><?php echo donusumleriGeriDondur($newsData["G_HaberBaslik"]) ?> </span>
                                                                    
                                                                    <div class="goruntulenme">
                                                                        <i class="fas fa-eye"></i><span class="goruntulenmesayisi"><?php echo donusumleriGeriDondur($newsData["G_Goruntulenme"]) ?> </span><span class="kategori"><?php echo donusumleriGeriDondur(haberlerKategoriGetir($newsData["KategoriID"])) ?> </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </a>
                                                
                                            <?php
                                            ++$say;
                                            }
                                        }else{

                                        }
                                    ?>
                                </ol>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="plugin/swiperSlider/js/swiper-bundle.js"></script>
<!-- <script src="plugin/swiperSlider/js/swiper-bundle.min.js"></script>  -->
<script src="plugin/swiperSlider/js/swiper-bundle.js.map"></script>
<!-- <script src="plugin/swiperSlider/js/swiper-bundle.min.js.map"></script> -->
<script src="js/sitejs/jquery.pKisalt.js"></script>
<script src="js/sitejs/home.js"></script>
<script src="js/sitejs/youtube-iframe-api.js"></script>

<!-- jsDeliver -->
<script type="text/javascript" src="js/jquery.lazy.js"></script>
<script type="text/javascript" src="js/jquery.lazy.plugins.js"></script>

<script type="text/javascript" src="js/jquery.lazy.min.js"></script>
<script type="text/javascript" src="js/jquery.lazy.plugins.min.js"></script>

