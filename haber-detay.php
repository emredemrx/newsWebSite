<?php 
require_once("settings/dataContect.php");
require_once("settings/sitepage.php");
require_once("php/haberdetaySorgu.php");

$gelenHaberID = guvenlikKodu(rakamHaricSil(tumBosluklariSil($_GET["haber"])));
$habericerik = haberBilgisigetir($gelenHaberID);


  
    goruntulenmeKontrol($IPadresim,$habericerik["G_HaberID"]);
?>
<link rel="stylesheet" href="css/sitecss/haber-detay.css">

<div class="news-detail">
    <div class="container">
        <div class="col-12 sayfatapmap">
            <span>Anasayfa</span><i class="fas fa-chevron-right"></i>
            <span>Haber</span><i class="fas fa-chevron-right"></i>
            <span><?php echo donusumleriGeriDondur(kategoriGetir($habericerik["KategoriID"])); ?></span><i class="fas fa-chevron-right"></i> <span class="ustmaptitle" ><?php echo donusumleriGeriDondur($habericerik["G_HaberBaslik"]); ?></span>
        </div>
    </div>
 
    <div class="container">
        <?php 
        if(isset($habericerik)){
        ?>
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center ">
                        <div class="detail row" >
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 news-information">
                                        <span>Haber Tarihi: </span><span>&nbsp;<?php if ($habericerik["G_Tarih"] != "") { echo donusumleriGeriDondur(haberDetaytarihformat($habericerik["G_Tarih"])); }  ?><!-- 8 Temmuz 2021 Perşembe 17:46 --> &nbsp;|</span><span class="kaynak-baslik">Kaynak:&nbsp;</span><span><?php echo donusumleriGeriDondur($habericerik["G_haberKaynak"]) ?></span>
                                    </div>
                                    <div class="col-12 habertitle">
                                        <h1 class="title"><?php echo donusumleriGeriDondur($habericerik["G_HaberBaslik"]); ?></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-none d-xl-block sosyalLinkler">
                                <ul>
                                    <?php 
                                        if($sitesocialRecordlinknumber>0){
                                            foreach ($sitesocialRecord as $socialRecord) {
                                                ?>
                                                    <a href="<?php echo  donusumleriGeriDondur($socialRecord["sosyalMedyaLink"]);?>">
                                                        <li>
                                                            <label class="sosyal" for="">
                                                                <i class="fab fa-<?php echo  donusumleriGeriDondur($socialRecord["sosyalMedyaLogo"]);?>"></i>
                                                            </label>
                                                        </li>
                                                    </a>
                                                <?php
                                            }
                                        }
                                    ?>
                                </ul>
                            </div>
                            
                            <div class="col-12 mt-3">
                                <div class="row haberalt">
                                    <div class="col-lg-8 col-12 habericerikleri">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-12  haberanaimages">
                                            <?php $anares = haberResimSorgu(donusumleriGeriDondur($habericerik["G_AnaResimID"])) ?>
                                                <img class="img-fluid" src="images/newsimages/<?php echo donusumleriGeriDondur($anares["galeriResimAdi"]) ?>" alt="">
                                            </div>
                                            <div class="col-11">
                                                <h2 class="haberOzet"><?php echo donusumleriGeriDondur($habericerik["G_AnaAciklama"]); ?></h2>
                                                <div class="icerikYazisi" style="font-size: 15px;margin-bottom:60px">
                                                    <?php echo donusumleriGeriDondur($habericerik["G_icerik"]); ?>
                                                </div>
                                            </div> 
                                            
                                            <div class="col-11 pb-3 oncekiSONHaber">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="row p-1">
                                                            <?php 
                                                                $gelenoncekihaberkayit = oncekiHaber($gelenHaberID);
                                                               
                                                                if($gelenoncekihaberkayit!= 0){
                                                                    ?>
                                                                        <a class="ilerigerilink" href="?sPage=7&haber=<?php echo donusumleriGeriDondur(guvenlikKodu($gelenoncekihaberkayit["G_HaberID"])) ?>" >
                                                                            <div class="col-12  haberLeft" style="display:flex;flex-direction:row;justify-content:space-between;align-items:center">
                                                                                <div>Önceki Haber</div>
                                                                                <div class="baslikveok">
                                                                                    <i class="fas fa-chevron-left"></i><span class="ilerigeri oncekihaber" ><?php echo $gelenoncekihaberkayit["G_HaberBaslik"]; ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <div class="ilerigerilink" style="opacity:0.7">
                                                                        <div class="col-12  haberLeft" style="display:flex;flex-direction:row;justify-content:space-between;align-items:center">
                                                                            <div>Önceki Haber</div>
                                                                            <div>
                                                                                <i class="fas fa-chevron-left"></i><span class="ilerigeri">Haber Bulunamadı</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                     <?php
                                                                }
                                                            ?>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row p-1">
                                                            <?php 
                                                                $SonrakiHaberSorgukayit = SonrakiHaber($gelenHaberID);
                                                               
                                                                if($SonrakiHaberSorgukayit!= 0){
                                                                    ?>
                                                                    <a class="ilerigerilink" href="?sPage=7&haber=<?php echo donusumleriGeriDondur(guvenlikKodu($SonrakiHaberSorgukayit["G_HaberID"])) ?>">
                                                                        <div class="col-12 haberRight" style="display:flex;flex-direction:row;justify-content:space-between;align-items:center">
                                                                            <div class="baslikveok">
                                                                                <span class="ilerigeri sonrakihaber"><?php echo $SonrakiHaberSorgukayit["G_HaberBaslik"]; ?></span><i class="fas fa-chevron-right"></i>
                                                                            </div>
                                                                            <div>Sonraki Haber</div>
                                                                        </div>
                                                                    </a>
                                                                <?php
                                                                }else{
                                                                    ?>
                                                                    <div class="ilerigerilink" style="opacity:0.7">
                                                                        <div class="col-12  haberRight" style="display:flex;flex-direction:row;justify-content:space-between;align-items:center">
                                                                           
                                                                            <div>
                                                                                <i class="fas fa-chevron-right"></i><span class="ilerigeri">Haber Bulunamadı</span>
                                                                            </div>
                                                                            <div>Sonraki Haber</div>
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
                                       
                                    </div>
                                    <div class="col-12 col-lg-4 haberdetayPageRight" style="justify-content:center">
                                        <div class="row ">
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
                                        <div class="row mt-4">
                                            <div class="col-12 havadurumu">
                                                <!-- Tarsus hava durumu Widget --><script language="javascript" src="https://www.havadurumu15gunluk.xyz/sitene-ekle/1/havadurumu2.js?il=Mersin&ilce=Tarsus&w=300&h=530&title=00134a&bg="></script><noscript><a href="https://www.havadurumu15gunluk.xyz/havadurumu/606/mersin-tarsus-hava-durumu-15-gunluk.html">Tarsus Hava durumu</a></noscript>
                                            </div>
                                        </div>
                                        <div class="row  mt-3 mb-4">
                                            <div class="col-12 ">
                                            <div class="row justify-content-center">
                                                <div class="col-10 karehaberalani">
                                                        <span>Reklam</span>     
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        <?php 
            }else{
                echo "icerik bulunamadı";
            }
        ?>
    </div>
</div>

<script src="js/sitejs/haberdetay.js"></script>
<script src="js/sitejs/jquery.pKisalt.js"></script>