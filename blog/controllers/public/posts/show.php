<?php

if(!isset($_SESSION['user'])) {
    header('location: /login');
}

$config = require('./config.php');

$db = new Database($config['database']);


$heading = 'More About Post';


$id = $_GET['id'];
var_dump($id);
$post = $db->query('select * from post where id = :id', [
    'id' => $id
])->findOrFail();


require('./views/public/posts/show.view.php');