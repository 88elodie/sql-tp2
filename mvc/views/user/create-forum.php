<?php
require_once(LIB_DIR.'/security-session.php');

$msg_error = null;
if (isset($_GET['msg'])){
    if($_GET['msg'] == 1) {
        $msg_error = "Veuillez remplir tout les champs";
    }elseif ($_GET['msg'] == 2) {
        $msg_error = "Veuillez entrer le titre au bon format";
    }elseif ($_GET['msg'] == 3) {
        $msg_error = "Veuillez entrer le contenu au bon format";
    }
}
?>
<h2>Créer un forum</h2>
<span><?php echo $msg_error; ?></span> <br><br>
<form action="index.php?module=forum&action=insert" method="post">
    <label for="title">Titre du forum (5 - 100 car.) :</label>
    <input type="text" name="title" minlength="5" maxlength="100" required>
    <label for="content">Contenu du forum (max 1000 car.) :</label><br>
    <textarea name="content" cols="150" rows="20" minlength="1" maxlength="1000" required></textarea>
    <input type="submit" value="Publier mon forum">
</form>