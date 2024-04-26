<?php
    
$heading = '';

require ('./classes/Validator.php');
$config = require('./config.php');
$db = new Database($config['database']);
$err = [];
$salt = "xyz321@";

//get emails from db
$emails_db = $db->query('select email from user')->get();

    if(is_post_request()) {

        // validate
    
            $first_name = h($_POST['firstName']);
            $email = h($_POST['email']);
            $password = h($_POST['passwordHash']);
            $re_password = h($_POST['re_passwordHash']);
            
            if(empty($first_name)) {

                $err['name_mty'] = "Name can't be empty field";
            }
            
            if(empty($email)) {

                $err['email_empty'] = "Email can't be empty field";
            }

            if(empty($password)) {

                $err['pass_empty'] = "Password can't be empty field";
            }

            if(empty($re_password)) {

                $err['repass_mty'] = "Re_password can't be empty field";
            }

            if(!Validator::string(strlen($first_name), 3, 100)){

                $err['name_err'] = "Name must be longer than 3 letters";

            } 
            if(!Validator::email($email)) {

                $err['email_err'] = "Email must be written correctly.";

            } 
            if(!Validator::EmailExists($email, $emails_db)) {

                $err[] = "Account with this email already exists.";
            }

            if(!Validator::pass_length(strlen($password), 5, 12)) {

                $err['pass_err'] = "Password must be longer than 6 chars and less than 12 chars!";

            }  
            if($password != $re_password){

                $err['match_err'] = "Passwords don't match!";

            } 


            //check if array has mistakes or no
            if(count($err) === 0){
                $db->query('insert into user(firstName, email, passwordHash) values(:firstName, :email, :passwordHash)', [
                'firstName' => $_POST['firstName'],
                'email' => $_POST['email'],
                'passwordHash' => $salt.password_hash($_POST['passwordHash'], PASSWORD_BCRYPT),
                 ]);

                redirect_to('http://blog.test/register?succ=You are successfully registrated!');
                exit;

            } 

                
    
    } else {
        
        echo "nije post method";
    }
            
          
    

    
    require('./views/public/register.view.php');