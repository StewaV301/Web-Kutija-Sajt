<?php

    $to = "webkutija@gmail.com";
    

    $name = $_REQUEST['ime'];
    $from = $_REQUEST['email'];
    $csubject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];
    $number = $_REQUEST['brtelefona'];


    $datum_pocetak = $_REQUEST['poruka'];

   



    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "WEB KUTIJA";

    $logo = 'img/logo.png';
    $link = 'https://webkutija.rs/';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";

	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";

	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";



	$body .= "</td></tr></thead><tbody><tr>";

	$body .= "<td style='border:none;'><strong>Ime:</strong> {$ime}</td>";

	

	$body .= "<td style='border:none;'><strong>Email:</strong> {$email}</td>";

	$body .= "<td style='border:none;'><strong>Br Telefona:</strong> {$brtelefona}</td>";

	

	

	$body .= "<td style='border:none;'><strong>telefon:</strong> {$telefon}</td>";

	

	

	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);
    header('Location: index.html');

?>