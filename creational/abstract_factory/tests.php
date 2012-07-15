<?php
    function __autoload($class)
    {
        $file = strtolower($class) .'.php';
        
        if(file_exists($file))
        {
            require $file;
        }
    }
    
    echo AppRunner::execute(AppRunner::BMW) -> auto() -> model();
?>
