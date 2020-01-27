<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Mailer{

  public $to_address;
  public $name;
  

  function sendMail(){
      // Load Composer's autoloader
      require 'vendor/autoload.php';

      // Instantiation and passing `true` enables exceptions
      $mail = new PHPMailer(true);

      try {
          //Server settings
          $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'enroloenrolo@gmail.com';                     // SMTP username
          $mail->Password   = 'enrolo@123';                               // SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
          $mail->Port       = 587;                                    // TCP port to connect to
          $mail->CharSet = "utf-8";

          //Recipients
          $mail->setFrom('Kalam2020@gmail.com', 'Kalam2020');
          $mail->addAddress($this->to_address, $this->name);     // Add a recipient
          /* $mail->addAddress('ellen@example.com');               // Name is optional
          $mail->addReplyTo('info@example.com', 'Information');
          $mail->addCC('cc@example.com');
          $mail->addBCC('bcc@example.com');
      */
          // Attachments
        /*   $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
          $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      */
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Welcome';
          $mail->Body    = $this->createMail();
        //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();

      } catch (Exception $e) {
        http_response_code(500);
        echo json_encode( array("meta" => array( "code" => 500, "status"=>"failed", "DetailedMessage"=> $mail->ErrorInfo),));
      }
  }

  function createMail(){
    $message_templet = file_get_contents('../phpmailer/email_templet.html');
    $message_templet = str_replace('%name%',$this->name,$message_templet);
    return $message_templet;
  }
}