<?php
      function __autoload($class)
      {
          $file = strtolower($class) .'.php';
          
          if(file_exists($file))
          {
              require $file;
          }
      }
      
      $data =  Singleton::getInstance();
      
      $data -> setData( 'name', 'John D.' );
      
      echo '<pre>';
      print_r($data -> getData( 'name' ));
      echo '</pre>';
?>
