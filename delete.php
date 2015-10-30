<?php
error_reporting(E_ALL);

require('db.php');

require('head.php');
require('sidebar.php');

delete($_GET['id']);

header('Location: '. 'table.php');

require('lenja.php');
