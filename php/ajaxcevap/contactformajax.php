<?php require("class.phpmailer.php");
extract($_POST);
require("../../settings/site-function.php");
require("../../settings/siteverileri.php");



if(isset($_POST["contactName"])){
    $incomingmessagename = guvenlikKodu($_POST["contactName"]);
}else{
    $incomingmessagename ="";
}

if(isset($_POST["contactEmail"])){
    $incomingmessageEmail =guvenlikKodu($_POST["contactEmail"]);

}else{
    $incomingmessageEmail ="";
}

if(isset($_POST["contactKonu"])){
    
    $incomingmessageKonu = guvenlikKodu($_POST["contactKonu"]);
}else{
    $incomingmessageKonu ="";
}

if(isset($_POST["contactMessage"])){
    $incomingmessageMessage = guvenlikKodu($_POST["contactMessage"]);
}else{
    $incomingmessageMessage ="";
}


if($incomingmessagename !="" && $incomingmessageEmail !="" && $incomingmessageKonu !="" && $incomingmessageMessage !="" ){
    
   
        
             $MailGonder = new PHPMailer(true);
             try {
                 $MailGonder->SMTPDebug = 0;                      
                 $MailGonder->isSMTP();
                 $MailGonder->Host       = donusumleriGeriDondur($siteMailHost);        /*veri tabanından site mailine uygun düzelt şuan gmail için ayarlanmış durumda  */    
                 $MailGonder->SMTPAuth   = true;  
                 $MailGonder->CharSet   = "UTF-8";                       
                 $MailGonder->Username   =donusumleriGeriDondur($siteMail);                 
                 $MailGonder->Password   = donusumleriGeriDondur($siteMailSifre);                   
                 $MailGonder->SMTPSecure = "tls";
                 $MailGonder->Port       = 587;    /*bunuda kiralık olan hostun verdiği port numarasınına göre ayarla*/
                 $MailGonder->SMTPOptions = array(    /*burası localde ssl bölümü localde mail atabilmek için */
                                 'ssl' => array(
                                 'verify_peer' => false,
                                 'verify_peer_name' => false,
                                 'allow_self_signed' => true
                                     )
                             );
                            
             $MailGonder->setFrom(donusumleriGeriDondur($siteMail), donusumleriGeriDondur($SiteAdi));
             $MailGonder->addAddress(donusumleriGeriDondur($siteMail), donusumleriGeriDondur($SiteAdi));     // Add a recipient         
             $MailGonder->addReplyTo($incomingmessageEmail, $incomingmessagename);
                    
             $MailGonder->isHTML(true);                                  // Set email format to HTML
             $MailGonder->Subject = donusumleriGeriDondur($incomingmessageMessage) . ' İletişim Formu Mesajı';   /*konu başlığı */
                $MailGonder->MsgHTML($message);  /*kişinin yazdığı içerik */
                $MailGonder->send();
                            
    
             $data["text"] = "Başarıyla Gönderdiniz";
        

            } catch(Exception $ex){
                    
             $data["text"] = "Bir Sorun Oluştu";
            
            
         }
                        
            
  
}else{
    $data["text"] = "bos alan bırakmayınız";
}

echo json_encode($data);


?>
