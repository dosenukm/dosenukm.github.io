<?php
 use PHPMailer\PHPMailer\PHPMailer;

 require_once 'phpmailer/Exception.php';
 require_once 'phpmailer/PHPMailer.php';
 require_once 'phpmailer/SMTP.php';

 $mail = new PHPMailer(true);

 $alert = '';

//  $createAutoClosingAlert='';

 if(isset($_POST['send'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];

     try{
         $mail->isSMTP();
         $mail->Host = 'smtp.gmail.com';
         $mail->SMTPAuth = true;
         $mail->Username = 'adm.dosenukm@gmail.com';
         $mail->Password = 'Freecash7milyarperbulan';
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
         $mail->Port = '587';

         $mail->setFrom('adm.dosenukm@gmail.com');
         $mail->addAddress('adm.dosenukm@gmail.com');

         $mail->isHTML(true);
         $mail->Subject = "Pesan dari $name pengunjung dosenukm.com";
         $mail->Body = "<p>Nama : $name <br>Email : $email <br>Isi pesan : $message</p>";

         $mail->send();
         $alert = '<div class="alert-success">
                     <span>Pesan terkirim! Terima kasih telah menghubungi kami.</span>
                   </div>';

     } catch (Exception $e){
        $alert ='<div class="div-alert-error">
                    <span>'.$e->getMessage().'</span>
                  </div>';           
     }
 }
?>