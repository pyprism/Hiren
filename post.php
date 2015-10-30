<?php
error_reporting(E_ALL);

require('db.php');

require('head.php');
require('sidebar.php');

$post =  post($_GET["id"]);


 foreach($post as $row) {
        echo ("<h3>" . $row['title'] . "</h3>");
        echo ('<td>' . $row['text'] . '</td>');
        echo("<a href='delete.php?id=$row[id]'><button type='button' class='btn btn-warning glyphicon glyphicon-trash'> Delete</button></a>");
    }



require('lenja.php');
?>
