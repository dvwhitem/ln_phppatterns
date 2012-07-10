<?php
  
    function __autoload($class)
    {
        $file = strtolower($class) .'.php';
        
        if(file_exists($file))
        {
            require $file;
        }
    }
    
    $bloggs = new BloggsCommsManager();
    
    echo '<pre>';
    print_r($bloggs -> getHeaderText());
    echo '</pre>';
    
    echo '<pre>';
    print_r($bloggs -> getApptEncoder() -> encode());
    echo '</pre>';
    
    echo '<pre>';
    print_r($bloggs -> getFooterText());
    echo '</pre>';
