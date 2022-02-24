<?php


    spl_autoload_register(function ($class_name) {
        

        $array_path = array(
            '/models/',
            '/components/'
        );
        

        $path = $_SERVER['DOCUMENT_ROOT'] . $class_name . 'php';
        
        foreach ($array_path as $path) {
            
            $path = $_SERVER['DOCUMENT_ROOT'] .$path. $class_name . '.php';  
                       
            if (is_file($path)) {
               
                include_once $path;
            }
    };
});