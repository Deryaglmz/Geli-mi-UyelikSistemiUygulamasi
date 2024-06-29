<?php
require_once("baglan.php");

if(isset(($_POST["kullaniciadi"]))){
    $GelenKullaniciAdi = Filtrele($_POST["kullaniciadi"]);
}else{
    $GelenKullaniciAdi = "";
}

if(isset($_POST["sifre"])) {
    $GelenSifre = Filtrele($_POST["kullaniciadi"]);
}else{
    $GelenSifre = "";
}

$KontrolSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? AND sifre=?");
$KontrolSorgusu->execute([$GelenKullaniciAdi, $GelenSifre]);
$KontrolSayisi = $KontrolSorgusu->rowCount();

if($KontrolSayisi>0){
    $_SESSION["kullaniciadi"] = $GelenKullaniciAdi;
    header("Location:index.php");
    exit();
}else{
    echo "HATA<br />";
    echo "İşlem Sırasında Beklenmeyen Bir Sorun Oluştu. Daha Sonra Tekrar Deneyiniz.<br />";
    echo "Ana Sayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
}
?>