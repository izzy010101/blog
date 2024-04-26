<?php
    
$heading = 'Blog Post';
    
$config = require('./config.php');

$db = new Database($config['database']);


$post_id = $_GET['id'];

$post_by_id = $db->query("select * from post where id=".$post_id)->get();



require('./views/public/blog.view.php');
    
    