<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    // smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "mirkhat.a@gmail.com";
    $mail->Password = "Mirkhat2001_";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    // email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("mlg.tapok@gmail.com");
    $mail->Body = $body;

    if ($mail->send()) {
        $status = "success";
        $response = "Email is sent!";
    } else {
        $status = "failed";
        $response = "Error ".$mail->ErrorInfo;
    }

    exit(json_encode(array("status"=>$status, "response"=>$response)));
}

?>