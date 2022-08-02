<nav>
        <ul>
            <li><a href="./" id="selectedLink">Catalogue</a></li>
            <li><a href="#">Membres</a></li>
            <li><a href="#">Aides</a></li>
            <li><a href="#">Compte</a></li>
            <?php if (isset($_SESSION['loggedUser'])) : ?>
                <li><a href="/index.php?action=logout">Déconnexion</a></li>
            <?php endif ?>
        </ul>
</nav>