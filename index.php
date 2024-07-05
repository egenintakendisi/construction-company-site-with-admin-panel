<?php
    require "navbar.php";
    require "admin/functions.php";
?>

</div>
<style>
.service-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: 20px 0;
        transition: transform 0.3s; /* Animasyon süresi */
    }
    .service-card:hover {
        transform: scale(1.05); /* Kart büyütme oranı */
    }
    .service-card img {
        width: 100px; /* Görsellerin genişliği */
        height: auto; /* Otomatik yükseklik */
    }
    .service-card h3 {
        margin-top: 15px;
    }
    .service-card p {
        margin-top: 10px;
    }

.im {
    max-width: 100%;
    height: auto;
    transition: transform 0.3s;
}
.im:hover {
        transform: scale(1.05); /* Kart büyütme oranı */
    }

.btnc {
    display: block;
    margin: 0 auto;
    padding: 10px 20px;
    font-size: 16px;
}
.bos{
    height: 100px;
}
div input{
    width: 250px;
    height: 100%;
}
.top-info{
    z-index: 10;
}
.top-info {
    display: flex;
    justify-content: space-between;
    background-color: #111;
    color: white;
    padding: 10px 20px;
}
</style>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['envoyer'])){
        $nom = input_control($_POST['nom']);
        $email = input_control($_POST['email']);
        $telephone = input_control($_POST['telephone']);
        $code = input_control($_POST['code']);
        $mesaj = input_control($_POST['mesaj']);
        $myfile = fopen("admin/envoyer.txt","a");
        $str = $nom."|".$email."|".$telephone."|".$code."|".$mesaj."\n";
        fwrite($myfile,$str);
        fclose($myfile);
    }
?>
<div class="container">
    <div class="row">
        <div class="col-12 foto d-flex flex-column align-items-center justify-content-center">
            <h2 class="text-center text-success">Embellissez Votre Propriété avec <br> Durak Enterprise</h2>
            <p class="text-center">Les mêmes gestes depuis 1985.</p>
            <button class="btn btn-warning mt-3 btnc">Contact</button>
        </div>
    </div>
</div>

<div class="container text-center my-5">
        <h2 class="mb-5">Nos prestations</h2>
        <div class="row justify-content-center">
            <div class="col-md-3 service-card">
                <img src="img/isolant.png" class="img" alt="Isolation extérieur">
                <h3>Isolation extérieur</h3>
                <p>Revêtez votre maison d'une isolation extérieure, économique et esthétique.</p>
            </div>
            <div class="col-md-3 service-card">
                <img src="img/isolant-2.png" class="img" alt="Isolation intérieur">
                <h3>Isolation intérieur</h3>
                <p>Améliorez confort et économies avec une isolation intérieure efficace.</p>
            </div>
            <div class="col-md-3 service-card">
                <img src="img/mur-de-briques.png" class="img" alt="Crépiassage">
                <h3>Crépiassage</h3>
                <p>Offrez à votre propriété une nouvelle jeunesse avec un crépiassage professionnel.</p>
            </div>
            <div class="col-md-3 service-card">
                <img src="img/truelle.png" class="img" alt="Ravalement">
                <h3>Ravalement</h3>
                <p>Restaurez la beauté de votre bâtiment et protégez-le des dommages causés par le temps.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 bos">

            </div>
        </div>
    </div>

    <div class="container mt-5 cont">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="img/Fege.png" alt="Your Image" class="img-fluid im">
        </div>
        <div class="col-md-6">
            <h2 class="text-success">Isolation extérieure expertise depuis 1985</h2>
            <p>Depuis plus de trois décennies, Aktas Crépi met son expertise au service de votre confort et de vos économies d'énergie à Erstein et ses environs. Notre savoir-faire éprouvé en matière d'isolation extérieure vous assure une solution efficace et durable pour réduire les pertes thermiques de votre maison. En choisissant notre entreprise, vous bénéficiez de l'expérience et du professionnalisme d'une équipe engagée à vous offrir le meilleur en termes d'isolation extérieure, tout en respectant les normes les plus strictes de qualité et de performance.</p>
            <button class="btn btn-warning mt-3 btnc">DÉCOUVRIR</button>
        </div>
    </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-12 bos">

            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-6">
        <div class="container">
        <h1 class="text-center mt-4">Demande d'information</h1>
        <form class="mt-4" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="nom" class="form-control" id="Nom" placeholder="Nom">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="E-Mail">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="tel" name="telephone" class="form-control" id="telefon" placeholder="Telephone">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="code" class="form-control" id="postaKodu" placeholder="Code Postal">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="mesaj" id="mesaj" rows="3" placeholder="Message"></textarea>
            </div>
            <button class="btn btn-warning mt-3 btnc" name="envoyer">Envoyer</button>
        </form>
    </div>
        </div>
        <div class="col-6">
        <iframe class="mt-1"src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d338339.76592278184!2d7.6537999999999995!3d48.508708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47914a58b3127d0f%3A0x1a12175b84dd20d4!2s16%20Rue%20de%20Nairobi%2C%2067150%20Erstein%2C%20Fransa!5e0!3m2!1str!2sus!4v1720106164662!5m2!1str!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
</div>

<?php
    require "footer.php";
?>