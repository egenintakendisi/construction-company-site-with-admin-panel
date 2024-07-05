<?php
    require "navbar.php";
?>


<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

h1 {
    color: #ff6600;
    font-weight: bold;
}

h2 {
    font-weight: bold;
}

h3 {
    font-weight: bold;
    display: flex;
    align-items: center;
}

h3 .icon {
    width: 30px;
    height: 30px;
    margin-right: 10px;
}

h4 {
    margin-top: 20px;
    font-weight: bold;
}

.content p {
    margin: 10px 0;
}

.btn-warning {
    background-color: #ffc107;
    border: none;
    color: #111;
    font-weight: bold;
}

img.img-fluid {
    width: 100%;
    height: auto;
    border-radius: 5px;
}
</style>
<body>
    <div class="container mt-5">
        <header class="text-center mb-4">
            <h1>AKTAS CREPI</h1>
            <h2>Qui sommes-nous ?</h2>
        </header>
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="img/ooapin.jpg" class="img-fluid" alt="Company Image">
            </div>
            <div class="col-md-6 mb-5">
                <div class="content">
                    <h3 class="title"> NOTRE HISTOIRE</h3>
                    <h4>Isolation extérieure Erstein</h4>
                    <p>Entreprise de crépissage depuis 1985, la société AKTAS est l'une des plus anciennes du secteur d'Erstein...</p>
                    <p>La société est titulaire des qualifications QUALIBAT et RGE...</p>
                    <p>Chacun de nos salariés ont suivi une formation spécifique...</p>
                    <p>Quelle que soit votre habitation, maison traditionnelle ou ossature bois...</p>
                    <a href="#" class="btn btn-warning mt-3">CONTACT</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php
    require "footer.php";
?>