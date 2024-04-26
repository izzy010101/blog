<?php
    
$heading = '';

require ('./classes/Validator.php');
$config = require('./config.php');
$db = new Database($config['database']);
$err = [];



if(is_post_request()) {

    $login_email = h($_POST['login_email']);
    $pass = h($_POST['login_password']);

    if(empty($login_email)) {

        $err['email_empty'] = "Email field can't be empty";
    }
    if(!Validator::email($login_email)) {

        $err['email_err'] = "Email must be written correctly.";
    }
    if(empty($pass)) {

        $err['pass_empty'] = "Password field can't be empty";
    }
    if(!Validator::pass_length(strlen($pass), 5, 12)) {

        $err['pass_err'] = "Password must be longer than 6 chars and less than 12 chars!";
    }


    if(count($err) === 0) {
            
        $user = $db->query('select * from user where email = :email', [
            'email' => $login_email
        ])->find();

        if($user) {

            if(password_verify($pass, preg_replace('/^xyz321@/', '', $user['passwordHash']))) {
     
                $_SESSION['user'] = [
                    'email' => $user['email'],
                    'name' => $user['firstName'],
                    'id' => $user['id']
                ];
     
               
                $login_user = $db->query('UPDATE user SET logged_in = :logged_in WHERE email = :email', [
                 'logged_in' => 1,
                 'email' => $user['email']
                 ])->update();
     
                //I did not redirect here on blog posts even maybe better becuse I wanted to display message from get
                redirect_to('http://blog.test/posts?succ=You are successfully logged in!');
                exit;
     
            } 

        }
   }

}

    
    require('./views/public/login.view.php');