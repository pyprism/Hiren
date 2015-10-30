<?php
error_reporting(E_ALL);

require('db.php');
if (isset($_POST['title']) &&  $_POST['text']) {
  add_new_post($_POST['title'], $_POST['text']);
}
require('head.php');
require('sidebar.php');

?>

<!-- form -->

<form class="form col-md-12 center-block" action="form.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="usr">Title:</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="usr">Content:</label>
    <textarea name="text" ></textarea>
  </div>
  <div class="form-group">
    <button class="btn btn-primary btn-lg btn-block">Save</button>
  </div>
</form>
<?php require('lenja.php'); ?>
