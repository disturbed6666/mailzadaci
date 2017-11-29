<?php
$email = $_POST['adresa'];
$naslov = $_POST['naslov'];
$tekst = $_POST['tekst'];

echo "Primatelj: $email<br>";
echo "Naslov: $naslov<br>";
echo "Tekst: $tekst<br>";

ini_set("SMTP","smtp.gmail.com");
ini_set("sendmail_from","ianj3000@gmail.com");

if ( mail($email,$naslov,$tekst) ){
    echo "Poruka se poslala<br>";
}else {
    echo "Poruka se nije poslala<br>";
};
?>
<button type='button' onclick="location.href='mail1.html'">Nazad na slanje mailova</button>
