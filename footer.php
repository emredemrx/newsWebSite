<?php 
require_once("settings/dataContect.php");
require_once("settings/sitepage.php");
require_once("php/footerSorgu.php");
?>
<footer>
            <link rel="stylesheet" href="css/sitecss/footer.css">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0A142F" fill-opacity="1" d="M0,224L80,218.7C160,213,320,203,480,213.3C640,224,800,256,960,266.7C1120,277,1280,267,1360,261.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            <div class="footer-container">
                <div class="container">
                    <div class="row">
                        <div class="col-12 font-text">
                            <div class="row usttext">
                                <div class="col-12"><span class="footer-slogan"><?php echo  donusumleriGeriDondur($siteSlogan); ?></span></div>
                                <div class="col-12"><span class="footer-adress"><?php  if($contactdatanumber >0){echo donusumleriGeriDondur($contactRecord["siteAdres"]);}else{echo "Site Adres";}?></span></div>
                                <div class="col-12"><button href="xxxxxxxxxxxxxxxxxxxxx" class="btn footer-button">İLETİSİM</button></div>
                                <div class="col-12"><span class="footer-yil">© <?php echo  donusumleriGeriDondur($yil)." ";?><?php echo donusumleriGeriDondur($siteisletmeResmiAd);?></span></div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-12 altBolum d-flex justify-content-between align-items-center">
                            <div class="guneyLogo"> 
                                <a href="?sPage=0">
                                    <img src="images/logoicon/<?php echo  donusumleriGeriDondur($SiteLogo);?>" alt="<?php echo seo(donusumleriGeriDondur($SiteAdi));?>">
                                </a>
                            </div>
                            <div class="siteSosyal">
                                <?php 
                                    if($sitesocialRecordlinknumber>0){
                                        foreach ($sitesocialRecord as $socialRecord) {
                                            ?>
                                                <a href="<?php echo  donusumleriGeriDondur($socialRecord["sosyalMedyaLink"]);?>">
                                                    <label class="sosyal" for="">
                                                        <i class="fab fa-<?php echo  donusumleriGeriDondur($socialRecord["sosyalMedyaLogo"]);?>"></i>
                                                    </label>
                                                </a>
                                            <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer> 
    </body>
</html>
