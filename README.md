# GelismisUyelikSistemiUygulamasi README

Bu uygulama, gelişmiş bir üyelik sistemi örneği sağlar. Kullanıcıların giriş yapabilmesi, yeni üye olabilmesi ve oturum yönetimi gibi temel işlevleri içerir.

## Kullanım Kılavuzu

**Başlarken**
   - `baglan.php` dosyasında veritabanı bağlantı ayarlarınızı yapın.
   - Uygulamayı bir web sunucusunda çalıştırın.

**Ana Sayfa (`index.php`)**:
   - Oturum açmamış kullanıcılar için giriş formu ve yeni üye olma bağlantısı bulunmaktadır.
   - Oturum açmış kullanıcılar için kullanıcı adıyla selamlama ve çıkış yapma seçeneği sunulmaktadır.

**Üyelik İşlemleri**
  - **Giriş Yap (`uyegiris.php`)**:
    - Kullanıcı adı ve şifre ile giriş yapılabilir.
  - **Çıkış Yap (`cikis.php`)**:
    - Oturumu sonlandırır ve kullanıcıyı giriş sayfasına yönlendirir.
  - **Yeni Üye Ol (`uyeol.php`)**:
    - Yeni kullanıcı oluşturma formu bulunmaktadır.

**Ek Bilgiler**
  - Oturum yönetimi `$_SESSION` kullanılarak yapılmaktadır.
  - Kullanıcı adı ve şifre kontrolü `baglan.php` dosyasında sağlanır.

## Teknik Detaylar

- **PHP**: Sunucu taraflı betik dili olarak kullanılmıştır.
- **HTML ve CSS**: Arayüz tasarımı ve kullanıcı etkileşimi için kullanılmıştır.
- **Veritabanı**: MySQL veritabanı kullanılmıştır.

## Geliştirme

- Uygulama, PHP ve MySQL bilgisine sahip geliştiriciler için örnek teşkil etmektedir.
- Kodların anlaşılması ve özelleştirilmesi için açık kaynak olarak sunulmuştur.

https://github.com/Deryaglmz/GelismisUyelikSistemiUygulamasi/assets/129391768/90fd44d1-002d-4cc9-8c3b-029f5b7c0c78

![uye](https://github.com/Deryaglmz/GelismisUyelikSistemiUygulamasi/assets/129391768/5d670adf-7b5b-4b72-a846-0c03644413bc)
