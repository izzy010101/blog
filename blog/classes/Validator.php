<?php
    
    // class to validate all the inputs
    class Validator
    {

         //validate empty I didn't use in this project but I wrote it 
         public static function e($param) {

            $param = trim($param);
            return empty($param);

        }

        //validate string
        public static function string($value, $min = 3, $max = INF)
        {
            $value = trim($value);
            return $value > $min && $value < $max;
        }

    
        //validate email
        public static function email($value) {

            return filter_var($value, FILTER_VALIDATE_EMAIL);

        }

        //validate pass
        public static function pass_length($pass, $min= 6, $max = INF) {

            $pass = trim($pass);
            return $pass > $min && $pass < $max;

        }

        //checking if email exists in array of emails from db
        public static function EmailExists($email, $emails_from_db)
        {
            $res = in_array($email, $emails_from_db);
            return $res;
        }

    }


    // $res = $db->query('select email from user');
    
    //         $emails = [];
    //         while ($emai = $res->fetchAll()) {
    //             $emails[] = $email; 
    //         }
    //         return $emails;
    //     }