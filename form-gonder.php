    <?
require("class.phpmailer.php");


//Formdan gelen bilgiler

$email = $_POST['email'] ;



$baslik  = "Mail Listemize Katılın" ;



//Burada mail ile gönderilecek kisimi düzenliyoruz. Yani Mesaj Içerigi
$mesajimiz = "Email Adresi: ".$email."\r\n"  ;  
      





$mail = new PHPMailer();

$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "webmail.argeset.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "setcrm@argeset.com";  // SMTP username
$mail->Password = "qwer4321"; // SMTP password

$mail->From     = "setcrm@argeset.com"; // smtp kullanycy adynyz ile ayny olmaly
$mail->Fromname = $email;
$mail->AddAddress("setcrm@argeset.com",$email);
$mail->Subject  =  $baslik;
$mail->Body     =  $mesajimiz;

if(!$mail->Send())
{
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->Erroriletisim;
   exit;
}



echo "<script>alert(\"Başarıyla Kaydedildiniz \") </script>";

?>
