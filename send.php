<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;  

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'titangarg44@gmail.com'; // Your gmail id
    $mail->Password = 'yphevjepfpbrywvof'; // Your gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('titangarg44@gmail.com'); // Your gmail id again

    $mail->addAddress($_POST["email"]);
    
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'contact.php';
    </script>
    ";
}
?>