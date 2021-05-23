# tytSinavKayitPaneli

TYT Sınav Kayıt Paneli, basit bir okul öğrenci takip sistemi baz alınarak kodlanmıştır. Küçük çaplı çalışma grupları için idealdir.

* Kayıt ve giriş sistemleri çalışmaktadır.
* Çok basit bir arayüze sahiptir, dinamik elementler kullanılarak kodlanmıştır.
* Sınav sonuçlarını görüntüleme sayfası, sadece öğretmen rolüne sahip kullanıcı tarafından erişilebilmektedir, öğrencinin kendi sonucunun bilinmemesini isteyebileceği durumlar için düşünülmüştür.
* Sınav sonuç sayfasında, girilen veriler kaydedildikten sonra "Verileri Sil" fonksiyonu ile girişler silinebilir, bir sonraki çalışma için tablo temiz hale getirilir.

Sitenin basit dizaynı hazır olarak alınmış, isteğe göre düzenlenmiş, bütün PHP kodları ve Sınav Sonuçları, Sınav Kayıt Sayfası, Giriş ve Kayıt sistemleri, veritabanları tarafımca yazılmıştır.

Kullanmak isterseniz, kurulum aşamaları aşağıda verilmiştir. Proje tamamen kullanıma ve geliştirilmeye açıktır.

# TYT Sınav Kayıt Paneli Script Kurulum Aşamaları

1- Dosyaları indirerek sitenizin "httpdocs" veya "public_html" klasörüne (ana dizine) atın.

2- phpMyAdmin paneline giderek "admin_kullanicilar" isimli bir veritabanı oluşturun.

3- Dosyalardaki admin_kullanicilar.sql dosyasını, kurduğunuz veritabanına import edin.

4- Pages klasöründeki "baglan.php" dosyasını açarak, veritabanı bağlantısını oradaki değişkenleri değiştirerek sağlayın.

5- Öğretmen hesabı, veritabanı içerisindeki "uye" tablosunda tanımlıdır. Bu hesabı grubun başındaki sorumlu kişi kullanmalıdır. Öğretmen hesabının kullanıcı bilgileri, "uye" isimli tabloda mevcuttur.

# Uyarı.

Bu proje sadece eğitim amaçlı olarak geliştirilmiştir. Kâr amacı gütmeyen bu projeyi parayla satmak kesinlikle yasaktır ve proje lisansına aykırıdır. Böyle bir girişimde sistem otomatik olarak işlemi saptayacaktır. Lütfen sadece eğitim amaçlı kullanın.

Sorularınız ve önerileriniz için <a href ="mailto:info@mehmetakifvardar.com">buradan</a> bana mail atabilirsiniz.
