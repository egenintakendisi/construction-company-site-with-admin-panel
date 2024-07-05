<?php
    require "navbar.php";
?>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif !important;
    margin: 0 !important;
    padding: 0 !important;
    background-color: #f0f0f0 !important;
}

.container {
    max-width: 1200px !important;
    margin: 0 auto !important;
    padding: 20px !important;
}

.header {
    text-align: center !important;
    padding: 20px 0 !important;
}

.content {
    display: flex !important;
    justify-content: space-between !important;
    padding: 20px 0 !important;
}

.map {
    flex: 1 !important;
    margin-right: 20px !important;
}

.form-container {
    flex: 1;
    background-color: #111 !important;
    color: white !important;
    padding: 20px !important;
    border-radius: 5px !important;
}

form {
    display: flex !important;
    flex-direction: column !important;
}

form label {
    margin-top: 10px !important;
}

form input, form textarea {
    padding: 10px !important;
    margin-top: 5px !important;
    border: 1px solid #ccc !important;
    border-radius: 5px !important;
}

form button {
    margin-top: 20px !important;
    padding: 10px !important;
    background-color: #ffc107 !important;
    border: none !important;
    border-radius: 5px !important;
    color: #111!important;
    font-weight: bold !important;
    cursor: pointer !important;
}

footer {
    display: flex !important;
    justify-content: space-between !important;
    background-color: #111 !important;
    color: white !important;
    padding: 20px !important;
    border-radius: 5px !important;
    margin-top: 20px !important;
}

.contact-info1 {
    display: flex !important;
    justify-content: space-between !important;
    width: 100% !important;
}

.info-item1 {
    flex: 1;
    text-align: center !important;
}

.info-item p {
    margin: 5px 0 !important;
}

    </style>
</head>
<?php
    require "admin/functions.php";
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
<body>
    <div class="container">
        <header class="header">
            <h1>Contact</h1>
        </header>
        <div class="content">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2630.5289418698435!2d7.710197815879463!3d48.42606067924902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c6f9b1214d9d%3A0x8b0e9b567563507!2s16%20Rue%20de%20Nairobi%2C%2067150%20Erstein%2C%20France!5e0!3m2!1sen!2sus!4v1626260859156!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="form-container">
                <form method="POST">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" name="email">
                    <label for="telephone">Téléphone</label>
                    <input type="text" id="telephone" name="telephone">
                    <label for="postal-code">Code postal</label>
                    <input type="text" id="postal-code" name="code">
                    <label for="message">Message</label>
                    <textarea id="message" name="mesaj"></textarea>
                    <button type="submit" name="envoyer">ENVOYER</button>
                </form>
            </div>
        </div>
        <footer>
            <div class="contact-info1">
                <div class="info-item1">
                    <p>Adresse</p>
                    <p>16 rue Nairobi, 67150 Erstein</p>
                </div>
                <div class="info-item1">
                    <p>Email</p>
                    <p>contact@aktas-crepi.fr</p>
                </div>
                <div class="info-item1">
                    <p>Téléphone</p>
                    <p>03 88 98 80 90</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
<?php
    require "footer.php";
?>