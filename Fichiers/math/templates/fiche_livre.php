<?php $title = "Catalogue"; ?>

<?php ob_start(); ?>

<h1>Details de l'ouvrage</h1>
<div class="pageContainer">
    <div class="filters">
        <div class="search">
            <h3>Opérations :</h3>
            <a href="./catalogue.html"><button class="btnAjouter">Valider</button></a>
            <a href="./catalogue.html"><button class="btnSupprimer">Supprimer</button></a>
            <div class="selectStatusE">Emprunté par 00123</div>

            <h3>Emprunteur :</h3>
            <label for="Numéro">Identifiant</label><br>
            <input type="text" name="Numéro" class="inputEmprunteur">
            <br><br>
            <label for="Nom ou prénom">Nom ou prénom</label><br>
            <input type="text" name="Nom ou prénom" class="inputEmprunteur">
            <br><br>
            <label for="Adresse">Adresse</label><br>
            <input type="text" name="Adresse" class="inputEmprunteur">
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
            <input type="text" name="InputTitre" value="<?= $book['Title'] ?>" class="InputOuvrage" disabled>
            <br>

            <label for="InputAuteur" class="labelOuvrage">Auteur</label>
            <input type="text" name="InputTitre" value="<?= $book['author'] ?>" class="InputOuvrage" disabled>
            <br>
        </div>
        <div class="my2div">
            <label for="InputDateDePublication" class="labelOuvrage">Publication</label>
            <input type="date" name="InputDateDePublication" value="02/10/1978" class="InputOuvrage" disabled>
            <br>

            <label for="InputRésumé" class="labelOuvrage">Genre</label>
            <input type="text" name="InputTitre" value="<?= $book['category'] ?>" class="InputOuvrage" disabled>
        </div>
        <br>
        <label for="InputRésumé" class="labelOuvrage">Résumé</label>
        <textarea name="InputRésumé" cols="30" rows="10" class="TextAreaOuvrage"
            disabled><?= $book['description'] ?></textarea>
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
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
            <tr class="tableTr">
                <td>12345</td>
                <td>FALEZ</td>
                <td>Mathieu</td>
                <td>142, rue de l'abreuvoir 76116 Catenay</td>
                <td>06.11.51.27.73</td>
            </tr>
            <tr class="tableTr">
                <td class="tableTd">00012</td>
                <td class="tableTd">BIDULE</td>
                <td class="tableTd">Jean-Louis</td>
                <td class="tableTd">34, rue de l'amiral Pinpin 34213 Paramiok</td>
                <td class="tableTd">06.21.54.23.83</td>
            </tr>
        </table>
    </div>

</div>

<?php $content = ob_get_clean(); ?>



<?php require("base.php");