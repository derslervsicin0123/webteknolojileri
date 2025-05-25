<?php
function guvenli($deger) {
  return htmlspecialchars(trim($deger));
}
?>










<!DOCTYPE html>
<html>


<head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Teknolojileri - Proje</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../stil.css" rel="stylesheet">

        <script src="https://unpkg.com/vue@3/dist/vue.global.js">
        </script>

</head>





<body>








        <nav class="d-flex navMenu flex-wrap">


                <a class="menuElemaniTip1 col  tab anasayfa" href="../anasayfa.html"> Hakkımda </a>
                <a class="menuElemaniTip1 col  tab" href="../ozgecmis.html">Özgeçmiş</a>
                <a class="menuElemaniTip1 col   tab" href="../sehrim.html" ">Şehrim</a>


       <a   class=" menuElemaniTip1 col tab" href="../sehrim/mirasimiz.html">Şehrimin Kültürel Mirası</a>
                <a class="menuElemaniTip1 col  tab" href="../ilgialanlarim.html">İlgi Alanlarım</a>
                <a class="menuElemaniTip1 col  tab aktifsayfa " href="../iletisim.html">İletişim</a>

                <a class="menuElemaniTip1 col girisYapButonu tab" href="../login.html">Çıkış Yap </a>


        </nav>







        <div class="content">

                <div class="section iletisim-sonuc-container">





                        <div class="divform1 iletisim-sonuc-col-1">


                                <div class="basarili-form-giris-iletisim">Form başarıyla gönderildi!<br>Tekrar form
                                        göndermek için <b><a href="../iletisim.html">BURAYA</a></b> tıklayabilirsiniz.
                                </div>
                                <h1>Formda Kullanılan Bilgiler</h1><br>
                                <ul>
                                        <li><strong>Ad Soyad:</strong>
                                                <?= guvenli($_POST['ad'] ?? '') ?>
                                        </li>
                                        <li><strong>E-mail:</strong>
                                                <?= guvenli($_POST['email'] ?? '') ?>
                                        </li>
                                        <li><strong>Telefon:</strong>
                                                <?= guvenli($_POST['telefon'] ?? '') ?>
                                        </li>
                                        <li><strong>Cinsiyet:</strong>
                                                <?= guvenli($_POST['cinsiyet'] ?? '') ?>
                                        </li>
                                        <li><strong>Mesaj:</strong>
                                                <?= nl2br(guvenli($_POST['mesaj'] ?? '')) ?>
                                        </li>


                                        <li><strong>Sakarya Üniversitesinde öğrenci mi?:</strong>
                                                <?=  isset($_POST['sauogrencikontrol']) && $_POST['sauogrencikontrol'] == 'ogrencitrue' ? 'Evet' : 'Hayır'  ?>
                                        </li>

                                </ul>


                        </div>









                </div>
        </div>






        <footer class="bg-dark text-white text-center py-2">&copy; 2025 - Tolga Er - Web Teknolojileri Dersi İçin
                Hazırlanmıştır
        </footer>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>