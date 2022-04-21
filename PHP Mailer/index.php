<?php

    use PHPMailer\PHPMailer\PHPMailer;
    function sendmail(){
        $name = "EX - Joey";  // Name 
        $to = "tomail@gmail.com";  // Email recipient
        $subject = "Tutorial or any subject";
        $body = "Send Mail Using PHPMailer - MS The Tech Guy";
        $from = "yourmail@gmail.com";  // Sender's Mail
        $password = "yourpassword";  // Sender's Mail password

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; //Sender's Mail smtp address
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); 
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
            echo "Email is sent!";
        } else {
            echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
    }


        // sendmail();  

        if (isset($_GET['sendmail'])) {
            sendmail();
        }
?>


<html>
    <head>
        <title>Send Mail</title>
    </head>
    <body>
        <form method="get">
            <button type="submit" name="sendmail">sendmail</button>
        </form>
    </body>
</html>