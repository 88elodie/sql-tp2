<?php
require_once(LIB_DIR.'/security-session.php');
?>

<h2>Éditer mon forum : </h2>
<form action="index.php?module=forum&action=edit" method="post">
<input type="hidden" name="forum_id" value="<?php echo $data[0]['forum_id']; ?>">
    <label for="title">Titre du forum (5 - 100 car.) :</label>
    <input type="text" name="title" value="<?php echo $data[0]['title'];?>">
    <label for="content">Contenu du forum (max 1000 car.) :</label><br>
    <textarea name="content" cols="150" rows="20" maxlength="1000"><?php echo $data[0]['forum_content'];?></textarea>
    <input type="submit">
</form>