<?php
$currentUser = $currentUser ?? false;
?>

<header>
    <a href="/" class="logo">Hakkuframwork Blog</a>
    <ul class="header-menu">
        <?php if ($currentUser) : ?>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/add-article.php' ? 'active' : '' ?>>
                <a href="/add-article.php">Écrire un article</a>
            </li>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-logout.php' ? 'active' : '' ?>>
                <a href="/auth-logout.php">Déconnexion</a>
            </li>
            <li class="<?= $_SERVER['REQUEST_URI'] === '/profile.php' ? 'active' : '' ?>header-profile">
                <a href="/profile.php"><?= $currentUser['firstname'][0] . $currentUser['lastname'][0] ?></a>
            </li>
        <?php else : ?>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-register.php' ? 'active' : '' ?>>
                <a href="/auth-register.php">Inscription</a>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-login.php' ? 'active' : '' ?>>
                <a href="/auth-login.php">Connexion</a>
            </li>
            </li>
        <?php endif; ?>
    </ul>
</header>