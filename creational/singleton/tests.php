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
      
      unset( $data );
      
      $data2 = Singleton::getInstance();
      
      echo '<pre>';
      print_r($data2 -> getData( 'name' ));
      echo '</pre>';
?>
