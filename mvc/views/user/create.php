<?php
$msg_error = null;
if (isset($_GET['msg'])){
    if($_GET['msg'] == 1) {
        $msg_error = "Veuillez remplir tout les champs";
    }elseif ($_GET['msg'] == 2) {
        $msg_error = "Veuillez entrer le nom au bon format";
    }elseif ($_GET['msg'] == 3) {
        $msg_error = "Veuillez entrer l'email au bon format";
    }elseif ($_GET['msg'] == 4) {
        $msg_error = "Veuillez entrer le username au bon format";
    }elseif ($_GET['msg'] == 5) {
        $msg_error = "Veuillez entrer le mot de passe au bon format";
    }elseif ($_GET['msg'] == 6) {
        $msg_error = "Ce nom d'utilisateur est déja utilisé";
    }
}

?>
<h2>Créer un compte</h2>
<span><?php echo $msg_error; ?></span> <br><br>
<form action="index.php?module=user&action=insert" method="post">
        <label>
            Nom (2 - 25 caractères) *
            <input type="text" name="name" minlength="2" maxlength="25" required>
        </label>
        <label>
            Courriel *
            <input type="email" name="email" maxlength="254" required>
        </label>
        <label>
            Date de naissance *
            <input type="date" name="birthday" required>
        </label>
        <label>
            Username (email) *
            <input type="email" name="username" maxlength="254" required>
        </label>
        <label>
            Mot de passe (6 - 20 caractères et seulement lettres ou chiffres) *
            <input type="password" name="password" minlength="6" maxlength="20" pattern="^[a-zA-Z0-9]*" required>
        </label>
        <input type="submit" value="Créer mon compte">
    </form>
 