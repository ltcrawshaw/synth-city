<?php

$msg = '';

if (isset($_POST['myName']) && ($_POST['honeypot'] == '')) {
   
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];
    date_default_timezone_set('Etc/UTC');  

    require '../PHPMailer/PHPMailerAutoload.php';

   
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = '';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';

    $mail->setFrom('');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('');
    $mail->addReplyTo($myEmail, $myName);
    $mail->isHTML(true);
    $mail->Body = <<<EOT
    Email: $myEmail<br>
    Name:  $myName<br>
    Message: $myQuestion
    EOT;
    
        if (!$mail->send()) {

            echo "Mailer error" . $mail->ErrorInfo;
        } else {
            include 'success.html.php';
        }
    } else {
        include 'contact.html';
    }

    ?>



