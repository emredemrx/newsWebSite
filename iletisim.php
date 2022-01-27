<?php 
require_once("settings/dataContect.php");
require_once("settings/sitepage.php");
require_once("php/contactSorgu.php");
require_once("php/icerikaktifligi.php");
ob_start(); 

?>
<link rel="stylesheet" href="css/sitecss/iletisim.css">
<link rel="stylesheet" href="css/sitecss/contactForm.css">


<div class="contact">
    <div class="container">
        <div class="col-12 contact-images resimKapsayici">
            <img src="images/fax.png" alt="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" class="img-fluid">
            <p class="resimYazisi">İletişim</p>
            <p class="resimYazisiTitle"><?php echo donusumleriGeriDondur($SiteAdi); ?></p>
            <span class="arkakutu"></span>
            <span class="arkakutu1"></span>
        </div>
        <div class="col-12 carts">
            <div class="row">
                <div class="col-lg-6 col-12 p-4">
                    <div class="row">
                        <div class="col-12 contact-cart" data-tilt>
                            <div class="box">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                <div class="row p-4">
                                    <div class="col-12">
                                        <div class="contact-icon"><i class="fas fa-map-marked"></i></div>
                                        <span class="contact-address">Adres</span>
                                        <p><?php if($contact["siteAdres"] !=""){echo donusumleriGeriDondur($contact["siteAdres"]); echo " "; echo donusumleriGeriDondur($contact["siteAdresililce"]); }else{echo "Adres";}?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 p-4">
                    <div class="row">
                        <div class="col-12 contact-cart" data-tilt>
                            <div class="box">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.54 5c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51m9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19M7.5 3H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1z"/></svg>
                                <div class="row p-4">
                                    <div class="col-12">
                                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                                        <span class="contact-address">İletişim</span>
                                        <div class="contact-cart-phone">
                                            <!-- <div class="contact-baslik"><span>İzleyici Temsilcisi</span><span>:</span><span>Ali Kaya KAYGUSUZ</span></div>  -->
                                            <?php 
                                                if($contact["siteTelefon"]!="" || $contact["siteTelefon2"]!=""){
                                                    ?>
                                                        <div class="contact-baslik">
                                                            <span>Telefon</span>
                                                            <span>:</span>
                                                            <div>
                                                                <p><?php echo donusumleriGeriDondur($contact["siteTelefon"]); ?></p>
                                                                <p><?php echo donusumleriGeriDondur($contact["siteTelefon2"]); ?></p>
                                                            </div>
                                                        </div>
                                                    <?php
                                                }else{

                                                }
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                $mailaktifligi = icerikaktiflikSorgusu("mail");
                if($mailaktifligi["icerikaktifligisayisi"] == 1){

                ?>
                <div class="col-12 p-4">
                    <div class="row">
                        <div class="col-12 lower-contact-cart">
                            <a href="https://mail.google.com" target="_blank">
                                <div class="box-lower">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg>
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- <div class="contact-icon"><i class="fas fa-envelope"></i></div> -->
                                            <div class="mail-text"><?php echo donusumleriGeriDondur($siteMail ); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                ?>
               
                <div class="col-12 p-4">
                    <div class="row">
                        <?php 
                            $formaktifligi = icerikaktiflikSorgusu("iletisimFormu");
                            if($formaktifligi["icerikaktifligisayisi"] == 1){
                        ?>
                        <div class="col-12 contactForm ">
                            <div class="row">
                                <div class="col-12 ">
                                <div class="contact-wrap">
                                    <form action="javascript:void(0)" class="contact-form">
                                        <div class="col-sm-12">
                                          <div class="input-block">
                                              <label for="">Ad*</label>
                                              <input type="text" class="form-control" name="contactName" id="contactName">
                                          </div>
                                        </div>
                                    
                                        <div class="col-sm-12">
                                          <div class="input-block">
                                              <label for="">Email*</label>
                                              <input type="text" class="form-control" name="contactEmail" id="contactEmail">
                                          </div>
                                        </div>
                                        <div class="col-sm-12">
                                          <div class="input-block">
                                              <label for="">Konu*</label>
                                              <input type="text" class="form-control"  name="contactKonu" id="contactKonu">
                                          </div>
                                        </div>
                                        <div class="col-sm-12">
                                          <div class="input-block textarea" id="textarea">
                                              <label for="">Mesaj*</label>
                                              <textarea rows="3" type="text" maxlength="250" class="form-control" name="contactMessage" id="contactMessage"></textarea>
                                              <div class="harfsayisi" id="harfsayisi"   style="display:flex;justify-content:flex-end;opacity:0.6">0</div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm-12">
                                          <button class="btn square-button"  id="contactMessageSend">Gönder</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            }
                        ?>
                        <?php 
                            $haritaaktifligi = icerikaktiflikSorgusu("harita");
                            if($haritaaktifligi["icerikaktifligisayisi"] == 1){
                        ?>
                        <div class="col-12 lower-contact-map">
                            <div class="row">
                                <div class="col-12 map-area">
                                    <iframe src="<?php echo donusumleriGeriDondur($contact["siteHaritaLink"]); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
</div>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script><script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script> -->
<script  src="js/sitejs/contactJS.js"></script>
<script src="js/sitejs/ajaxjs/contactFormAjax.js"></script>
<script>
$('body').on('click' , '#contactMessageSend', function() {
    var contactName = $('#contactName').val();
    var contactEmail = $('#contactEmail').val()
    var contactKonu = $('#contactKonu').val();
    var contactMessage = $('#contactMessage').val();



    var  data= "contactName="+contactName+"&contactEmail="+contactEmail+"&contactKonu="+contactKonu+"&contactMessage="+contactMessage;

    alert(data);  
    $.ajax({
        type: "post",
        url : "php/ajaxcevap/a.php",
        data: data,
        dataType: 'json',
        success:function(data){
            alert(data.text);  
        },
        error:function(){
            alert("error");
                
        }
    });
});

</script>