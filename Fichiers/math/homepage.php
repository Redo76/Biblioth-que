<?php $title = "Catalogue"; ?>

<?php ob_start(); ?>

<h1>Catalogue des ouvrages</h1>
<div class="pageContainer">
    <div class="filters">
        <div class="search">
            <h3>Opérations :</h3>
            <label for="titre">Titre</label><br>
            <input type="text" name="titre" class="inputEmprunteur">
            <br><br>
            <a href="./index.php?ficheLivreVierge.html"><button class="btnAjouter">Ajouter</button></a>
            <!-- <button class="btnSupprimer">Supprimer</button> -->
            <br><br>
            <h3>Recherche par :</h3>
            <label for="titre">Titre</label><br>
            <input type="text" name="titre" class="inputEmprunteur">
            <br><br>
            <label for="auteur">Auteur</label><br>
            <input type="text" name="auteur" class="inputEmprunteur">
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
                <strong>Titre</strong>
            </div>
            <div class="colonneStatusB">
                <strong>Status</strong>
            </div>
            <div class="colonneEmprunteurB">
                <strong>Emprunteur</strong>
            </div>
            <!-- <div class="colonneFicheB">
                    <strong>Fiche</strong>
                </div> -->
        </div>

        <!-- EXEMPLE 1 -->
        <?php foreach ($books as $key => $book) : ?>
        <div class="ligneCatalogueB">
            <div class="colonneTitre">
                <a href="./index.php?action=fiche&id=<?= $book['id'] ?>">
                    <p class="booktitle"><?= $book['Title'] ?></p>
                </a>
            </div>
            <div class="colonneStatus">
                <select name="" class="selectStatusD" id="s1">
                    <option value="Dispo" class="optDispo" selected="selected">Disponible</option>
                    <option value="Prêté" class="optPret">Prêté</option>
                </select>
            </div>
            <div class="colonneEmprunteur">
                <input type="text" value="" class="inputEmprunteur" id="e1">
            </div>
            <!-- <div class="colonneFiche">
                        <a href="./index.php?action=fiche&id=<?= $book['id'] ?>"><button class="btnFiche">Fiche</button></a>
                    </div> -->
        </div>
        <?php endforeach ?>
        <!-- FIN -->

    </div>

    <?php $content = ob_get_clean(); ?>

    <?php require("base.php");