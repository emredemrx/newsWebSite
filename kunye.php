<?php 
require_once("php/kunyeSorgu.php");
$pageNumber = rakamHaricSil(guvenlikKodu($_GET["sPage"]));
?>
<link rel="stylesheet" href="css/sitecss/kunye.css">
<div class="sagUst" id="sagUst"></div>
<div class="kunye">
    <div class="arka" id="veri"></div>
    <div class="container">
        <div class="kunyeTitle">
            <h1 class="ktitle" ><?php echo pageNameCome($pageNumber);?></h1>
        </div>
        <div class="icerik">
            <ul>
                <?php 
                    if($g_yonetimkunyebilgisayisi>0){
                        foreach ($g_yonetimkunyebilgiKayitlari as $yonetimkayitlari) {
                            ?>
                                <li onmousemove="liuzerinegelince(<?php echo rakamHaricSil($yonetimkayitlari['yonetimKunyeID'])?>)" onmouseout="liuzerinecekilince(<?php echo rakamHaricSil($yonetimkayitlari['yonetimKunyeID'])?>)"> 
                                    <div class="kunyeBaslik"><span id="<?php echo rakamHaricSil($yonetimkayitlari["yonetimKunyeID"])?>"><?php echo donusumleriGeriDondur($yonetimkayitlari["G_Unvan"])?></span></div>
                                    <div class="icerik"><span><?php echo donusumleriGeriDondur($yonetimkayitlari["G_Isim"])?></span></div>
                                </li>
                            <?php
                        }
                    }else{

                    }
                ?>
                
            </ul>
        </div>
        <div class="kunyeAlt">
            <div class="row">
                <!-- <div class="col-12">
                    <div class="kunyeTitle">
                        <span class="ktitle">Medya Hizmet Sağlayıcı Kuruluş Kimlik Bilgisi</span>
                    </div>
                </div> -->
                <div class="col-md-6 col-12 p-3 kunyeAltcol ">
                    <ul>
                        <?php 
                            if($kunyebilgisayisi1>0){
                                foreach ($kunyebilgiKayitlari1 as $kunyekayitlari) {
                                   ?>
                                    <li onmousemove="liuzerinegelince(<?php echo rakamHaricSil($kunyekayitlari['id'])?>)" onmouseout="liuzerinecekilince(<?php echo rakamHaricSil($kunyekayitlari['id'])?>)"> 
                                        <div class="kunyeAltBaslik"><span id="<?php echo rakamHaricSil($kunyekayitlari["id"])?>"><?php echo donusumleriGeriDondur($kunyekayitlari["G_KunyeBaslik"])?></span></div>
                                        <div class="alticerik"><span><?php echo donusumleriGeriDondur($kunyekayitlari["G_BaslikIcerik"])?></span></div>
                                    </li>
                                   <?php
                                }
                            }else{
        
                            }
                        ?>
                    </ul>
                </div>
                <div class="col-md-6 col-12 p-3 kunyeAltcol">
                    <ul>
                        <?php 
                            if($kunyebilgisayisi2>0){
                                foreach ($kunyebilgiKayitlari2 as $kunyekayitlari) {
                                   ?>
                                    <li onmousemove="liuzerinegelince(<?php echo rakamHaricSil($kunyekayitlari['id'])?>)" onmouseout="liuzerinecekilince(<?php echo rakamHaricSil($kunyekayitlari['id'])?>)"> 
                                        <div class="kunyeAltBaslik">
                                            <span id="<?php echo rakamHaricSil($kunyekayitlari["id"])?>"><?php echo donusumleriGeriDondur($kunyekayitlari["G_KunyeBaslik"])?></span>
                                        </div>
                                        <div class="alticerik">
                                            <span><?php echo donusumleriGeriDondur($kunyekayitlari["G_BaslikIcerik"])?></span>
                                        </div>
                                    </li>
                                   <?php
                                }
                            }else{
        
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div> 
        <div class="altsunucuicerik">
            <ul>
                <?php 
                    if($hostandmailsayisi>0){
                        foreach ($hostandmailKayitlari as $kunyekayitlari) {
                            ?>
                                <li onmousemove="liuzerinegelince(<?php echo rakamHaricSil($kunyekayitlari['id'])?>)" onmouseout="liuzerinecekilince(<?php echo rakamHaricSil($kunyekayitlari['id'])?>)"> 
                                    <div class="kunyeBaslik">
                                        <span id="<?php echo rakamHaricSil($kunyekayitlari["id"])?>"><?php echo donusumleriGeriDondur($kunyekayitlari["baslik"])?></span>
                                    </div>
                                    <div class="icerik">
                                        <span><?php echo donusumleriGeriDondur($kunyekayitlari["baslikicerik"])?></span>
                                    </div>
                                </li>
                            <?php
                        }
                    }else{

                    }
                ?>
            </ul>
        </div>   
    </div>
</div>
<script src="js/sitejs/kunyeJS.js"></script>