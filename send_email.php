<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Composer autoload dosyasını yükleyin

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // PHPMailer ile e-posta gönder
    $mail = new PHPMailer(true);
    try {
        // SMTP ayarları
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com';  // SMTP sunucusu (Örneğin: smtp.gmail.com)
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@example.com';  // SMTP kullanıcı adı (E-posta adresiniz)
        $mail->Password = 'your-email-password';  // SMTP şifreniz
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;  // SMTP portu (Gmail için 587 veya 465)

        // Gönderen ve alıcı ayarları
        $mail->setFrom('your-email@example.com', 'Your Name');
        $mail->addAddress('recipient@example.com');  // Alıcı e-posta adresi

        // E-posta içeriği
        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission';
        $mail->Body    = "<h2>New Form Submission</h2>
                          <p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong><br>$message</p>";

        $mail->send();
        echo 'Thank you! Your message has been sent.';
    } catch (Exception $e) {
        echo "Oops! Something went wrong and we couldn't send your message. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
