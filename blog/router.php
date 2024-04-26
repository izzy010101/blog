<?php
    
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    
    //all routes
    $routes = [
        '/' => 'controllers/public/home.php',
        '/about' => 'controllers/public/about.php',
        '/blog' => 'controllers/public/blog.php',
        '/contact' => 'controllers/public/contact.php',
        '/posts' => 'controllers/public/posts/index.php',
        '/post/create' => 'controllers/public/posts/create.php',
        '/show' => 'controllers/public/posts/show.php',
        '/post/edit' => 'controllers/public/posts/edit.php',
        '/post/update' => 'controllers/public/posts/update.php',
        '/post/delete' => 'controllers/public/posts/delete.php',
        '/register' => 'controllers/public/register.php',
        '/login' => 'controllers/public/login.php',
        '/logout' => 'controllers/public/logout.php',
        '/privacy' => 'controllers/public/privacy.php',
        '/terms' => 'controllers/public/terms.php',
        '/api/posts/all' => 'controllers/public/api.php'
        
        
    ];
    
    // abort function
    function abort($code = 404) {
        http_response_code($code);

        require ("views/$code.php");
        die();
    }
    
    // check if the route exists
    function routeToController($uri, $routes) {
        if(array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            abort();
        }
    }
    
    routeToController($uri, $routes);