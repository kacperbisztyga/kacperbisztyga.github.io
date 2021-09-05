<?php

    $imie=$_POST=['imie'];
    $nazwisko=$_POST=['nazwisko'];
    $email=$_POST=['email'];
    $tresc=$_POST=['wiadomosc'];
    $telefon=$_POST=['telefon'];
    $file= $_POST=['plik'];

    $email = implode(" ",$email);
    $telefon = implode(" ",$telefon);
    $tresc = implode(" ",$tresc);


    $header = "From: kacperbisztyga7@gmail.com  \nContent-Type:".
              ' text/plain;charset="UTF-8"'.
              "\nContent-Transfer-Encoding: 8bit";
    $to = "kacperbisztyga7@gmail.com";
    $subject = "Widomość ze strony";
    $message = "hej";






   mail($to, $subject, $message, $header);
   if(mail($to, $subject, $message, $header)){
     echo "udalo sie wyslac";

   } else {
     echo "nie udalo sie";
   }
   ?>
