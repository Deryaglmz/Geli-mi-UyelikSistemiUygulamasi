<?php
require_once("baglan.php");

if(isset($_POST["kullaniciadi"])) {
    $GelenKullaniciAdi = Filtrele($_POST["kullaniciadi"]);
} else {
    $GelenKullaniciAdi = "";
}

if(isset($_POST["sifre"])) {
    $GelenSifre = Filtrele($_POST["sifre"]);
} else {
    $GelenSifre = "";
}

if(isset($_POST["adsoyad"])) {
    $GelenIsimSoyisim = Filtrele($_POST["adsoyad"]);
} else {
    $GelenIsimSoyisim = "";
}

if(isset($_POST["emailadresi"])) {
    $GelenEmailAdresi = Filtrele($_POST["emailadresi"]);
} else {
    $GelenEmailAdresi = "";
}

$ZamanDamgasi = time(); // Assuming you want to store the current timestamp

$KontrolSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? OR emailadresi=?");
$KontrolSorgusu->execute([$GelenKullaniciAdi, $GelenEmailAdresi]);
$KontrolSayisi = $KontrolSorgusu->rowCount();

if($KontrolSayisi>0) {
    echo "HATA<br />";
    echo "Kullanıcı adı veya E-Mail adresi başka üye tarafından kullanılmaktadır.<br />";
    echo "Ana Sayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
} else {
    $KayitEkle = $VeritabaniBaglantisi->prepare("INSERT INTO uyeler (kullaniciadi, sifre, adisoyadi, emailadresi, kayittarihi) VALUES (?, ?, ?, ?, ?)");
    $KayitEkle->execute([$GelenKullaniciAdi, $GelenSifre, $GelenIsimSoyisim, $GelenEmailAdresi, $ZamanDamgasi]);
    $KayitKontrol = $KayitEkle->rowCount();

    if($KayitKontrol>0) {
        echo "Tebrikler<br />";
        echo "Kullanıcı kaydı başarıyla tamamlandı.<br />";
        echo "Ana Sayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
    } else {
        echo "HATA<br />";
        echo "Kullanıcı kaydı işlem sırasında beklenmeyen bir hata oluştu.<br />";
        echo "Lütfen daha sonra tekrar deneyin.<br />";
        echo "Ana Sayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
    }
}
?>
