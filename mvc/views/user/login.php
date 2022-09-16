<?php
$msg_error = null;
if (isset($_GET['msg'])){
    if($_GET['msg'] == 1) {
        $msg_error = "Aucun compte relié a ce nom d'utilisateur";
    }elseif ($_GET['msg'] == 2) {
        $msg_error = "Mot de passe incorrect";
    }
}

?>
<h2>Login</h2>
<span><?php echo $msg_error; ?></span> <br><br>

<form action="index.php?module=user&action=search" method="post">
    <label for="username">Nom d'utilisateur</label>
    <input type="email" name="username" maxlength="254" required>
    <label for="password">Mot de passe</label>
    <input type="password" name="password" minlength="6" maxlength="20" required>
    <input type="submit" value="Se connecter" >
</form>