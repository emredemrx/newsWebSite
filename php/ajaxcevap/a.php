<?php
require("class.phpmailer.php");
require("../../settings/site-function.php");
require("../../settings/siteverileri.php");


extract($_POST);
$siteyoneticimail=''; //site yöneticisinin maili
function Mailsend($name,$adres,$message,$baslik,$konu,$adres2)
{
try
{
//SMPT Bilgileri
$host= $siteMailHost;
$username='';
$password='';
$port=587;
//SMPT Bilgileri

$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPDebug = 0; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'ssl';
$mail->Host = $host;
$mail->Port = $port;
$mail->IsHTML(true);
$mail->SetLanguage('tr', "phpmailer/language");
$mail->CharSet  ='utf-8';
$mail->Username = $username; 
$mail->Password = $password; 
$mail->SetFrom($username, $baslik);
$mail->AddAddress($adres);
$mail->Subject =$konu;
if($adres2=='')
{
	$mail->Body ='<p>'.'İsim:'.$name.'<br/>'.'E-posta:'.$adres.'<br/>'.'Mesaj:'.$message.'</p>';
}
else
{
	$mail->Body ='<p>'.'İsim:'.$name.'<br/>'.'E-posta:'.$adres2.'<br/>'.'Mesaj:'.$message.'<p>';
}
if($mail->Send())
{
$mail->SmtpClose();
return true;	
}
}
catch(Exception $ex)
{
$mail->SmtpClose();
return false;		
}	
return false;
}
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message']))
{	
  if(Mailsend($_POST['name'],$_POST['email'],$_POST['message'],'alikomesogutlu.org','Siteden Mesajınız var','')&&Mailsend($_POST['name'],$siteyoneticimail,$_POST['message'],'alikomesogutlu.org','Siteden Mesajınız var',$_POST['email']))
  {
	 echo true;
  }
  else
  {
	 echo false;
	  
  }

}