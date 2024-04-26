<?php

$config = require('./config.php');
$db = new Database($config['database']);


$id = $_POST['post_id'];

$db->query('select * from post where id = :id', [
    'id' => $id
])->findOrFail();


$db->query('delete from post where id = :id', [
    'id' => $id
]);

header('location: /posts');

exit();