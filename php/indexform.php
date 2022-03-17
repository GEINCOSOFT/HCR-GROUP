<?php
    $to = 'andersond912@gmail.com';
    $email = $_POST['email'];
    $subjectNumber = $_POST['subject'];
    $body = $_POST['body'];
    $header = "Desde HCR Info page";
    $subject;
    switch ($subjectNumber) {
      case 1:
        $subject = 'Asesoría y/o Consultoría';
        break;
      case 2:
        $subject = 'Auditoría';
        break;
      case 3:
        $subject = 'Capacitación';
        break;
      case 4:
        $subject = 'Otro';
        break;
    }

    mail($to, $subject, $body, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";
?>
