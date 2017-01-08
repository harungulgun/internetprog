<?php

session_start();

$kMail=$_POST["kMail"];
$kSifre=$_POST["kSifre"];
$mail="admin";
$sifre="123";

if (empty($kMail) || empty($kSifre)) {
	
	echo "Boş alanları doldurmak zorunludur!";
} elseif (($kMail != $mail) || ($kSifre != $sifre)) {
	
	echo "Kullanıcı adı veya Parola hatalı girildi!";
} else {
	
	$_SESSION['kadi'] = TRUE;
	echo "tamam";
}