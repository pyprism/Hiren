<?php
error_reporting(E_ALL);

require('db.php');

require('head.php');
require('sidebar.php');

$posts = posts();

?>

<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th>Title</th>
      <th>Post</th>
    </tr>
  </thead>

  <tbody>
    <?php

    function truncate($text, $chars = 25) {
      $text = $text." ";
      $text = substr($text,0,$chars);
      $text = substr($text,0,strrpos($text,' '));
      $text = $text."...";
      return $text;
    }

    foreach($posts as $row) { //todo handle blank post
      echo ('<tr>');
      echo ("<td><a href='post.php?id=$row[id]'>" . $row['title'] . "</a></td>");
      echo ('<td>' . truncate($row['text']) . '</td>');
      echo ('</tr>');
    }
    ?>
  </tbody>
</table>

<?php require('lenja.php'); ?>
