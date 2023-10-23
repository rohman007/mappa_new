<?php
// Include file PHPMailer
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

// Buat objek PHPMailer
$mail = new PHPMailer;

// Konfigurasi SMTP
$mail->isSMTP();
$mail->SMTPDebug = 0; // 0 untuk non-debug, ganti dengan 2 untuk debugging
$mail->Host = 'mail.selembardaun.com'; // Ganti dengan server SMTP Anda
$mail->SMTPAuth = true;
$mail->Username = 'noreply@selembardaun.com'; // Ganti dengan alamat email Anda
$mail->Password = '!u@&vRN(jgNF'; // Ganti dengan kata sandi email Anda
$mail->SMTPSecure = 'ssl'; // Anda dapat menggunakan 'tls' atau 'ssl' tergantung pada kebutuhan
$mail->Port = 465; // Ganti dengan port SMTP yang sesuai

// Set alamat email pengirim
$mail->setFrom('noreply@selembardaun.com', 'Nama Pengirim');

// Tambahkan alamat email penerima
$mail->addAddress('a.nurrohman007@gmail.com', 'Nama Penerima');

// Subjek email
$mail->Subject = 'Subjek Email';

// Isi pesan email
$mail->Body = 'Isi Pesan Email';

// Kirim email
if ($mail->send()) {
    echo 'Email telah berhasil terkirim';
} else {
    echo 'Email gagal terkirim. Error: ' . $mail->ErrorInfo;
}
?>
