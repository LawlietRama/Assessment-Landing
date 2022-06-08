<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require __DIR__ . '\vendor\autoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$title = $_POST['title'];
$message = $_POST['message'];
$body = "
Nama : $name <br/>
Email : $email <br/>
No. Telepon: $telephone <br/>
Judul: $title <br/>
Pesan:
$message <br/>
";

function Send_Mail($to, $subject, $body)
{
  $email_pengirim = 'assessmenmail@gmail.com';
  $nama_pengirim = 'User';

  $mail = new PHPMailer;
  $mail->isSMTP();

  $mail->Host = 'smtp.gmail.com';
  $mail->Username = $email_pengirim;
  $mail->Password = 'sanditest1234';
  $mail->Port = 465;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  // $mail->SMTPDebug = 2;


  $mail->setFrom($email_pengirim, $nama_pengirim);
  $mail->addAddress($to); //Email penerima
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $body;

  if ($mail->send()) {
    echo "<h1>Email berhasil dikirm</h1><br/><a href='index.php?page=kontak'>Kembali ke Form Kontak</a>";
    echo "<script>alert('Email berhasil dikirim');
  </script>";
  } else {
    echo "<h1>Email gagal dikirm</h1><br/><a href='index.php?page=kontak'>Kembali ke Form Kontak</a>";
    echo "<script>alert('Email gagal dikirim');
  </script>";
  }

  echo "<script>setInterval( () => {
      window.location.href = 'index.php?page=kontak';
   }, 1000);</script>";
}

$to = "pusatasesmen@sumutprov.go.id"; //email tujuan
Send_Mail($to, $title, $body);
