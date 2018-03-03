<?php
$mail = "dealersair@gmail.com";

$subject = "Заявка с сайта dealersair.com";

$utext = '<strong>Имя:</strong> '.$_POST['name'].'<br />';
$utext .= '<strong>E-mail:</strong> '.$_POST['email'].'<br />';
$utext .= '<strong>Сообщение:</strong> '.$_POST['message'];

$header = "Content-type: text/html; charset=\"utf-8\"\r\n";
$header .= "From: dealersair.com <info@dealersair.com>\r\n";

if (mail($mail, $subject, $utext, $header)) {
	echo "true";
} else {
	echo "error";
}
?>