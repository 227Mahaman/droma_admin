<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($message) {//Send Mail to Abonné
  $news = new news();
  $data = Manager::getDatas($news)->all();
  
  $m=1;
  if (is_array($data) || is_object($data)) {
    $temp = array_keys($data);
    $last_key = end($temp);
    foreach ($data as $key => $value) {
      $object = $objet;
      ob_start();
      ?>
      <p>Bonjour</p> 
  <p<?= $message ?></p>
<br>
<br>
<br>
<p>--</p><br>
<b><em>Equipe - Sonef Transport voyageur</em></b>
<b><em>+227 90 90 12 39 / 89 59 26 26</em></b>

<?php
      $messages = ob_get_clean();

      // Instantiation and passing `true` enables exceptions
      $mail = new PHPMailer(true);

      try {
          //Server settings
          $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'mail34.lwspanel.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'contact@sonef.net';                     // SMTP username
          $mail->Password   = '$onef@M@ail2@';                               // SMTP password
          $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
          //$mail->SMTPDebug   = 1;
          
          //Recipients
          $mail->setFrom('contact@sonef.net', 'Sonef');
          $mail->addAddress($value['mail'], 'Client'); 
          
          if ($m==1) {
            $mail->addAddress($value['mail'], 'Client'); 
          } 
          $m++;   // Add a recipient
          //$mail->addAddress('ellen@example.com');               // Name is optional
          //$mail->addReplyTo('hello@coronackathon.org', 'Présélection au Hackathon');
          // $mail->addCC('cc@example.com');
          // $mail->addBCC('bcc@example.com');

          // Attachments
          // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
          // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = $object;
          $mail->Body    = $messages;
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          if ($mail->send()) {
            
            $i =0;
            if ($key = $last_key) {
              $i++;
              echo "<script>window.location.assign('index.php?action=abonne')</script>";
            }
            
            if (count($data)==1 && $i==0) {
              //die("oj");
              echo "<script>window.location.assign('index.php?action=abonne')</script>";
            }
          }
      } catch (Exception $e) {
          //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }
  }
}
