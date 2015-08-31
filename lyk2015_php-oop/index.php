<meta charset="UTF-8">
<?php
function __autoload($class_Name) {
    require_once "classes/".$class_Name . '.php';

}


// instance oluşturuyoruz
$kuruTemizlemeci = new EveKuruTemizleme();

// camasir için veri gönderiyoruz
$kuruTemizlemeci->setCamasir("Pantul");

// camasir yıkama işlemlerini çalıştırıyoruz
$kuruTemizlemeci->yika();
