<?php 
require_once("settings/dataContect.php");
require_once("settings/sitepage.php");
require_once("php/haberlerSorgu.php");

?>
<link rel="stylesheet" href="css/sitecss/haberler.css">


<div class="news">
    <div class="arka-spin"></div>
    <div class="container">
        <!-- <div class="row">
            <div class="col-12 pt-3 pb-4">
                harita
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-8 col-12" >
                <div class="row">
                <?php 
                    if($habersayi >0){
                        foreach ($haberkayitlar as $newsData) {
                            ?>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-12">
                                <div class="row p-2 ">
                                    <div class="col-12 p-0">
                                        <a href="?sPage=7&haber=<?php echo donusumleriGeriDondur(guvenlikKodu($newsData["G_HaberID"])) ?>">
                                            <div class="snip1527">
                                                <?php $res =  haberResimSorgu($newsData["G_AnaResimID"]) ?>
                                                <img src="images/newsimages/<?php echo donusumleriGeriDondur($res["galeriResimAdi"]) ?>" alt="<?php echo seo(donusumleriGeriDondur($newsData["G_HaberBaslik"])) ?>" />
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
                                                            <p class="newsNewstitle">
                                                            <?php echo donusumleriGeriDondur($newsData["G_AnaAciklama"]) ?>
                                                            </p>
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
            <div class="col-12 col-lg-4  d-sm-block haberlerPageRight">
                <div class="row p-1">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 sonHaber">
                                <span class="sonHabertitle">
                                    Son Haberler
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
                                            <a href="?sPage=7&haber=<?php echo donusumleriGeriDondur(guvenlikKodu($newsData["G_HaberID"])) ?>">
                                                <li>
                                                    <div class="shadow">
                                                        <div class="gorsel">
                                                            <img class="gor img-fluid" src="images/newsimages/<?php echo donusumleriGeriDondur($res["galeriResimAdi"]) ?>" alt="" style="object-fit: cover;height: 100px;width: 120px;">
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
                <div class="row reklamAlani">
                    <div class="d-none d-lg-block col-12 p-0">
                        <img class="img-fluid" src="images/reklam.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/sitejs/haberlerJS.js"></script>
<script src="js/sitejs/jquery.pKisalt.js"></script>