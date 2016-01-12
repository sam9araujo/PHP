<?php

$name      = $_POST['name'];
$emailFrom = $_POST['email'];
$phone  = $_POST['phone'];
$message  = $_POST['message'];
$emailEnd  = "samanta@sam9araujo.com";
$head      = "Form - Web Site [Name Company] - Client: ".$name;

require("phpmailer/class.phpmailer.php");

$mail = new PHPMailer();


$mail->IsSMTP(); 
$mail->Host = "smtp.sam9araujo.com"; // SMTP (useu o host smtp.yourdomain.com)
$mail->SMTPAuth = true; // required to smtp.yourdomain.com
$mail->SMTPSecure = '';
$mail->Port = 587;
$mail->SMTPDebug = 1;
$mail->Username = $emailEnd; // SMTP (adress email)
$mail->Password = 'abfs2015'; // Password host SMTP (password email used)

$mail->From = $emailFrom;
$mail->Sender = $emailEnd; 
$mail->FromName = $name; 

$mail->AddAddress($emailEnd,$head);

$mail->IsHTML(true);
$mail->CharSet = 'utf-8'; // Charset  message (optional)

$mail->Subject  = $head; // subject message
$mail->Body = $name.'<br><p>Phone: '.$phone.'<br/>Email: '.$emailFrom.'<br/>'.$message.'</p>';
$mail->AltBody = $name.'<br><p>Phone: '.$phone.'<br/>'.$message.'</p>';


// Send  email
$send = $mail->Send();

// clean
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Show message
if ($send) {
    echo "<script>location.href='page.php?success=yes';</script>";
} else {
    echo "<script>location.href='page.php'; alert('Info error:' . $mail->ErrorInfo)</script>";
}

?>