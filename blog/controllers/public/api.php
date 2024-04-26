<?php

header('Access-Control-Allow-Origin: *');

$config = require('./config.php');

$db = new Database($config['database']);

$posts =  $db->query("select post.*, user.firstName as author from post 
    left join user 
        on post.authorId = user.id")->get();

echo json_encode($posts);
