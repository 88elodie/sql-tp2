<?php
require_once(LIB_DIR.'/security-session.php');
?>

<form action="index.php?module=user&action=edit" method="post">
    <input type="hidden" name="userId" value="<?php echo $data['user_id']; ?>">
        <label>
            Nom
            <input type="text" name="name" value="<?php echo $data['name']; ?>">
        </label>
        <label>
            Courriel
            <input type="email" name="email" value="<?php echo $data['email']; ?>">
        </label>
        <label>
            Date de naissance
            <input type="date" name="birthday" value="<?php echo date_format(date_create($data['DOB']),"Y-m-d") ?>">
        </label>
        <input type="submit">
    </form>
 