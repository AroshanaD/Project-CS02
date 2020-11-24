<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;;

    class mail_authentication{
        public function __construct(){

        }
        public function send_mail($subject,$body,$to){

            require_once "vendor/autoload.php";
            $mail = new PHPMailer(TRUE);
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = TRUE;                                   // Enable SMTP authentication
                $mail->Username   = 'medcaid.info@gmail.com';                     // SMTP username
                $mail->Password   = 'Medcaid@918';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                //Recipients
                $mail->setFrom('medcaid.info@gmail.com', 'Medcaid');
                $mail->addAddress($to);     // Add a recipient
                //$mail->addReplyTo('no-repy@medcaid.org', 'Authentication');
            
                // Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
                // Content
                $mail->isHTML();                                  // Set email format to HTML
                $mail->Subject = $subject;
                //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->Body = $body;
            try{
                $mail->send();
                return TRUE;
            }
            catch(Exception $e){
                return FALSE;
            }
        }
    }

?>