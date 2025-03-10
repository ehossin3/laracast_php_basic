<?php
require "functions.php";
require 'Database.php';

// require 'router/routers.php';
$config = require 'config.php';



$db = new Database($config['database']);
$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = ?";
$post = $db->query($query, [$id])->fetch();
dd($post);
