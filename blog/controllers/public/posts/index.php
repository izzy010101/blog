<?php

if(!isset($_SESSION['user'])) {
    header('location: /login');
}

$config = require('config.php');

$db = new Database($config['database']);

$user_id = $_SESSION['user']['id'];

$heading = 'Posts';


$logged_user_posts = $db->query("select post.id AS post_id, user.id AS user_id, post.* 
FROM post 
LEFT JOIN user ON user.id = post.authorId 
WHERE post.authorId=".$user_id)->get();

require('./views/public/posts/index.view.php');