<?php $title = "Catalogue"; ?>

<?php ob_start(); ?>
<h1>Nouvel ouvrage</h1>
    <div class="pageContainer">
        <div class="filters">
            <div class="search">
                <h3>Opérations :</h3>
                <a href="./catalogue.html"><button class="btnAjouter">Valider</button></a>
                <a href="./catalogue.html"><button class="btnSupprimer">Supprimer</button></a>

                <h3>Emprunteur :</h3>
                <label for="Numéro">Identifiant</label><br>
                <input type="text" name="Numéro">
                <br><br>
                <label for="Nom ou prénom">Nom ou prénom</label><br>
                <input type="text" name="Nom ou prénom">
                <br><br>
                <label for="Adresse">Adresse</label><br>
                <input type="text" name="Adresse">
                <br><br>
                <button class="btnFiche">Rechercher</button>
                <div class="themeSelector">
                    <div id="theme1"> </div>
                    <div id="theme2"> </div>
                </div>
            </div>
        </div>
        <!-- SECTION CATALOGUE /////////////////////////// -->
        <div class="DetailContainer">
            <div class="my2div">
                <label for="InputTitre" class="labelOuvrage">Titre</label>
                <input type="text" name="InputTitre" value="inconnu" class="InputOuvrage">
                <br>

                <label for="InputAuteur" class="labelOuvrage">Auteur</label>
                <select name="InputAuteur" class="InputOuvrage">
                    <option value="Alan Wake">inconnu</option>
                    <option value="Alan Wake">Alan Wake</option>
                    <option value="Redouane">Redouane</option>
                    <option value="Théodore">Théodore</option>
                    <option value="Jean-Charles">Jean-Charles</option>
                    <option value="Mathieu">Mathieu</option>
                </select>
                <br>
            </div>
            <div class="my2div">
                <label for="InputDateDePublication" class="labelOuvrage">Publication</label>
                <input type="date" name="InputDateDePublication" value="inconnu" class="InputOuvrage">
                <br>

                <label for="InputRésumé" class="labelOuvrage">Genre</label>
                <select name="InputGenre" class="InputOuvrage">
                    <option value="Roman">inconnu</option>
                    <option value="Roman">Roman</option>
                    <option value="Poésie">Poésie</option>
                    <option value="Aventure">Aventure</option>
                    <option value="Etc...">Etc...</option>
                </select>
            </div>
            <br>
            <label for="InputRésumé" class="labelOuvrage">Résumé</label>
            <textarea name="InputRésumé" cols="30" rows="10" class="TextAreaOuvrage">inconnu</textarea>
            <br>

            <table class="tableEmprunteur">
                <tr class="tableThead">
                    <td>Identifiant</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Adresse</td>
                    <td>Téléphone</td>
                </tr>
                <tr class="tableTr">
                    <td>inconnu</td>
                    <td>inconnu</td>
                    <td>inconnu</td>
                    <td>inconnu</td>
                    <td>inconnu</td>
                </tr>
                <tr class="tableTr">
                    <td class="tableTd">inconnu</td>
                    <td class="tableTd">inconnu</td>
                    <td class="tableTd">inconnu</td>
                    <td class="tableTd">inconnu</td>
                    <td class="tableTd">inconnu</td>
                </tr>
                <tr class="tableTr">
                    <td>inconnu</td>
                    <td>inconnu</td>
                    <td>inconnu</td>
                    <td>inconnu</td>
                    <td>inconnu</td>
                </tr>
            </table>
        </div>

    </div>

<?php $content = ob_get_clean(); ?>



<?php require("base.php");