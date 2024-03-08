<?php
require_once 'Vehicule.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>TraitementAjoutVehicule</title>
    <style>
        *{
            font-family:"Roboto Light", sans-serif;
            padding: 0;
            margin:0;
            box-sizing: border-box;
            text-decoration: none;
        }
        body{
            background-image:url("img/car2.jpg") ;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .confirmationBox{
            padding: 20px;
            background: rgba(255, 255, 255, 0.68);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .traitementAjourContent{
            display: grid;
            height: 100vh;
            place-content: center;
        }
        a{
            color: black;
            font-size: 20px;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="traitementAjourContent">
    <div class="confirmationBox">
        <h1>Voiture ajoute!</h1>
        <a href="PageAccueil.php">Retourner vers la page d'accueil</a>
        <a href="ListeVehicules.php">Inspecter la liste des voitures</a>
        <a href="VenteVoiture.php">Vendre une voiture</a>
    </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $energie = $_POST['energie'];
    $boiteVitesse = $_POST['boiteVit'];
    $disponibilite = $_POST['dispo'];
    $prix = $_POST['prix'];
    $fraisDeRemise = $_POST['fraisRemise'];

    $vehicule = new Vehicule($marque, $modele, $annee, $energie, $boiteVitesse, $disponibilite, $prix, $fraisDeRemise);

    if (!isset($_SESSION['vehicules'])) {
        $_SESSION['vehicules'] = array();
    }
    $_SESSION['vehicules'][] = $vehicule;
    exit;
}
?>
</body>
</html>

