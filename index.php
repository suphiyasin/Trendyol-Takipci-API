<?php
require("./src.php");
$hesaplar = "hesapmail@mail.com:sifre
hesapmail@mail.com:sifre
hesapmail@mail.com:sifre
hesapmail@mail.com:sifre
hesapmail@mail.com:sifre
hesapmail@mail.com:sifre
hesapmail@mail.com:sifre";
$la = explode("
", $hesaplar);
foreach($la as $a){
	$ok = explode(":", $a);
$use = new trendyol();
$use->user = $ok[0];
$use->passwd = $ok[1];
$use->login();
//$use->gettoken();
//1 = urun / item  ve/and  0 = magza / shop
$use->urledit("https://www.trendyol.com/magaza/koray-spor-m-104929", "0");
$use->takipet();
echo "Aktif takipci Sayısı : ".$use->takip().'<br/>';

	
}



