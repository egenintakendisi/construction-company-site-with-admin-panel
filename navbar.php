<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $myfile = fopen("admin/icerik.txt","r");
    $title = fgets($myfile);
    $mail = fgets($myfile);
    $adres = fgets($myfile);
    $acilis = fgets($myfile);
    fclose($myfile);
    ?>
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="top-banner" class="top-info">
        <div class="info-item">
            <i class="fas fa-envelope"></i>
            <span><?php echo $mail?></span>
        </div>
        <div class="separator">|</div>
        <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            <span><?php echo $adres?></span>
        </div>
        <div class="info-item right">
            <i class="fas fa-clock"></i>
            <span><?php echo $acilis?></span>
        </div>
    </div>
    <header id="header">
        <nav id="navbar">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="quisommes.php">Qui sommes-nous ?</a></li>
                <li><a href="nos-realisations.php">Nos réalisations</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <script src="script.js"></script>