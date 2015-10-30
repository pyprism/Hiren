<?php
error_reporting(E_ALL);

/*
* Handle all database related operation
*/

// handle database connection
function prepare_db(){
  $db_name = 'hiren';
  $username = "root";
  $password = "";
  try {
    $db = new PDO('mysql:host=localhost;dbname=' . $db_name, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }  catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
  }
  return $db;
}

// function for adding new content( post)
function add_new_post($title, $text) {
  $db = prepare_db();
  $data = $db->prepare('insert into hiren (text, title) values (:text, :title)');
  $data->bindParam(':text', $text);
  $data->bindParam(':title', $title);
  $data->execute();
  header('Location: '. 'table.php');
}

//get all posts from database
function posts() {
  $db = prepare_db();
  $posts = $db->query('select * from hiren');
  return $posts;
}

//get single post by id
function post($id) {
  $db = prepare_db();
  $post = $db->query('SELECT * FROM hiren WHERE id = ' . $id);
  return $post;
}

//delete single post by id
function delete($id) {
  $db = prepare_db();
  $statement = $db->prepare('DELETE FROM hiren WHERE id = :id');
  $statement->bindParam(':id', $id);
  $statement->execute();

}
