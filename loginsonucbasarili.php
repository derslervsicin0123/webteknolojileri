<?php


function guvenli($deger) {
  return htmlspecialchars(trim($deger));
}



$kayitlikullanicilar = [
  "ornek@mail.com" => "123456",
  "0123456789@sakarya.edu.tr" => "654321"
];


$email = $_POST['kullaniciadi1'] ?? '';
$sifre = $_POST['sifre1'] ?? '';


$email = trim($email);
$sifre = trim($sifre);


if (!(isset($kayitlikullanicilar[$email]) && $kayitlikullanicilar[$email] === $sifre)) {

    header("Location: ../loginsonucbasarisiz.html");
    exit;
}



$str = $_POST['kullaniciadi1'];
$pos = strpos($str, "@");
    $oncesi = substr($str, 0, $pos);




?>












<!DOCTYPE html>
<html>


<head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Teknolojileri - Proje</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../stil.css" rel="stylesheet">

</head>





<body>








        <nav class="d-flex navMenu flex-wrap">


                <a class="menuElemaniTip1 col  tab anasayfa" href="../anasayfa.html"> Hakkımda </a>
                <a class="menuElemaniTip1 col  tab" href="../ozgecmis.html">Özgeçmiş</a>
                <a class="menuElemaniTip1 col   tab" href="../sehrim.html" ">Şehrim</a>


       <a   class=" menuElemaniTip1 col tab" href="../sehrim/mirasimiz.html">Şehrimin Kültürel Mirası</a>
                <a class="menuElemaniTip1 col  tab" href="../ilgialanlarim.html">İlgi Alanlarım</a>
                <a class="menuElemaniTip1 col  tab" href="../iletisim.html">İletişim</a>

                <a class="menuElemaniTip1 col girisYapButonu tab" href="../login.html">Çıkış Yap </a>


        </nav>







        <div class="content">

                <div class="section">







                        <div class="divform1">
                                <h1>Giriş Sayfası</h1><br>
                                <form class="form1" action="" method="post">
                                        <label class="labelkullaniciadi1" for="kullaniciadi1">Kullanıcı Adı
                                                (Email):</label><br>
                                        <input class="form-control" type="email" id="kullaniciadi1" name="kullaniciadi"
                                                placeholder="someone@example.com" required><br><br>

                                        <label class="labelsifre1" for="sifre">Şifre:</label><br>
                                        <input class="form-control" type="password" id="sifre1" name="sifre"
                                                required><br><br>

                                        <input type="submit" class="button1 btn   btn-primary disabled"
                                                value="Giris Yap">
                                </form>
                        </div>



                        <div class="divform1 basariliformgiris ">
                                Başarılı giriş! Hoş geldiniz: "<span><b>
                                                <?= guvenli($oncesi ?? '') ?>
                                        </b></span>"
                        </div>


                </div>
        </div>








        <footer class="bg-dark text-white text-center py-2">&copy; 2025 - Tolga Er - Web Teknolojileri Dersi İçin
                Hazırlanmıştır
        </footer>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>