<?php 
use PhpMailer\PhpMailer\PHPMailer;
use PhpMailer\PhpMailer\Exception;

require 'PhpMailer/phpmailer/src/Exception.php';
require 'PhpMailer/phpmailer/src/PHPMailer.php';
require 'PhpMailer/phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    // Sanitize and validate input data
    $name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : '';
    $clientEmail = isset($_POST["Clientemail"]) ? filter_var($_POST["Clientemail"], FILTER_VALIDATE_EMAIL) : '';
    $subject = isset($_POST["subject"]) ? htmlspecialchars($_POST["subject"]) : '';
    $message = isset($_POST["message"]) ? htmlspecialchars($_POST["message"]) : '';

    // Check if the required fields are not empty
    if (!empty($name) && !empty($clientEmail) && !empty($subject) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'lawsc-wm22@student.tarc.edu.my';
            $mail->Password = 'cxhr pund oibv wiov';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            // Set the client's email and name as the sender
            $mail->setFrom($clientEmail, $name);
            // Set your email as the recipient
            $mail->addAddress('lawsc-wm22@student.tarc.edu.my');

            $mail->isHTML(true);

            // Customize the email body to include the client's email and message
            $mail->Subject = $subject;
            $mail->Body = "<p><strong>Email from:</strong> $name ($clientEmail)</p><p>$message</p>";

            $mail->send();

            echo 
            "
            <script>
            alert('Sent Successfully');
            document.location.href='index.php';
            </script>
            ";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo 
        "
        <script>
        alert('Please fill in all the required fields.');
        document.location.href='index.php';
        </script>
        ";
    }
}
?>
