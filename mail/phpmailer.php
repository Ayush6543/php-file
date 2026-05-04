<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

$message_sent = false;
$error_message = "";

if (isset($_POST['submitContact'])) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ayuprak31@gmail.com'; 
        $mail->Password   = 'wxlj jfcd eied jqnf';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('ayuprak31@gmail.com', 'Contact Form');
        $mail->addAddress('ayuprak31@gmail.com'); 
        $mail->addReplyTo($_POST['email'], $_POST['full_name']);

        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'];
        $mail->Body    = "<h3>New Message</h3>
                          <p><b>Name:</b> {$_POST['full_name']}</p>
                          <p><b>Email:</b> {$_POST['email']}</p>
                          <p><b>Message:</b><br>" . nl2br(htmlspecialchars($_POST['message'])) . "</p>";

        $mail->send();
        $message_sent = true;
    } catch (Exception $e) {
        $error_message = "Mailer Error: " . $mail->ErrorInfo;
    } catch (\Exception $e) {
        $error_message = "General Error: " . $e->getMessage();
    }
}
?>