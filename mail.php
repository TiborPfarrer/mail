<?php
$email=$_POST['adresa'];
$naslov=$_POST['naslov'];
$tekst=$_POST['tekst'];

echo "Primatelj: $email<br/>";
echo "Naslov: $naslov<br/>";
echo "Tekst poruke: $tekst<br/><br/>";

ini_set("SMTP","smpt.gmail.com");
ini_set("sendmail_from", "tibor.pfarrer@gmail.com");

if (mail($email,$naslov,$tekst))
{
    echo "poruka je uspješno poslana.<br/>";
}
else
{
    echo "poruka nije uspješno poslana.<br/>";
}
?>