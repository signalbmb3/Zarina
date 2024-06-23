<?php

$email = $_POST["email"];

$message = $_POST["komentar"];

mail("fsgetdzi@gmail.com", "Съобщение от формата за контакти", $message, "From: $email");;

?>