<?php
require_once(LIB_DIR.'/security-session.php');
?>

<h2>Mes forums</h2>

<div class="forum-container">
  <?php foreach($data as $row) { ?>
  <div>
    <h3><?php echo $row['title'] ?></h3>
    <p><?php echo $row['forum_content'] ?></p>
    <span><?php echo date_format(date_create($row['post_date']),"Y/m/d") ?> </span><a class="edit" href="?module=forum&action=viewedit&id=<?php echo $row['forum_id']; ?>">Editer</a>
    <form class="delete" action="?module=forum&action=delete" method="post"><input type="hidden" name="forum_id" value="<?php echo $row['forum_id'] ?>"><input type="submit" Value="Effacer" class=delete></form>
  </div>
  <?php } ?>
</div>