<h2>Forum de Maisonneuve</h2>
<div class="forum-container">
  <?php foreach($data as $row) { ?>
  <div>
    <h3><?php echo $row['title'] ?></h3>
    <p><?php echo $row['forum_content'] ?></p>
    <span><?php echo date_format(date_create($row['post_date']),"Y/m/d") ?></span><span class=author>, par : <?php echo $row['name'] ?>.</span>
  </div>
  <?php } ?>
</div>
<footer>
<p>
  MVC framework
</p>
</footer>
