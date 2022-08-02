<?php $title = "Membres"; ?>

<?php ob_start(); ?>

<h1>Liste des membres</h1>
<div class="pageContainer">
    <div class="filters">
        <div class="search">
            <h3>Opérations :</h3>
            <label for="newAdherent">Nom du nouvel adhérent</label><br>
            <input type="text" name="newAdherent">
            <br><br>
            <a href="./index.php?ficheMembreVierge.html"><button class="btnAjouter">Ajouter</button></a>
            <!-- <button class="btnSupprimer">Supprimer</button> -->
            <br><br>
            <h3>Recherche par :</h3>
            <label for="numAdherent">Numéro d'adhérent</label><br>
            <input type="text" name="numAdherent">
            <br><br>
            <label for="nomAdherent">Nom ou prénom</label><br>
            <input type="text" name="nomAdherent">
            <br><br>
            <button class="btnFiche">Rechercher</button>
            <div class="themeSelector">
                <div id="theme1"> </div>
                <div id="theme2"> </div>
            </div>
        </div>
    </div>
    <!-- SECTION CATALOGUE /////////////////////////// -->
    <div class="catalogue">
        <div class="ligneCatalogue">
            <div class="colonneTitreB">
                <strong>Nom Prénom, Rue, Téléphone</strong>
            </div>
            <div class="colonneStatusB">
                <strong>Numéro</strong>
            </div>
            <div class="colonneEmprunteurB">
                <strong>Emprunts</strong>
            </div>
            <div class="colonneFicheB">
                <strong>Infos</strong>
            </div>
        </div>

        <!-- EXEMPLE 1 -->
        <div class="ligneCatalogueB">
            <div class="colonneTitre">
                <p class="booktitle">Falez Mathieu, Rue de l'abreuvoir, 06.11.51.27.73</p>
            </div>
            <div class="colonneStatus">
                <p class="booktitle">00210</p>
            </div>
            <div class="colonneEmprunteur">
                <select name="" class="selectEmpruntMembre" id="">
                    <option value="Angels & Demons" class="">Angels & Demons</option>
                    <option value="Artist and the Mathematician, The" class="">Artist and the Mathematician, The
                    </option>
                    <option value="Theory of Everything, The" class="">Theory of Everything, The</option>
                </select>
            </div>
            <div class="colonneFiche">
                <a href="./index.php?fiche_membre.php"><button class="btnFicheMembre">Infos</button></a>
            </div>
        </div>
        <!-- FIN -->
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("base.php");