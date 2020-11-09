<?php 

$emailTujuan="tujuan@gmail.com";

include 'phpmailer/class.phpmailer.php';

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPSecure ='ssl';
$mail->Host = "smtp.gmail.com"; //host email
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "usernameemail@gmail.com"; //username email
$mail->Password = "passwordkamu"; //password email
$mail->SetFrom("NameEmail@gmail.com", "Company"); //Set email pengirim 
$mail->Subject = "Layanan Notifikasi"; //subject email
$mail->AddAddress($emailTujuan); //tujuan email
$mail->MsgHTML("Selamat, Anda Berhasil mengirim notifikasi kemail");

if(!$mail->Send()){
    echo "Error:".$mail->ErrorInfo;
    exit;
}else{
    echo "<strong>Berhasil</strong>, Mengirim Email";
}

?>