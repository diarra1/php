<?php
session_start(); // Démarrer les sessions nécessaires pour le login/logout
//var_dump($_POST);
$user_is_logged = false; // Contient l'information utilisateur connecté ou pas
$username = '';

if (array_key_exists('login', $_POST) && array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {
// Utilisateur cherche à se connecter
$username = $_POST['username'];
$password = $_POST['password'];
// Authentification à faire ici
$est_authentifie = ('toto' === $password);
if ($est_authentifie) {
// Connecter l'utilisateur
$_SESSION['username'] = $username;
$user_is_logged = true;
}
} else if (array_key_exists('logout', $_POST)) {
// Utilisateur cherche à se déconnecter
unset($_SESSION['username']);
$user_is_logged = false;
$username = '';
} else {
$user_is_logged = array_key_exists('username', $_SESSION);
if ($user_is_logged) {
$username = $_SESSION['username'];
}
}

?>
<?php if (!$user_is_logged) { ?>
    <form method="post" name="loginform"><!--Pas d'action : postback -->
        <div>
            <label for="username">Pseudo :</label>
            <input type="text" placeholder="votre pseudo" name="username" id="username">
            <label for="password">Mot de passe :</label>
            <input type="password" placeholder="votre mot de passe" name="password" id="password">
        </div>
        <div>
            <input type="submit" name="login" value="Connexion"/>
        </div>
    </form>
<?php } else { ?>
    <form method="post" name="logoutform">
        <span>Bonjour <?= $username ?></span><input type="submit" name="logout" value="Déconnexion"/>
    </form>
<?php } ?>
