<?php

$config = require('./config.php');
$db = new Database($config['database']);

$email = $_SESSION['user']['email'];


    $db->query('update user SET logged_in = :logged_in WHERE email = :email', [
    'logged_in' => 0,
    'email' => $email,
    ])->update();



session_destroy();
header('location: /');