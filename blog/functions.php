<?php
    
    function routeIs($uri) {
        return $_SERVER['REQUEST_URI'] === $uri;
    }
    
    function dd($var) {
        
        echo "<pre>";
            var_dump($var);
        echo "</pre>";
        
        die();
    }

    function authorize($condition, $status = Response::FORBIDDEN) {

        if(! $condition) {
            abort($status);
        }

    }
    
    function u($string="") {
        return urlencode($string);
    }
    
    function raw_u($string="") {
        return rawurlencode($string);
    }

    function h($string="") {
        return htmlspecialchars($string);
    }
    

    function redirect_to($location) {
        header("Location: " . $location);
        exit;
    }
    
    function is_post_request() {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }
    
    function is_get_request() {
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    function is_file_request() {
        return $_SERVER['REQUEST_METHOD'] == 'FILE';
    }


