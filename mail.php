<?php
  if(isset( $_POST['in']))
  $name = $_POST['in'];
  if(isset( $_POST['email']))
  $email = $_POST['email'];
  if(isset( $_POST['comment']))
  $message = $_POST['comment'];
  if(isset( $_POST['nr']))
  $numer = $_POST['nr'];
  if(isset( $_POST['start']))
  $start = $_POST['start'];
  if(isset( $_POST['end']))
  $end = $_POST['end'];


  $subject = "Krakowska Awangarda - Wiadomość";
  $content="Imię i Nazwisko: $name \n E-mail: $email \n Numer: $numer \n Uwagi: $message \n\n OD: $start \n DO: $end";
  $recipient = "example@gmail.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $content, $mailheader) or die("Error!");
  echo "Email sent!";
?>