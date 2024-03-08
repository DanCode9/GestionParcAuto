<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parc Auto</title>
</head>
<body>
<?php include('Navbar.php') ?>
<div class="pageAccueilContainer">
    <h1>Ajouter une voiture dans le parc</h1>
    <form class="formulaireAjoutVoiture" action="TraitementAjoutVehicule.php" method="POST">
        <div class="">
            Marque: <label>
                <input name="marque" type="text" placeholder="Marque">
            </label>
        </div>
        <div class="">
            Modele: <label>
                <input name="modele" type="text" placeholder="Modele">
            </label>
        </div>
        <div class="">
            Annee: <label>
                <input name="annee" type="number" placeholder="Annee">
            </label>
        </div>
        <div class="">
            Energie: <label>
                <input name="energie" type="text" placeholder="Energie">
            </label>
        </div>
        <div class="">
            BoiteVitesse: <label>
                <input name="boiteVit" type="text" placeholder="boiteVitesse">
            </label>
        </div>
        <div class="">
            Disponibilite: <label>
                <input name="dispo" type="checkbox" placeholder="Disponibilite">
            </label>
        </div>
        <div class="">
            Prix: <label>
                <input name="prix" type="number" placeholder="Prix">
            </label>
        </div>
        <div class="">
            FraisRemise: <label>
                <input name="fraisRemise" type="number" placeholder="fraisRemise">
            </label>
        </div>
        <input class="submitBtn" type="submit" value="Ajouter Voiture" name="valider">
    </form>
</div>

</body>
</html>
<style>
    * {
        font-family: "Roboto Light", sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        text-decoration: none;
    }

    h1 {
        color: white;
    }

    .pageAccueilContainer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;gap: 2rem;
        height: 100vh;
        background-image: url("../GestionParcAuto/img/carbgc.jpg");

    }

    .pageAccueilContainer a {
        color: white;
    }

    .formulaireAjoutVoiture {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 20px;
        width: fit-content;
        font-size: 1.5rem;
        background: rgba(255, 255, 255, 0.68);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);

    }

    .formulaireAjoutVoiture input {
        padding: 10px;
        font-size: 20px;
    }

    .submitBtn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        margin-top: 20px;
        cursor: pointer;
    }

    .submitBtn:hover {
        background-color: #0056b3;
    }
</style>