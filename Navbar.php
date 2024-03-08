<nav class="navbar navbar-default">
    <a class="navbar-brand" href="PageAccueil.php">Parc Auto Dan</a>
        <ul class="nav navbar-nav">
            <li><a href="ListeVehicules.php">Liste voitures</a></li>
            <li><a href="VenteVoiture.php">Vendre une voiture</a></li>
            <li><a href="FormulaireRechercheVehicule.php">Chercher une voiture</a></li>
            <li><a href="InformationsParcAuto.php">Info ParcAuto</a></li>
        </ul>
</nav>
<style>
    *{
        list-style: none;
        text-decoration: none;
    }
    .navbar {
        background-color: #252422;
        display: flex;
        justify-content: space-between;
        font-size: 25px;
        height: fit-content;
        align-items: center;
        padding: 20px;
    }
    .navbar a{
        color: #f6f6f6;
    }
    .navbar-nav{
        color: #f6f6f6;
        display: flex;
        gap: 2rem;
    }
</style>