<?php 
require_once("settings/dataContect.php");
require_once("settings/settingsDatabaseSorgu.php");
require_once("settings/sitepage.php");
require_once("settings/siteverileri.php");
require_once("settings/site-function.php");


if (isset($_REQUEST["sPage"])) {
    $sayfakodudegeri = rakamHaricSil(guvenlikKodu($_REQUEST["sPage"]));
}else
{
    $sayfakodudegeri = 0;
}
?>

    <!-- header -->
    <?php 
        include($sPage[1]);
    ?>
        <!-- -- -->
        <!-- main -->
        <div class="" style="min-height:110vh;color:white;">
            <?php 
                if ((!$sayfakodudegeri) or ($sayfakodudegeri =="") or ($sayfakodudegeri== 0)) {
                    include($sPage[0]);
                }else{
                    include($sPage[$sayfakodudegeri]);
                }
            
            ?>
        </div>
        <!-- -- -->
    <!-- footer -->
    <?php
        include($sPage[2]);
    ?>  
        <!-- -- -->
<?php
    $veritabanibaglantisi = null;
    ob_end_flush();
?>

