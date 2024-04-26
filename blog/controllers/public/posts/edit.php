<?php

$config = require('./config.php');

$db = new Database($config['database']);


$heading = 'Edit This Post';

$id = $_GET['id'];



$post = $db->query('select * from post where id = :id', [
    'id' => $id
])->findOrFail();


require ('./views/public/posts/edit.view.php');
