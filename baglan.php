<?php
session_start(); ob_start();

try {
    $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=uyeler;charset=UTF8", "root", "9900");
} catch(PDOException $Hata) {
    echo "Bağlantı Hatası<br />" . $Hata->getMessage();
    die();
}

function Filtrele($Deger){
    $Bir   = trim($Deger);
    $Iki   = strip_tags($Bir);
    $Uc    = htmlspecialchars($Iki, ENT_QUOTES);
    $Sonuc = $Uc;
    return $Sonuc;
}

if(isset($_SESSION["kullanici"])) {
    $UyelerSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=?");
    $UyelerSorgusu->execute($_SESSION["kullanici"]);
    $UyelerKayitSayisi = $UyelerSorgusu->rowCount();
    $UyelerKaydi = $UyelerSorgusu->fetch(PDO::FETCH_ASSOC);

    if($UyelerKayitSayisi>0){
        $UyeninAdiSoyadi = $UyelerKaydi["adisoyadi"];

    }else{
        $UyeninAdiSoyadi = "";
    }
}
?>