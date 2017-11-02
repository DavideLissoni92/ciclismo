<?php
  $name = $_POST['nome'];
  $email = $_POST['email'];
  $subject = $_POST['oggetto'];
  $message = $_POST['messaggio'];

  $to = "prova@prova.com";

  $body = "Nome: " . $name . "\r\nEmail: " . $email . "\r\n\n" . $message;
  $headers = "From: messaggi@ciclismotrentino.it\r\n";

  if (mail($to, $subject, $body, $headers)) {
    header('Location: messaggio-ok.html');
  } else {
    header('Location: errore.html');
  }
?>
