<?php

$to = "marina.todorishina@gmail.com";

$subject = "Mail from simple project";

$message = "E-mail: " . $_POST['email'] . "<br/> Message: " . $_POST['message'];

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8";

mail($to, $subject, $message, $headers);

echo "Message was sent.";