
<?php
    if(!isset($_COOKIE['login'])){
        header("location:login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
<div class="alert alert-danger text-center mb-0"><H1>OLASI VERİ KAYIPLARINA NEDEN OLMAMAK İÇİN BURADA SAYFAYI YENİLEMEKTEN KAÇININ.</H1></div>
    
<nav class="navbar navbar-expand-md navbar-light">
        <div class="navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="navbar-text">
                        Hoşgeldin, <?php echo $_COOKIE['login'];?>
                    </span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Çıkış Yap</a> <!-- Çıkış yap bağlantısı -->
                </li>
            </ul>
        </div>
    </nav>
    <?php
    require "functions.php";
    $sayac = 0;
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['silbtn'])){
            if(deleteLineFromFile("envoyer.txt",$_POST['formId'])){
                echo "<div class='alert alert-success'>Kaldırma İslemi Basarili.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Kaldırma İslemi Basarisiz.</div>";
            }
        }

        if(isset($_POST['baslikdegis'])){
            $baslik = input_control($_POST['baslik']);
            if(updateLineInFile("icerik.txt", 1, $baslik)){
                echo "<div class='alert alert-success'>Güncelleme İslemi Basarili.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Güncelleme İslemi Basarisiz.</div>";
            }
        }

        if(isset($_POST['maildegis'])){
            $mail = input_control($_POST['mail']);
            if(updateLineInFile("icerik.txt", 2, $mail)){
                echo "<div class='alert alert-success'>Güncelleme İslemi Basarili.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Güncelleme İslemi Basarisiz.</div>";
            }
        }

        if(isset($_POST['adresdegis'])){
            $adres = input_control($_POST['adres']);
            if(updateLineInFile("icerik.txt", 3, $adres)){
                echo "<div class='alert alert-success'>Güncelleme İslemi Basarili.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Güncelleme İslemi Basarisiz.</div>";
            }
        }

        if(isset($_POST['acilisdegis'])){
            $acilis = input_control($_POST['acilis']);
            if(updateLineInFile("icerik.txt", 4, $acilis)){
                echo "<div class='alert alert-success'>Güncelleme İslemi Basarili.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Güncelleme İslemi Basarisiz.</div>";
            }
        }

        if(isset($_POST['fotoekle'])){
            $aciklama = input_control($_POST['aciklama']);
            $dosyaadi = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];
            $path = 'yuklenenimg/'.md5($dosyaadi.time()).$dosyaadi;
            if(move_uploaded_file($tmp,$path)){
                $myfile = fopen("fotolar.txt","a");
                $str = $path."|".$aciklama."\n";
                $str = 'admin/'.$str;
                fwrite($myfile,$str);
                fclose($myfile);
                echo "<div class='alert alert-success'>Ekleme İslemi Basarili.</div>";

            }
            else{
                echo "<div class='alert alert-danger'>Ekleme İslemi Basarisiz.</div>";

            }
        }


        if(isset($_POST['fotosil'])){
            $numara = $_POST['fotosil'];
            if(deleteLineFromFile("fotolar.txt",$numara)){
                echo "<div class='alert alert-success'>Silme İslemi Basarili.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Silme İslemi Basarisiz.</div>";
            }
        }

        if(isset($_POST['facebookdegis'])){
            $facebook = input_control($_POST['facebook']);
            $facebook = strtolower($facebook);
            if(!strpos($facebook,'http')){
                $facebook = "https://".$facebook;
            }
            if(updateLineInFile("icerik.txt", 5, $facebook)){
                echo "<div class='alert alert-success'>Güncelleme İslemi Basarili.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Güncelleme İslemi Basarisiz.</div>";
            }
        }

        if(isset($_POST['twitterdegis'])){
            $twitter = input_control($_POST['twitter']);
            $twitter = strtolower($twitter);
            if(!strpos($twitter,'http')){
                $twitter = "https://".$twitter;
            }
            if(updateLineInFile("icerik.txt", 6, $twitter)){
                echo "<div class='alert alert-success'>Güncelleme İslemi Basarili.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Güncelleme İslemi Basarisiz.</div>";
            }
        }

        if(isset($_POST['instagramdegis'])){
            $instagram = input_control($_POST['instagram']);
            $instagram = strtolower($instagram);
            if(!strpos($instagram,'http')){
                $instagram = "https://".$instagram;
            }
            if(updateLineInFile("icerik.txt", 7, $instagram)){
                echo "<div class='alert alert-success'>Güncelleme İslemi Basarili.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Güncelleme İslemi Basarisiz.</div>";
            }
        }
        if(isset($_POST['linkedindegis'])){
            $linkedin = input_control($_POST['linkedin']);
            $linkedin = strtolower($linkedin);
            if(!strpos($linkedin,'http')){
                $linkedin = "https://".$linkedin;
            }
            if(updateLineInFile("icerik.txt", 8, $linkedin)){
                echo "<div class='alert alert-success'>Güncelleme İslemi Basarili.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Güncelleme İslemi Basarisiz.</div>";
            }
        }

        if (isset($_POST['kayit'] )&& $_COOKIE['login'] == 'admin') {

        
            $username = input_control($_POST['username']);
            $password = input_control($_POST['password']);
        
            if (kayitkontrol($username)) {
                $myfile = fopen("adminbilgileri.txt","a");
                $str = $username."|".$password."\n";
                fwrite($myfile,$str);
                fclose($myfile);
                echo "<div class='alert alert-success'>Kayit Basarili</div>";
            } else {
                echo "<div class='alert alert-danger'>Kayit Basarisiz</div>";
            }
        }
        
        if(isset($_POST['kaldir']) && $_COOKIE['login'] == 'admin'){
            $satir = $_POST['satir'];
            if(deleteLineFromFile("adminbilgileri.txt", $satir)){
                echo "<div class='alert alert-success'>Silme İşlemi Basarili</div>";

            }
            else{
                echo "<div class='alert alert-danger'>Silme İşlemi Basarisiz</div>";

            }
        }
    ?>

<?php if($_COOKIE['login'] == 'admin'):?>
    <div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Yetkili Kaydı</h3>
            <form method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="kayit">Kaydet</button>
</form>
        </div>
        <?php
        $say = 0;
        $myfile = fopen("adminbilgileri.txt","r");
        ?>
        <div class="col-6">
            <h3>Yetkili Kaldır</h3>
                    <form method="POST">
                    <select class="form-select"  name="satir" aria-label="Default select example">
                        <option selected>Kaldirmak İstediginiz Yetkiliyi Secin</option>
                        <?php while($satir = fgets($myfile)):?>
                            <?php
                            $dilim = explode("|",$satir);
                            $say++;
                                ?>
                        <option  value=<?php echo $say?>><?php echo "Username : ".$dilim[0]." Password : ".$dilim[1]?></option>
                        <?php endwhile; ?>
                        <?php fclose($myfile);?>
                        </select>

            <button type="submit" class="btn btn-primary" name="kaldir">Kaldir</button>
            </form>
        </div>
    </div>
</div>

<?php endif;?>

<div class="container mt-4">
        <h2>Resim Kaldır Panel</h2>
        <div class="row">

        <?php
            $myfile = fopen("fotolar.txt","r");
            $sayac = 0;
        ?>
            
        <?php while($satir = fgets($myfile)):?>
            <?php
                $dilimler = explode("|",$satir);
                $sayac++;
                ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src=<?php echo '../'.$dilimler[0]?> class="card-img-top" alt="Resim Açıklaması">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dilimler[1]?></h5>
                        <form method="post">
                        <button class="btn btn-danger btn-sm mb-2" name="fotosil" value=<?php echo $sayac;?>>Resmi Sil</button>
                        </form>
                    </div>
                </div>
                
            </div>
            <?php endwhile; ?>


    <div class="container mt-4">

    
        <h1>Admin Panel - Form İletişimleri</h1>
        <div class="row mt-4">

        <form method="POST" enctype="multipart/form-data">


<div class="mb-3">
<label  class="form-label">Nos réalisations Kısmına Ekleme Yapma</label>
<input type="text" class="form-control"  name="aciklama" placeholder="aciklama">
<input type="file" class="form-control" id="exampleInputEmail1" name="foto">
<div id="emailHelp" class="form-text">Nos réalisations Kısmına Ekleme Yapma</div>
<button type="submit" name="fotoekle" class="btn btn-success">Ekle</button>

</div>

<form method="post">


<h3>Sosyal Medya Bağlantıları </h3>
            <h4>Footer Kısmında</h4>
  <div class="mb-3">
    <label  class="form-label">Facebook</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="facebook">
    <div id="emailHelp" class="form-text">Footer Kısmındaki Facebook Bağlantsı</div>
    <button type="submit" name="facebookdegis" class="btn btn-success">Güncelle</button>

  </div>

  <div class="mb-3">
    <label  class="form-label">Twitter</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="twitter">
    <div id="emailHelp" class="form-text">Footer Kısmındaki Twitter Bağlantsı</div>
    <button type="submit" name="twitterdegis" class="btn btn-success">Güncelle</button>

  </div>

  <div class="mb-3">
    <label  class="form-label">İnstagram</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="instagram">
    <div id="emailHelp" class="form-text">Footer Kısmındaki İnstagram Bağlantsı</div>
    <button type="submit" name="instagramdegis" class="btn btn-success">Güncelle</button>

  </div>

  <div class="mb-3">
    <label  class="form-label">Linkedin</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="linkedin">
    <div id="emailHelp" class="form-text">Footer Kısmındaki Linkedin Bağlantsı</div>
    <button type="submit" name="linkedindegis" class="btn btn-success">Güncelle</button>

  </div>
</form>


  <form method="POST">

  <div class="mb-3">
    <label  class="form-label">Sayfa Başlıkları</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="baslik">
    <div id="emailHelp" class="form-text">Sekmelerdeki Sayfaların Başlığını Güncellemek İstediğiniz Değeri Giriniz.</div>
    <button type="submit" name="baslikdegis" class="btn btn-success">Güncelle</button>

  </div>

<div class="mb-3">
<label  class="form-label">Mail Guncelle</label>
<input type="text" class="form-control" id="exampleInputEmail1" name="mail">
<div id="emailHelp" class="form-text">Sayfaların ust kısmındaki mail kısmını güncelemek istediğiniz değeri giriniz.</div>
<button type="submit" name="maildegis" class="btn btn-success">Güncelle</button>

</div>

<div class="mb-3">
<label  class="form-label">Adres Guncelle</label>
<input type="text" class="form-control" id="exampleInputEmail1" name="adres">
<div id="emailHelp" class="form-text">Sayfaların ust kısmındaki Adres kısmını güncelemek istediğiniz değeri giriniz.</div>
<button type="submit" name="adresdegis" class="btn btn-success">Güncelle</button>

</div>


<div class="mb-3">
<label  class="form-label">Acilis Guncelle</label>
<input type="text" class="form-control" id="exampleInputEmail1" name="acilis">
<div id="emailHelp" class="form-text">Sayfaların ust kısmındaki Acilis kısmını güncelemek istediğiniz değeri giriniz.</div>
<button type="submit" name="acilisdegis" class="btn btn-success">Güncelle</button>

</div>

        


        </form>


            
            <div class="col-md-6">
                <!-- Form -->

            </div>
        </div>

        <hr>

        <h2>Gönderilen Formlar</h2>
        <div class="row mt-4" id="formCards">
            <div class="col-md-4 mb-3">
                <?php
                    $myfile = fopen("envoyer.txt","r");
                    
                ?>
                <?php while($satir = fgets($myfile)):?>
                <?php
                    $sayac++;
                    $dilimler = explode("|",$satir);
                    ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gönderen: <?php echo  $dilimler[0];?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">E-posta: <?php echo  $dilimler[1];?></h6>
                        <p class="card-text">Mesaj: <?php echo  $dilimler[2];?></p>
                        <p class="card-text">Telefon: <?php echo  $dilimler[3];?></p>
                        <p class="card-text">Posta Kodu: <?php echo  $dilimler[4];?></p>
                        <form  method="POST">
                            <input type="hidden" name="formId" value=<?php echo $sayac;?>>
                            <button type="submit" name="silbtn" class="btn btn-danger">Sil</button>
                        </form>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php fclose($myfile);?>
            </div>
        </div>
    </div>

                    
    <!-- Bootstrap JS and dependencies (optional, for certain features like modals) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js" integrity="sha384-oGUFS2WvpcfIfzW0YpevJ1mksOSpV+6O6z6g1Unu8eGLfZ/H2fFCVCNrs6X9S4VB" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+OQq6hK9/rf+8W0CjM/Ip0F1pG5E9266hA1" crossorigin="anonymous"></script>
</body>
</html>
