<?php
// github.com/pajaar

header('Content-type: text/plain');
$lol = simplexml_load_file("https://data.bmkg.go.id/autogempa.xml");

echo "Tanggal: ".$lol->gempa->Tanggal;
echo "\nJam: ".$lol->gempa->Jam;
echo "\nKoordinat: ".$lol->gempa->Point->coordinates;
echo "\nLintang: ".$lol->gempa->Lintang;
echo "\nBujur: ".$lol->gempa->Bujur;
echo "\nMagnitude: ".$lol->gempa->Magnitude;
echo "\nKedalaman: ".$lol->gempa->Kedalaman;
echo "\nWilayah1: ".$lol->gempa->Wilayah1;
echo "\nWilayah2: ".$lol->gempa->Wilayah2;
echo "\nWilayah3: ".$lol->gempa->Wilayah3;
echo "\nPotensi: ".$lol->gempa->Potensi;
?>
