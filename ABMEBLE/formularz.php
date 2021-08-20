<?php

  $imie=$_POST['imie'];
  $subject=$_POST['telefon'];
  $email=$_POST['email'];
  $header = "From: $email \nContent-Type:".
           ' text/plain;charset="UTF-8"'.
           "\nContent-Transfer-Encoding: 8bit";
  $message=$_POST['wiadomosc'];
  $to="kacperbisztyga7@gmail.com";
  if(mail($to,$message,$subject,$header)){
    echo "poprawnie wysłoano";
  } else {
    echo "nie wysłano";
  }

 ?>
