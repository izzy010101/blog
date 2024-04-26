<?php
    
$heading = 'Home';
    
$config = require('./config.php');

$db = new Database($config['database']);

$four_posts_info = $db->query("select post.*, user.firstName as author from post 
left join user 
    on post.authorId = user.id
    LIMIT 4")->get();

    
// var_dump($four_posts_info);
    require('./views/public/index.view.php');