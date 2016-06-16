
<?php
require("D:\AppServ\www\PHPMailer-master\PHPMailerAutoload.php");

$frommail=$_POST['frommail'];
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$subject=$_POST['subject'];
$mailtext=$_POST['mailtext'];
$tomail=$_POST['tomail'];

//E-mail Message
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;                          // telling the class to use SMTP
$mail->SMTPAuth = true;                      // enable SMTP authentication
$mail->Host = "smtp.gmail.com";                 // sets GMAIL as the SMTP server
$mail->Port = 587;                            // set the SMTP port for the GMAIL server
$mail->Username = "bonnylovecnblue@gmail.com";        // GMAIL username
$mail->Password = "yonghwajialin1765";                // GMAIL password
$mail->From = "$frommail";
$mail->FromName ="A1033303";
$mail->IsHTML(true);
$mail->Subject="$subject";
$mail->AddAddress($email);
$mail->AddAddress('php@nuk.im');
//$mail->AddAddress('$tomail');
$mail->CharSet = "utf-8";
$message.="A1033303  IP:80-86-F2-5B-97-A8  MAC address:10.0.190.180";
$mail->Body = "$message";
$mail->Send();
if(!$mail->Send()){  
        echo "Error: " . $mail->ErrorInfo;  
    }else{  
        echo "<b>感謝您</b>";  
    }  
?>